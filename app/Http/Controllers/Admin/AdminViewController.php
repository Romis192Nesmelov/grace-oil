<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\AboutProduct;
use App\Models\Dealer;
use App\Models\DealersArea;
use App\Models\EngineType;
use App\Models\IndustrySolution;
use App\Models\Menu;
use App\Models\News;
use App\Models\Oil;
use App\Models\OilEngineType;
use App\Models\OilSolution;
use App\Models\OilTolerance;
use App\Models\OilType;
use App\Models\SimilarNews;
use App\Models\SubMenu;
use App\Models\Subsection;
use App\Models\Tolerance;
use App\Models\User;
use App\Models\ViscosityGrade;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use Illuminate\Support\Str;

class AdminViewController extends Controller
{
    private $data = [];
    private $breadcrumbs = [];
    private $menu;

    public function __construct()
    {
        $this->menu = [
            'home' => [
                'id' => 'home',
                'href' => 'admin.home',
                'name' => trans('admin_menu.home'),
                'description' => '',
                'icon' => 'icon-home2',
            ],
            'main_menus' => [
                'id' => 'menus',
                'href' => 'admin.menus',
                'name' => trans('admin_menu.menus'),
                'description' => trans('admin_menu.menus_description'),
                'icon' => 'icon-menu2',
            ],
            'sub_menus' => [
                'id' => 'sub_menus',
                'hidden' => 'true',
                'href' => 'admin.sub_menu',
                'name' => trans('admin.sub_menu'),
            ],
            'users' => [
                'id' => 'users',
                'href' => 'admin.users',
                'name' => trans('admin_menu.admins'),
                'description' => trans('admin_menu.admins_description'),
                'icon' => 'icon-users',
            ],
            'about_products' => [
                'id' => 'about_products',
                'href' => 'admin.about_products',
                'name' => trans('admin_menu.about_products'),
                'description' => trans('admin_menu.about_products_description'),
                'icon' => 'icon-reading',
            ],
            'oil_types' => [
                'id' => 'oil_types',
                'href' => 'admin.oil_types',
                'name' => trans('admin_menu.oils_types'),
                'description' => trans('admin_menu.oils_types_description'),
                'icon' => 'icon-lab',
            ],
            'oils' => [
                'id' => 'oils',
                'href' => 'admin.oils',
                'name' => trans('admin_menu.oils'),
                'description' => trans('admin_menu.oils_description'),
                'icon' => 'icon-droplet',
            ],
            'areas' => [
                'id' => 'areas',
                'href' => 'admin.areas',
                'name' => trans('admin_menu.dealers'),
                'description' => trans('admin_menu.dealers_description'),
                'icon' => 'icon-share3',
            ],
            'dealers' => [
                'id' => 'dealers',
                'hidden' => 'true',
                'href' => 'admin.dealers',
                'name' => trans('admin.dealers'),
            ],
            'news' => [
                'id' => 'news',
                'href' => 'admin.news',
                'name' => trans('admin_menu.news'),
                'description' => trans('admin_menu.news_description'),
                'icon' => 'icon-newspaper',
            ],
//            'settings' => [
//                'id' => 'settings',
//                'href' => 'admin.settings',
//                'name' => trans('admin_menu.settings'),
//                'description' => trans('admin_menu.settings_description'),
//                'icon' => 'icon-gear',
//            ],
        ];
        $this->breadcrumbs[] = $this->menu['home'];
    }

    public function home()
    {
        $this->data['menu_key'] = 'home';
        return $this->showView('home');
    }

    public function menus(Request $request)
    {
        return $this->getSomething(
            $request,
            'main_menu',
            app()->getLocale(),
            new Menu()
        );
    }

    public function subMenu(Request $request)
    {
        return $this->getSomething(
            $request,
            'sub_menu',
            app()->getLocale(),
            new SubMenu(),
            null,
            'main_menu',
            app()->getLocale(),
            new Menu()
        );
    }

    public function users(Request $request, $slug=null)
    {
        return $this->getSomething(
            $request,
            'user',
            'email',
            new User(),
            $slug
        );
    }

    public function aboutProducts(Request $request)
    {
        return $this->getSomething(
            $request,
            'about_product',
            'head_'.app()->getLocale(),
            new AboutProduct()
        );
    }

    public function oilTypes(Request $request)
    {
        return $this->getSomething(
            $request,
            'oil_type',
            'name_'.app()->getLocale(),
            new OilType()
        );
    }

    public function oils(Request $request, $slug=null)
    {
        if ($request->has('id') || ($slug && $slug == 'add')) {
            $this->data['oil_types'] = OilType::all();
            $this->data['viscosity'] = ViscosityGrade::all();

            $this->data['subsections'] = Subsection::all()->toArray();
            array_unshift($this->data['subsections'], ['id' => null, 'name_ru' => 'Нет', 'name_en' => 'None']);

            $this->getOilBelongsToMany($request, 'tolerances', 'oil_id','tolerance_id', new Tolerance(), new OilTolerance());
            $this->getOilBelongsToMany($request,'engine_types','oil_id', 'engine_type_id', new EngineType(), new OilEngineType());
            $this->getOilBelongsToMany($request,'solutions', 'oil_id','industry_solution_id', new IndustrySolution(), new OilSolution());
        }

        return $this->getSomething(
            $request,
            'oil',
            'name_'.app()->getLocale(),
            new Oil(),
            $slug
        );
    }

