<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\OilType;
use App\Models\Oil;
use App\Models\Subsection;

class CatalogueController extends StaticController
{
    use HelperTrait;
    private $oilDoneIds = [];

    public function _default(Request $request, $slug = null, $sub_slug = null)
    {
        $arrayKeyFirst = function (array $oilType) {
            foreach ($oilType as $key => $val) {
                return $key;
            }
        };

        $isGetRequest = $request->method() == 'GET';
        $menu = $this->getCatalogueMenu();
        $this->data['breadcrumbs'][] = ['href' => $menu->slug, 'name' => $menu[App::getLocale()]];

        if ($isGetRequest) {
            $this->data['menu_active_id'] = $menu->id;
            $this->data['types'] = OilType::where('active', 1)->get();
            if (!session()->has('last_slug')) $request->session()->put('last_slug', $slug);
            if (session()->get('last_slug') != $slug) session()->forget('filters');
        } else {
//            $filters = [];
//            foreach ($request->all() as $fieldName => $fieldVal) {
//                foreach (['viscosity', 'engine_type', 'tolerances'] as $filterType) {
//                    if (strpos($fieldName,$filterType) !== false) {
//                        if (!isset($filters[$filterType])) $filters[$filterType] = [];
//                        $filters[$filterType][] = $fieldVal;
//                    }
//                }
//            }
            $request->session()->put('filters', $request->filters);
        }

        if ($slug) {
            if (!$oilType = OilType::where('slug', $slug)->where('active', 1)->pluck('name_' . App::getLocale(), 'id')->toArray()) abort(404);
            $this->data['oil_type_id'] = $arrayKeyFirst($oilType);
            $this->data['breadcrumbs'][] = ['href' => $menu->slug . '/' . $slug, 'name' => $oilType[$this->data['oil_type_id']]];

            if ($sub_slug) {
                if ($subsection = Subsection::where('slug', $sub_slug)->first()) {
                    $this->getFilteredOil($this->data['oil_type_id'], $subsection->id, (session()->has('filters') ? session()->get('filters') : []));
                    if ($isGetRequest) {
                        $this->data['breadcrumbs'][] = ['href' => $menu->slug . '/' . $slug . '/' . $sub_slug, 'name' => $subsection['name_' . App::getLocale()]];
                        $this->data['subsection_id'] = $subsection->id;
                        $this->getOilSubsections();
                        $this->getCounters();
                        $this->getOilPaginate();
                        return $this->showView('oil_type');
                    } else {
                        $this->getOilPaginate();
                        return $this->getAjaxHtml();
                    }
                } else {
                    if (!$this->data['oil'] = Oil::where('slug', $sub_slug)->where('active', 1)->first()) abort(404);
                    $this->data['breadcrumbs'][] = ['href' => $menu->slug . '/' . $slug . '/' . $sub_slug, 'name' => $this->data['oil']->name];
                    return $this->showView('oil');
                }
            } else {
                $this->getFilteredOil($this->data['oil_type_id'], null, (session()->has('filters') ? session()->get('filters') : []));
                if ($isGetRequest) {
                    $this->getOilSubsections();
                    $this->getCounters();
                    $this->getOilPaginate();
                    return $this->showView('oil_type');
                } else {
                    $this->getOilPaginate();
                    return $this->getAjaxHtml();
                }
            }
        } else {
            $this->data['head'] = $menu[App::getLocale()];
            return $this->showView('oil_types');
        }
    }

    private function getFilteredOil($oilTypeId, $subsectionId = null, $filters = [])
    {
        $this->data['oil'] = collect();
        $oil = Oil::where('oil_type_id', $oilTypeId)->where('active', 1);

        if ($subsectionId)
            $oil = $oil->where('subsection_id', $subsectionId);

        if (isset($filters['viscosity']) && is_array($filters['viscosity']) && count($filters['viscosity']))
            $oil = $oil->whereIn('viscosity_grade_id', $filters['viscosity']);

        $oil = $oil->get();

        $engineTypeFiltersOn = isset($filters['engine_type']) && is_array($filters['engine_type']) && count($filters['engine_type']);
        $tolerancesFiltersOn = isset($filters['tolerances']) && is_array($filters['tolerances']) && count($filters['tolerances']);

        foreach ($oil as $item) {
            $this->data['oil']->push($item);
            if (!$engineTypeFiltersOn && !$tolerancesFiltersOn) $this->data['oil']->push($item);
            else if ($engineTypeFiltersOn && !$tolerancesFiltersOn) {
                $this->processingFilters($item, 'engineTypes', $filters['engine_type'], true);
            } else if ($tolerancesFiltersOn && $tolerancesFiltersOn && $this->processingFilters($item, 'engineTypes', (isset($filters['engine_type']) ? $filters['engine_type'] : []), false)) {
                $this->processingFilters($item, 'tolerances', $filters['tolerances'], true);
            }
        }
    }

