<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\News;

class NewsController extends StaticController
{
    use HelperTrait;

    public function _default(Request $request, $slug=null)
    {
        list($menu, $uri) = $this->getMenu($request, $slug);
        $this->getBreadcrumbsMenu($menu);

        if ($slug) {
            $this->data['slug_content'] = News::where('slug',$slug)->where('active', 1)->first();
            if (!$this->data['slug_content']) abort(404);
            $this->getBreadcrumbsSlug($uri, $slug, 'head_');
            return $this->showView('new');
        } else {
            $this->data['head'] = $menu[App::getLocale()];
            $this->data['news'] = News::where('active', 1)->orderBy('id', 'desc')->paginate(8);
            return $this->showView('news');
        }
    }
}
