<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Slide;
use App\Models\HomeBlock;
use App\Models\Content;
use App\Models\OilType;
use App\Models\Subsection;
use App\Models\ViscosityGrade;
use App\Models\Documentation;

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
    
    public function temp()
    {
        $srcFile = base_path('resources/catalogue.txt');
        if (file_exists($srcFile)) {
            $rows = explode('$',file_get_contents($srcFile));

            $oilTypes = OilType::all();
            $subsections = Subsection::all();
            $viscosityGrades = ViscosityGrade::all();
            $subsectionsDone = [];
            $viscosityGradesDone = [];

            $imagesFilesDir = base_path('public/documentations/');

            $docsSuffixes = [
                'td' => 'Technical description/Техническое описание',
                'dc' => 'Declaration of Conformity/Декларация соответствия',
                'cc' => 'Сертификат соответствия/Certificate of conformity'
            ];
            $specialDocs = [
                'GRACE_PERFECT_FSJ_10W-30' => [
                    'apr' => 'Одобрения Volvo VDS-4, Mack EO-N PP, Renault RLD-3;Approvals Volvo VDS-4, Mack EO-N PP, Renault RLD-3'
                ],
                'GRACE_PERFECT_FLS_5W-30' => [
                    'reg' => 'Регистрация ACEA E6;Registration ACEA E6'
                ],
                'GRACE_PERFECT_FLS_10W-40' => [
                    'reg' => 'Регистрация ACEA E6;Registration ACEA E6'
                ],
                'GRACE_PERFECT_FS_LONG_10W-40' => [
                    'reg' => 'Регистрация ACEA E4, E7;Registration ACEA E4, E7',
                    'apr' => 'Одобрение MAN M 3277;MAN approval M 3277'
                ],
                'GRACE_PERFECT_FS_10W-40' => [
                    'reg' => 'Регистрация ACEA E7, A3/B4;Registration ACEA E7, A3/B4',
                    'apr' => 'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2;Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2',
                ],
                'GRACE_PERFECT_C_15W-40' => [
                    'reg' => 'Регистрация ACEA E7, A3/B4;Registration ACEA E7, A3/B4',
                    'apr' => 'Одобрения Volvo VDS-3, Mack EO-N, Renault RLD-2;Approvals Volvo VDS-3, Mack EO-N, Renault RLD-2',
                ],
                'GRACE_ABSOLUTE_C3_5W-30' => [
                    'reg' => 'Регистрация ACEA C3;ACEA C3 registration'
                ],
                'GRACE_ABSOLUTE_FS_5W-40' => [
                    'reg' =>'Регистрация ACEA A3/B4;Registration ACEA A3/B4'
                ],
                'GRACE_ABSOLUTE_FFD_5W-30' => [
                    'reg' =>'Регистрация ACEA A5/B5;Registration ACEA A5/B5'
                ]
            ];

            foreach ($rows as $row) {
                $cells = explode('>',$row);

                // Get oil type
                $oilTypeNameRu = str_replace("\r",'',$cells[0]);
                $oilType = $oilTypes->where('name_ru',$oilTypeNameRu)->first();

                // Get subsections
                if ($cells[1] && $cells[1] != 'empty') {
                    $subsectionKey = str_slug($cells[2]);
                    if (!isset($subsectionsDone[$subsectionKey])) {
                        if (!$subsection = $subsections->where('name_ru',$cells[1])->first()) {
                            $subsection = Subsection::create(['name_ru' => $cells[1],'name_en' => $cells[2]]);
                            $subsectionsDone[$subsectionKey] = $subsection->id;
                        }
                        $subsectionId = $subsection->id;
                    } else $subsectionId = $subsectionsDone[$subsectionKey];
                } else $subsectionId = null;

                // Get base image
                $oilUpperName = $this->formatingString($cells[3]);
                $baseImage = 'images/catalogue/'.$oilType->slug.'/'.$oilUpperName.'.jpg';

                // Get tare images
                $tares = [];
                $baseImageTare = 'images/catalogue/'.$oilType->slug.'/packaging/'.$oilUpperName.'/';
                $docFilesDefImagesDir = 'images/oil/';

                foreach (explode(',',$cells[5]) as $k => $tareVal) {
                    //Mask 1,4,5,10,20,29,180,210,230,1000
                    if ($k < 6 && (int)$tareVal) {
                        $image = $baseImageTare.$tareVal.'L.jpg';
                        $tares[] = file_exists(base_path('public/'.$image)) ? $image : $docFilesDefImagesDir.'oil_'.$tareVal.'L.jpg';
                    }
                    elseif ($k >= 6 && $k < 9 && (int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_180kg.jpg';
                    elseif ((int)$tareVal) $tares[] = $docFilesDefImagesDir.'oil_1000L.jpg';
                    else $tares[] = null;
                }

                //Get Viscosity grade
                $oilNameAPart = explode(' ',$cells[3]);
                $viscosityGradeName = strtoupper(end($oilNameAPart));
                if (!isset($viscosityGradesDone[$viscosityGradeName])) {
                    if (!$viscosityGrade = $viscosityGrades->where('name',$viscosityGradeName)->first()) {
                        $viscosityGrade = ViscosityGrade::create(['name' => $viscosityGradeName]);
                        $viscosityGradesDone[$viscosityGradeName] = $viscosityGrade->id;
                    } else $viscosityGradeId = $viscosityGrade->id;
                } else $subsectionId = $viscosityGradesDone[$viscosityGradeName];

                $oilFields = [
                    'image_base' => file_exists(base_path('public/'.$baseImage)) ? $baseImage : $docFilesDefImagesDir.'oil_4L.jpg',
                    'image_1' => $tares[0],
                    'image_4' => $tares[1],
                    'image_5' => $tares[2],
                    'image_10' => $tares[3],
                    'image_20' => $tares[4],
                    'image_29' => $tares[5],
                    'image_180' => $tares[6],
                    'image_210' => $tares[7],
                    'image_230' => $tares[8],
                    'image_1000' => $tares[9],
                    'name' => $cells[3],
                    'head_ru' => $cells[6] != 'empty' ? $cells[6] : '',
                    'head_en' => $cells[7] != 'empty' ? $cells[7] : '',
                    'description_ru' => $cells[8],
                    'description_en' => $cells[9],
                    'application_area_ru' => $cells[10],
                    'application_area_en' => $cells[11],
                    'advantages_ru' => $cells[12],
                    'advantages_en' => $cells[13],
                    'engine_type' => $cells[15] != 'нет' ? $cells[15] : null,
                    'active' => 1,
                    'oil_type_id' => $oilType->id,
                    'viscosity_grade_id' => $viscosityGradeId,
                    'subsection_id' => $subsectionId
                ];

//                dd($oilFields);

                // Get docs
//                $oilDocs = glob($docFiles.$oilType->slug.'/'.str_replace(' ','_',strtoupper($cells[2])).'*');
//                if (count($oilDocs)) {
//                    foreach ($oilDocs as $oilDoc) {
//                        $doc = pathinfo($oilDoc);
//                        $docType = substr($doc['filename'],-3);
//
//                        if ($docType == 'reg' || $docType == 'apr') {
//                            // adding exstended docs
//                        } else {
//                            $docType = str_replace('_','',$docType);
//                            // adding standart docs
//                        }
//                    }
//                }
            }
        }




    }

    private function formatingString($string)
    {
        return strtoupper(str_replace(' ','_',$string));
    }
}