    public function areas(Request $request, $slug=null)
    {
        return $this->getSomething(
            $request,
            'area',
            'name_'.app()->getLocale(),
            new DealersArea(),
            $slug
        );
    }

    public function dealers(Request $request, $slug=null)
    {
        return $this->getSomething(
            $request,
            'dealer',
            'name_'.app()->getLocale(),
            new Dealer(),
            $slug,
            'area',
            'name_'.app()->getLocale(),
            new DealersArea()
        );
    }

    public function news(Request $request, $slug=null)
    {
        if ($request->has('id') || ($slug && $slug == 'add')) {
            $this->getOilBelongsToMany($request, 'news', 'news_id','similar_id', new News(), new SimilarNews());
        }
        return $this->getSomething(
            $request,
            'new',
            'head_'.app()->getLocale(),
            new News(),
            $slug
        );
    }

    protected function getSomething(
        Request $request,
        $key,
        $head,
        Model $model,

        $slug=null,
        $parentKey=null,
        $parentHead=null,
        Model $parentModel=null,

        $secondParentsKey=null,
        $secondParentsHead=null,

        $thirdParentsKey=null,
        $thirdParentsHead=null
    )
    {
        if ($parentKey) {
            $this->data[$parentKey] = $parentModel->findOrFail($request->input('parent_id'));
            $this->data[$parentKey.'s'] = $parentModel->all();

            if ($secondParentsKey) {
                if ($thirdParentsKey) {
                    $this->data['menu_key'] = $thirdParentsKey.'s';
                    $this->data[$thirdParentsKey] = $this->data[$parentKey][$secondParentsKey][$thirdParentsKey];
                    $this->getBreadcrumbs(
                        $thirdParentsKey,
                        $thirdParentsHead,
                        ['id' => $this->data[$thirdParentsKey]->id]
                    );
                } else {
                    $this->data['menu_key'] = $secondParentsKey.'s';
                }

                $this->data[$secondParentsKey] = $this->data[$parentKey][$secondParentsKey];
                $this->breadcrumbs[] = $this->menu[$secondParentsKey.'s'];
                $this->getBreadcrumbs(
                    $secondParentsKey,
                    $secondParentsHead,
                    ['id' => $this->data[$secondParentsKey]->id, 'parent_id' => ($thirdParentsKey ? $this->data[$thirdParentsKey]->id : '')]
                );
            } else {
                $this->data['menu_key'] = $parentKey.'s';
            }

            $this->breadcrumbs[] = $this->menu[$parentKey.'s'];
            $this->getBreadcrumbs(
                $parentKey,
                $parentHead,
                ['id' => $this->data[$parentKey]->id, 'parent_id' => ($secondParentsKey ? $this->data[$secondParentsKey]->id : '')]
            );
        } else {
            $this->data['menu_key'] = $key.'s';
            $this->breadcrumbs[] = $this->menu[$key.'s'];
        }

        $breadcrumbsParams = [];
        if ($parentKey) $breadcrumbsParams['parent_id'] = $this->data[$parentKey]->id;

        if ($request->has('id')) {
            if (!isset($this->data[$key])) $this->data[$key] = $model->findOrFail($request->input('id'));
            $breadcrumbsParams['id'] = $this->data[$key]->id;
            $this->getBreadcrumbs($key, $head, $breadcrumbsParams);
            return $this->showView($key);
        } else if ($slug && $slug == 'add') {
            $breadcrumbsParams['slug'] = 'add';
            $this->breadcrumbs[] = [
                'id' => $this->menu[$key.'s']['id'],
                'href' => $this->menu[$key.'s']['href'],
                'params' => $breadcrumbsParams,
                'name' => trans('admin.adding_'.$key),
            ];
            return $this->showView($key);
        } else {
            $this->data[$key.'s'] = $model instanceof News ? $model->orderBy('time','desc')->get() : $model->all();
            return $this->showView($key.'s');
        }
    }

    protected function showView($view)
    {
        return view('admin.'.$view, array_merge($this->data, [
            'breadcrumbs' => $this->breadcrumbs,
            'menu' => $this->menu
        ]));
    }

    protected function getBreadcrumbs($key, $head, $params=[], $paramKey=null)
    {
        $this->breadcrumbs[] = [
            'href' => $this->menu[$key.'s']['href'],
            'params' => array_merge(['slug' => null], $params),
            'name' => trans('admin.edit_'.$key, [$key => $this->data[$paramKey ?: $key][$head]]),
        ];
    }

    protected function getOilBelongsToMany(Request $request, $key, $fieldId, $middleModelField, Model $model, Model $middleModel)
    {
        $this->data[$key] = $model->all()->toArray();
        $this->data[$key.'_in'] = $request->has('id') ? $middleModel->where($fieldId,$request->input('id'))->pluck($middleModelField)->toArray() : [];
    }
}
