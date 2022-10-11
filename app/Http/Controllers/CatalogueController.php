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

    public function _default(Request $request, $slug=null, $sub_slug=null)
    {
        $menu = Menu::find(3);
        $this->data['breadcrumbs'][] = ['href' => $menu->slug, 'name' => $menu[App::getLocale()]];
        $this->data['menu_active_id'] = $menu->id;
        $this->data['types'] = OilType::where('active', 1)->get();

        if ($slug) {
            if (!$oilType = OilType::where('slug',$slug)->where('active', 1)->pluck('name_'.App::getLocale(),'id')->toArray()) abort(404);
            $this->data['oil_type_id'] = array_key_first($oilType);
            $this->data['breadcrumbs'][] = ['href' => $menu->slug.'/'.$slug, 'name' => $oilType[$this->data['oil_type_id']]];

            if ($sub_slug) {
                if ($subsection = Subsection::where('slug',$sub_slug)->first()) {
                    $this->data['breadcrumbs'][] = ['href' => $menu->slug.'/'.$slug.'/'.$sub_slug, 'name' => $subsection['name_'.App::getLocale()]];
                    $this->data['subsection_id'] = $subsection->id;
                    $this->data['oil'] = Oil::where('oil_type_id',$this->data['oil_type_id'])->where('subsection_id',$subsection->id)->where('active',1)->paginate(12);
                    $this->getOilSubsections();
                    $this->getCounters();
                    return $this->showView('oil_type');
                } else {
                    if (!$this->data['oil'] = Oil::where('slug', $sub_slug)->where('active', 1)->first()) abort(404);
                    $this->data['breadcrumbs'][] = ['href' => $menu->slug.'/'.$slug.'/'.$sub_slug, 'name' => $this->data['oil']->name];
                    return $this->showView('oil');
                }
            } else {
                $this->data['oil'] = Oil::where('oil_type_id',$this->data['oil_type_id'])->where('active',1)->paginate(12);
                $this->getOilSubsections();
                $this->getCounters();
                return $this->showView('oil_type');
            }
        } else {
            $this->data['head'] = $menu[App::getLocale()];
            return $this->showView('oil_types');
        }
    }
    
    private function getOilSubsections()
    {
        $this->data['subsections'] = Oil::where('oil_type_id',$this->data['oil_type_id'])->where('subsection_id','!=',null)->where('active',1)->get();
    }
    
    private function getCounters()
    {
        $this->data['viscosity'] = [];
        $this->data['engine_types'] = [];
        $this->data['tolerances'] = [];
        $this->data['gas_engine_count'] = 0;
        $this->data['diesel_engine_count'] = 0;

        foreach($this->data['oil'] as $oil) {
            $viscosityName = $oil->viscosity->name;
            $viscosityKey = $oil->viscosity->slug;
            if (!count($this->data['viscosity']) || !in_array($viscosityKey, array_keys($this->data['viscosity']))) 
                $this->data['viscosity'][$viscosityKey] = ['counter' => 1, 'name' => $viscosityName];
            else 
                $this->data['viscosity'][$viscosityKey]['counter']++;

            foreach ($oil->engineTypes as $engineType) {
                $oilTypeName = $engineType['name_'.App::getLocale()];
                $oilTypeKey = $engineType->slug;
                if (!count($this->data['engine_types']) || !in_array($oilTypeKey, array_keys($this->data['engine_types'])))
                    $this->data['engine_types'][$oilTypeKey] = ['counter' => 1, 'name' => $oilTypeName];
                else
                    $this->data['engine_types'][$oilTypeKey]['counter']++;
            }

            foreach($oil->tolerances as $tolerance) {
                $toleranceName = $tolerance->name;
                $toleranceKey = strtolower(str_replace([' ','/','.','`'],'_',$toleranceName));
                if (!count($this->data['tolerances']) || !in_array($toleranceKey, array_keys($this->data['tolerances'])))
                    $this->data['tolerances'][$toleranceKey] = ['counter' => 1, 'name' => $toleranceName];
                else
                    $this->data['tolerances'][$toleranceKey]['counter']++;
            }
        }
    }
}