    private function getOilPaginate()
    {
        $this->data['oil'] = $this->data['oil']->paginate(12);
    }

    private function getAjaxHtml()
    {
        $html = view('blocks._oil_list_block', $this->data)->render();
        return response()->json(['success' => true, 'html' => $html, 'oil_count' => count($this->data['oil'])]);
    }

    private function processingFilters($item, $foreignPropName, array $filtersIds, $addingItem = true)
    {
        $match = false;
        foreach ($item[$foreignPropName] as $foreignProp) {
            if (in_array($foreignProp->id, $filtersIds) && !in_array($item->id, $this->oilDoneIds)) {
                $match = true;
                if ($addingItem) {
                    $this->oilDoneIds[] = $item->id;
                    $this->data['oil']->push($item);
                }
                break;
            }
        }
        return $match;
    }

    private function getCatalogueMenu()
    {
        return Menu::find(3);
    }
    
    private function getOilSubsections()
    {
        $this->data['subsections'] = [];
        $subsectionsDone = [];
        $oil = Oil::where('oil_type_id', $this->data['oil_type_id'])->where('subsection_id', '!=', null)->where('active', 1)->get();
        foreach ($oil as $item) {
            if (!in_array($item->subsection_id, $subsectionsDone)) {
                $this->data['subsections'][] = [
                    'id' => $item->subsection_id,
                    'slug' => $item->subsection->slug,
                    'name' => $item->subsection['name_' . app()->getLocale()]
                ];
            }
            $subsectionsDone[] = $item->subsection_id;
        }
    }

    private function getCounters()
    {
        $this->data['viscosity'] = [];
        $this->data['engine_types'] = [];
        $this->data['tolerances'] = [];
        $this->data['gas_engine_count'] = 0;
        $this->data['diesel_engine_count'] = 0;

        $oilInType = Oil::where('oil_type_id',$this->data['oil_type_id'])->where('active',1);
        if (isset($this->data['subsection_id'])) $oilInType = $oilInType->where('subsection_id',$this->data['subsection_id']);
        $oilInType = $oilInType->get();

        foreach($oilInType as $oil) {
            $viscosityName = $oil->viscosity->name;
            $viscosityKey = $oil->viscosity->slug;
            if (!count($this->data['viscosity']) || !in_array($viscosityKey, array_keys($this->data['viscosity']))) 
                $this->data['viscosity'][$viscosityKey] = ['counter' => 1, 'name' => $viscosityName, 'id' => $oil->viscosity->id];
            else $this->data['viscosity'][$viscosityKey]['counter']++;

            foreach ($oil->engineTypes as $engineType) {
                $oilTypeName = $engineType['name_'.App::getLocale()];
                $oilTypeKey = $engineType->slug;
                if (!count($this->data['engine_types']) || !in_array($oilTypeKey, array_keys($this->data['engine_types'])))
                    $this->data['engine_types'][$oilTypeKey] = ['counter' => 1, 'name' => $oilTypeName, 'id' => $engineType->id];
                else $this->data['engine_types'][$oilTypeKey]['counter']++;
            }

            foreach($oil->tolerances as $tolerance) {
                $toleranceName = $tolerance->name;
                $toleranceKey = strtolower(str_replace([' ','/','.','`'],'_',$toleranceName));
                if (!count($this->data['tolerances']) || !in_array($toleranceKey, array_keys($this->data['tolerances'])))
                    $this->data['tolerances'][$toleranceKey] = ['counter' => 1, 'name' => $toleranceName, 'id' => $tolerance->id];
                else $this->data['tolerances'][$toleranceKey]['counter']++;
            }
        }
    }
}
