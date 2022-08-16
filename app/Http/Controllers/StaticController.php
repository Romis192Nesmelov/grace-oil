<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Slide;
use App\Models\HomeBlock;
use App\Models\Content;

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
        $this->data['content'] = Content::find(10)['text_'.App::getLocale()];
        return $this->showView('user_agreement');
    }

    protected function crumbsAndContent(Request $request, $slug)
    {
        list($menu, $uri) = $this->getMenu($request, $slug);
        
        if ($menu && $menu->href) {
            $this->getBreadcrumbsMenu($menu);

            if (!$slug) {
                $this->data['head'] = $menu[App::getLocale()];
                $this->getContent($menu->content);
                $this->getAddContent($menu);
            } else {
                $this->getSlugContent($menu, $uri, $slug);
            }
            $view = $this->getView($menu, $slug);
        } else {
            $subMenu = SubMenu::where('slug',$uri)->first();
            if (!$subMenu) abort(404);

            $this->getBreadcrumbsMenu($subMenu->menu);
            $this->getBreadcrumbsSubMenu($subMenu);

            if (!$slug) {
                $this->data['head'] = $subMenu[App::getLocale()];
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
        $this->data['breadcrumbs'][] = ['href' => ($menu->href ? $menu->slug : null), 'name' => $menu[App::getLocale()]];
        $this->data['head'] = $menu[App::getLocale()];
        $this->data['menu_active_id'] = $menu->id;
    }

    protected function getBreadcrumbsSubMenu($subMenu)
    {
        $this->data['breadcrumbs'][] = ['href' => $subMenu->slug, 'name' => $subMenu[App::getLocale()]];
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
        $this->data['breadcrumbs'][] = ['href' => $uri.'/'.$slug, 'name' => $this->data['slug_content'][$partHeadField.App::getLocale()]];
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

        return view($view, [
            'seo' => $settings->getSeoTags(),
            'metas' => $this->metas,
            'settings' => $settings->getSettings(),
            'menu' => Menu::where('active',1)->get(),
            'data' => $this->data
        ]);
    }
}
