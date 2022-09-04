<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\OilType;

class CatalogueController extends StaticController
{
    use HelperTrait;

    public function _default(Request $request, $slug=null, $sub_slug=null)
    {
        list($menu, $uri) = $this->getMenu($request, $slug);
        $this->getBreadcrumbsMenu($menu);

        if ($slug) {
//            $this->data['slug_content'] = OilType::where('slug',$slug)->where('active', 1)->first();
//            if (!$this->data['slug_content']) abort(404);
//            $this->getBreadcrumbsSlug($uri, $slug, 'head_');
//            return $this->showView('new');
        } if ($sub_slug) {

        } else {
            $this->data['head'] = $menu[App::getLocale()];
            $this->data['types'] = OilType::where('active', 1)->get();
            return $this->showView('oil_types');
        }
    }
}
