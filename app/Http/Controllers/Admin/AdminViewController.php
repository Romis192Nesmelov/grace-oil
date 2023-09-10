<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Oil;
use App\Models\OilType;
use App\Models\SubMenu;
use App\Models\Subsection;
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
            'oils' => [
                'id' => 'oils',
                'href' => 'admin.oils',
                'name' => trans('admin_menu.oils'),
                'description' => trans('admin_menu.oils_description'),
                'icon' => 'icon-droplet',
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

    public function oils(Request $request)
    {
        if ($request->has('id')) {
            $this->data['oil_types'] = OilType::all();
            $this->data['viscosity'] = ViscosityGrade::all();
            $this->data['subsections'] = Subsection::all()->toArray();
            array_unshift($this->data['subsections'], [
                'id' => null,
                'name_ru' => 'Нет',
                'name_en' => 'None'
            ]);
        }

        return $this->getSomething(
            $request,
            'oil',
            'name_'.app()->getLocale(),
            new Oil()
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
            $this->data[$key.'s'] = $model->all();
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
            'params' => $params,
            'name' => trans('admin.edit_'.$key, [$key => $this->data[$paramKey ?: $key][$head]]),
        ];
    }
}
