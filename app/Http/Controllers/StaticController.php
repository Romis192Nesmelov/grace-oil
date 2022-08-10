<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Slide;
use App\Models\Content;
use App\Models\HomeBlock;
use App\Models\HistoryPoint;
use App\Models\Diploma;
use App\Models\Vacancy;
use App\Models\AboutProduct;
use App\Models\AboutLubricant;

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
    
    public function aboutCompany()
    {
        $this->getBreadcrumbs(1, 1);
        $this->data['points'] = HistoryPoint::where('active',1)->get();
        return $this->showView('about_company');
    }
    
    public function achievements()
    {
        $this->getBreadcrumbs(1, 2);
        $this->data['content'] = Content::find(1);
        $this->data['diplomas'] = Diploma::where('active',1)->get();
        return $this->showView('achievements');
    }

    public function vacancies()
    {
        $this->getBreadcrumbs(1, 3);
        $this->data['content'] = Content::find(2);
        $this->data['vacancies'] = Vacancy::where('active',1)->get();
        return $this->showView('vacancies');
    }

    public function aboutProducts()
    {
        $this->getBreadcrumbs(2, 1);
        $this->data['content'] = Content::find(3);
        $this->data['products'] = AboutProduct::where('active',1)->get();
        return $this->showView('about_product');
    }

    public function graceLubricants()
    {
        $this->getBreadcrumbs(2, 2);
        $this->data['content'] = Content::find(4);
        $this->data['icons'] = AboutLubricant::where('active',1)->get();
        return $this->showView('about_lubricants');
    }

    public function changeLang(Request $request)
    {
        $this->validate($request, ['lang' => 'required|in:en,ru']);
        setcookie('lang', $request->input('lang'), time()+(60*60*24*365));
        return redirect()->back();
    }

    protected function getBreadcrumbs($menuId, $subMenuId=null)
    {
        $this->data['crumbs'] = [];
        $menu = Menu::find($menuId);
        if ($subMenuId) $subMenu = SubMenu::find($subMenuId);

        $this->data['breadcrumbs'][] = ['href' => ($menu->href ? $menu->slug : null), 'name' => $menu[App::getLocale()]];
        
        if (isset($subMenu)) {
            $this->data['breadcrumbs'][] = ['href' => $subMenu->slug, 'name' => $subMenu[App::getLocale()]];
            $this->data['head'] = $subMenu[App::getLocale()];
        } else {
            $this->data['head'] = $menu[App::getLocale()];
        }
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
