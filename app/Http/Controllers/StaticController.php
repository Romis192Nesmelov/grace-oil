<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Slide;
use App\Models\HomeBlock;

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

    public function _default(Request $request)
    {
        return $this->showView($this->crumbsAndContent($request));
    }

    public function changeLang(Request $request)
    {
        $this->validate($request, ['lang' => 'required|in:en,ru']);
        setcookie('lang', $request->input('lang'), time()+(60*60*24*365));
        return redirect()->back();
    }

    protected function crumbsAndContent(Request $request)
    {
        $this->data['crumbs'] = [];
        $uri = str_replace('/','',$request->getPathInfo());
        $menu = Menu::where('slug',$uri)->first();
        $view = '';
        if ($menu && $menu->href) {
            $this->data['breadcrumbs'][] = ['href' => ($menu->href ? $menu->slug : null), 'name' => $menu[App::getLocale()]];
            $this->data['head'] = $menu[App::getLocale()];
            $this->data['menu_active_id'] = $menu->id;
            $this->getContent($menu->content);
            if (isset($menu->add_content_model)) $this->getAddContent($menu->add_content_model);
            if (isset($menu->view)) $view = $menu->view;
        } else {
            $subMenu = SubMenu::where('slug',$uri)->first();
            $this->data['breadcrumbs'][] = ['href' => ($subMenu->menu->href ? $subMenu->menu->slug : null), 'name' => $subMenu->menu[App::getLocale()]];
            $this->data['menu_active_id'] = $subMenu->menu->id;

            $this->data['breadcrumbs'][] = ['href' => $subMenu->slug, 'name' => $subMenu[App::getLocale()]];
            $this->data['head'] = $subMenu[App::getLocale()];
            $this->data['sub_menu_active_id'] = $subMenu->id;
            $this->getContent($subMenu->content);
            if (isset($subMenu->add_content_model)) $this->getAddContent($subMenu->add_content_model);
            if (isset($subMenu->view)) $view = $subMenu->view;
        }
        return $view;
    }

    protected function getAddContent($modelName)
    {
        if ($modelName) {
            $model = app('App\Models'.$modelName);
            $this->data['add_content'] = $model->where('active',1)->get();
        }
    }

    protected function getContent($content)
    {
        if ($content) $this->data['content'] = count($content) == 1 ? $content[0] : $content;
        else $this->data['content'] = null;
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
