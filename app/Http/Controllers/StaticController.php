<?php

namespace App\Http\Controllers;
use App\Models\IndustrySolution;
use App\Models\Oil;
use App\Models\Tolerance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Slide;
use App\Models\HomeBlock;
use App\Models\Content;

use App\Models\OilType;
use App\Models\Subsection;
use App\Models\EngineType;
use App\Models\OilEngineType;
use App\Models\ViscosityGrade;
use App\Models\Documentation;
use App\Models\OilTolerance;
use App\Models\OilSolution;

class StaticController extends Controller
{
    use HelperTrait;

    protected $data = [];

    public function index()
    {
        $this->data['slider'] = Slide::where('active',1)->get();
        $this->data['home_blocks'] = HomeBlock::where('active', 1)->orderBy('created_at', 'desc')->limit(3)->get();
        return $this->showView('home');
    }

    public function _default(Request $request, $slug=null)
    {
        return $this->showView($this->crumbsAndContent($request, $slug));
    }

    public function reviews(Request $request)
    {
        list($menu, $uri) = $this->getMenu($request, null);
        unset($menu);
        $subMenu = SubMenu::where('slug',$uri)->first();

        $this->getBreadcrumbsMenu($subMenu->menu);
        $this->getBreadcrumbsSubMenu($subMenu);

        $this->data['head'] = $subMenu[app()->getLocale()];
        $this->getAddContent($subMenu);
        $this->data['segments'] = [];

        foreach($this->data['add_content'] as $review) {
            if (count($review->solutions)) {
                foreach($review->solutions as $solution) {
                    $name = $solution->industrySolution['name_'.app()->getLocale()];
                    $key = strtolower(str_replace(' ','_',$solution->industrySolution->name_en));

                    if (!count($this->data['segments']) || !in_array($key, array_keys($this->data['segments']))) {
                        $this->data['segments'][$key] = ['counter' => 1, 'name' => $name];
                    } else {
                        $this->data['segments'][$key]['counter']++;
                    }
                }
            } else {
                $this->data['segments']['dealer'] = ['counter'  => 1, 'name' => trans('content.dealer_review')];
            }
        }
        return $this->showView($subMenu->view);
    }

    public function changeLang(Request $request)
    {
        $this->validate($request, ['lang' => 'required|in:en,ru']);
        setcookie('lang', $request->input('lang'), time()+(60*60*24*365));
        return redirect()->back();
    }
    
    public function howToBecomeADealer()
    {
        $this->data['breadcrumbs'] = [['href' => '#', 'name' => trans('footer.how_to_become_a_dealer')]];
        return $this->showView('dealer');
    }
    
    public function termsOfUse()
    {
        $this->data['breadcrumbs'] = [['href' => '#', 'name' => trans('footer.user_agreement')]];
        $this->data['content'] = Content::find(10)['text_'.app()->getLocale()];
        return $this->showView('user_agreement');
    }

    protected function crumbsAndContent(Request $request, $slug)
    {
        list($menu, $uri) = $this->getMenu($request, $slug);

        if ($menu && $menu->href) {
            $this->getBreadcrumbsMenu($menu);

            if (!$slug) {
                $this->data['head'] = $menu[app()->getLocale()];
                $this->getContent($menu->content);
                $this->getAddContent($menu);
            } else {
                $this->getSlugContent($menu, $uri, $slug);
            }
            $view = $this->getView($menu, $slug);
        } else {
            if (!$subMenu = SubMenu::where('slug',$uri)->first()) abort(404);

            $this->getBreadcrumbsMenu($subMenu->menu);
            $this->getBreadcrumbsSubMenu($subMenu);

            if (!$slug) {
                $this->data['head'] = $subMenu[app()->getLocale()];
                $this->getContent($subMenu->content);
                $this->getAddContent($subMenu);
            } else {
                $this->getSlugContent($subMenu, $uri, $slug);
            }
            $view = $this->getView($subMenu, $slug);
        }
        return $view;
    }

    protected function getMenu(Request $request, $slug)
    {
        $uri = str_replace('/','',$request->getPathInfo());
        if ($slug) $uri = str_replace($slug,'',$uri);
        return [Menu::where('slug',$uri)->first(), $uri];
    }

    protected function getBreadcrumbsMenu($menu)
    {
        $this->data['breadcrumbs'][] = ['href' => ($menu->href ? $menu->slug : null), 'name' => $menu[app()->getLocale()]];
        $this->data['head'] = $menu[app()->getLocale()];
        $this->data['menu_active_id'] = $menu->id;
    }

    protected function getBreadcrumbsSubMenu($subMenu)
    {
        $this->data['breadcrumbs'][] = ['href' => $subMenu->slug, 'name' => $subMenu[app()->getLocale()]];
        $this->data['sub_menu_active_id'] = $subMenu->id;
    }

    protected function getAddContent($menu)
    {
        if (isset($menu->add_content_model) && $menu->add_content_model) {
            $model = app('App\Models'.$menu->add_content_model);
            $this->data['add_content'] = $model->where('active',1)->get();
        }
    }

    protected function getSlugContent($menu, $uri, $slug)
    {
        if (isset($menu->slug_model) && $menu->slug_model) {
            $slugModel = app('App\Models'.$menu->slug_model);
            $this->data['all_slug_in_model'] = $slugModel->where('active',1)->get();
            $this->data['slug_content'] = $slugModel->where('active',1)->where('slug',$slug)->first();
            $this->getBreadcrumbsSlug($uri, $slug, 'name_');
        }
    }

    protected function getBreadcrumbsSlug($uri, $slug, $partHeadField)
    {
        $this->data['breadcrumbs'][] = ['href' => $uri.'/'.$slug, 'name' => $this->data['slug_content'][$partHeadField.app()->getLocale()]];
    }

    protected function getContent($content)
    {
        if ($content) $this->data['content'] = count($content) == 1 ? $content[0] : $content;
        else $this->data['content'] = null;
    }
    
    protected function getView($menu, $slug)
    {
        if ( (isset($menu->view) && $menu->view) || (isset($menu->slug_view) && $menu->slug_view)  ) {
            return $slug ? $menu->slug_view : $menu->view;
        } else return null;
    }

    protected function showView($view)
    {
        $settings = new SettingsController();
        return view($view, array_merge(
            $this->data,
            [
                'seo' => $settings->getSeoTags(),
                'metas' => $this->metas,
                'settings' => $settings->getSettings(),
                'menu' => Cache::remember('menu', 60*60*24*365, function () {
                    return Menu::where('active',1)->get();
                }),
                'catalogue' => Cache::remember('oil_types', 60*60*24*365, function () {
                    return OilType::where('active',1)->get();
                })
            ]));
    }
}
