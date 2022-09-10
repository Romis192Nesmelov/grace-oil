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
                    return $this->showView('oil_type');
                } else {
                    if (!$this->data['oil'] = Oil::where('slug', $sub_slug)->where('active', 1)->first()) abort(404);
                    $this->data['breadcrumbs'][] = ['href' => $menu->slug.'/'.$slug.'/'.$sub_slug, 'name' => $this->data['oil']->name];
                    return $this->showView('oil');
                }
            } else {
                $this->data['oil'] = Oil::where('oil_type_id',$this->data['oil_type_id'])->where('active',1)->paginate(12);
                $this->getOilSubsections();
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
}
