<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperTrait;
use App\Models\AboutProduct;
use App\Models\Dealer;
use App\Models\DealersArea;
use App\Models\Menu;
use App\Models\News;
use App\Models\Oil;
use App\Models\OilType;
use App\Models\SubMenu;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

//use Illuminate\Support\Str;

class AdminEditController extends Controller
{
    use HelperTrait;

    public function editUser(Request $request)
    {
        $validationArr = ['email' => 'required|email|unique:users,email'];
        $fields = [];

        if ($request->has('id')) {
            $validationArr['email'] .= ','.$request->input('id');
            if ($request->input('password')) {
                $validationArr['password'] = $this->validationPassword;
                $fields['password'] = bcrypt($request->input('password'));
            }
        } else {
            $validationArr['password'] = $this->validationPassword;
            $fields['password'] = bcrypt($request->input('password'));
        }

        $this->editSomething(
            $request,
            new User(),
            $validationArr,
            $fields
        );
        return redirect(route('admin.users'));
    }

    public function editMenu(Request $request)
    {
        $this->editSomething(
            $request,
            new Menu(),
            ['ru' => $this->validationString, 'en' => $this->validationString]
        );
        return redirect(route('admin.menus'));
    }

    public function editSubmenu(Request $request)
    {
        $subMenu = $this->editSomething(
            $request,
            new SubMenu(),
            ['ru' => $this->validationString, 'en' => $this->validationString, 'menu_id' => $this->validationId.'menus,id']
        );
        return redirect(route('admin.menus',['slug' => null, 'id' => $subMenu->menu_id]));
    }

    public function editAboutProduct(Request $request)
    {
        $lastId = AboutProduct::latest()->first()->id;
        $this->editSomething(
            $request,
            new AboutProduct(),
            [
                'head_ru' => $this->validationString,
                'head_en' => $this->validationString,
                'text_ru' => $this->validationText,
                'text_en' => $this->validationText,
            ],
            [],
            'image',
            ['image' => $this->validationJpgAndPng],
            'images/about_products/',
            $imageName = 'image'.($lastId+1)
        );
        return redirect(route('admin.about_products'));
    }

    public function editOilType(Request $request)
    {
        $lastId = OilType::latest()->first()->id;
        $this->editSomething(
            $request,
            new OilType(),
            ['name_ru' => $this->validationString, 'name_en' => $this->validationString],
            [],
            'icon',
            ['icon' => $this->validationPng],
            'images/oil_types/',
            $imageName = 'icon'.($lastId+1)
        );
        return redirect(route('admin.oil_types'));
    }

    public function editOil(Request $request)
    {
        $oilType = OilType::findOrFail($request->input('oil_type_id'));
        $pathToImage = 'images/catalogue/'.$oilType->slug.'/';
        $imageName = strtoupper(Str::slug($request->input('name_en')));

        $oil = $this->editSomething(
            $request,
            new Oil(),
            [
                'units' => 'min:0|max:1',
                'name_ru' => $this->validationString,
                'name_en' => $this->validationString,
                'head_ru' => $this->validationString,
                'head_en' => $this->validationString,
                'description_ru' => $this->validationText,
                'description_en' => $this->validationText,
                'application_area_ru' => $this->validationText,
                'application_area_en' => $this->validationText,
                'advantages_ru' => $this->validationText,
                'advantages_en' => $this->validationText,
                'oil_type_id' => $this->validationId.'oil_types,id',
                'viscosity_grade_id' => $this->validationId.'viscosity_grades,id',
                'subsection_id' => 'nullable|integer|exists:subsections,id',
                'tolerance_id' => $this->validationArrayIds.'tolerances,id',
                'engine_type_id' => 'nullable|array|exists:tolerances,id',
                'industry_solution_id' => $this->validationArrayIds.'tolerances,id',
            ],
            [],
            'image',
            ['image' => $this->validationJpgAndPng],
            $pathToImage,
            $imageName
        );
        $oil->tolerances()->sync($request->input('tolerance_id'));
        $oil->engineTypes()->sync($request->input('engine_type_id'));
        $oil->solutions()->sync($request->input('industry_solution_id'));
        return redirect(route('admin.oil_types',['slug' => null, 'id' => $oil->oil_type_id]));
    }

    public function editArea(Request $request)
    {
        $this->editSomething(
            $request,
            new DealersArea(),
            ['name_ru' => $this->validationString, 'name_en' => $this->validationString]
        );
        return redirect(route('admin.areas'));
    }

    public function editDealer(Request $request)
    {
        $dealer = $this->editSomething(
            $request,
            new Dealer(),
            [
                'town_ru' => 'nullable|min:5|max:255',
                'town_en' => 'nullable|min:5|max:255',
                'name_ru' => $this->validationString,
                'name_en' => $this->validationString,
                'phone' => 'nullable|'.$this->validationPhone,
                'email' => 'nullable|email',
                'url' => 'nullable|min:5|max:255',
                'dealers_area_id' => $this->validationId.'dealers_areas,id'
            ]
        );
        return redirect(route('admin.areas',['slug' => null, 'id' => $dealer->dealers_area_id]));
    }

    public function editNews(Request $request)
    {
        $lastId = News::latest()->first()->id;
        $news = $this->editSomething(
            $request,
            new News(),
            [
                'head_ru' => $this->validationString,
                'head_en' => $this->validationString,
                'time' => $this->validationDate,
                'text_short_ru' => $this->validationText,
                'text_short_en' => $this->validationText,
                'text_full_ru' => $this->validationText,
                'text_full_en' => $this->validationText,
            ],
            [],
            'image',
            ['image' => $this->validationJpgAndPng],
            'images/news/',
            'news'.($lastId + 1)
        );
        $news->similar()->sync($request->input('similar_ids'));
        return redirect(route('admin.news'));
    }

    protected function editSomething (
        Request $request,
        Model $model,
        array $validationArr,
        $fields = [],
        $imageField = null,
        $validationImage = null,
        $pathToImage = null,
        $imageName = null
    )
    {
        if ($request->has('id')) {
            $validationArr['id'] = 'required|integer|exists:'.$model->getTable().',id';
            if ($imageField && $validationImage && $request->hasFile($imageField)) $validationArr[$imageField] = $validationImage;
            $this->validate($request, $validationArr);

            $fields = array_merge($fields, $this->processingFields($request, 'active', ($request->has('time') ? 'time' : null)));

            $item = $model->findOrFail($request->input('id'));
            $item->update($fields);
        } else {
            if ($imageField && $validationImage) $validationArr[$imageField] = 'required|'.$validationImage;
            $this->validate($request, $validationArr);
            $fields = array_merge($fields, $this->processingFields($request, 'active', ($request->has('time') ? 'time' : null)));
            $item = $model->create($fields);
        }

        if ($imageField && $validationImage && $request->hasFile($imageField)) {
            $this->processingImage($request, $item, $imageField, $imageName, $pathToImage);
        }

        $this->saveCompleteMessage();
        return $item;
    }

    private function processingImage(Request $request, Model $model, $field, $name=null, $path=null)
    {
        $this->unlinkFile($model, $field);
        if ($model[$field]) {
            $info = pathinfo($model[$field]);
            $imageName = $info['filename'].'.'.$request->file($field)->getClientOriginalExtension();
            $path = $info['dirname'];
        } else {
            $imageName = $name.'.'.$request->file($field)->getClientOriginalExtension();
        }

        $request->file($field)->move(base_path('public/'.$path), $imageName);
        $model->update([$field => $path.'/'.$imageName]);
    }

    private function processingFields(Request $request, $checkboxFields = null, $timeFields = null)
    {
        $fields = $request->except(['_token','id']);
        if ($checkboxFields) {
            if (is_array($checkboxFields)) {
                foreach ($checkboxFields as $field) {
                    $fields[$field] = $request->input('active') == 'on' ? 1 : 0;
                }
            } else {
                $fields[$checkboxFields] = $request->input('active') == 'on' ? 1 : 0;
            }
        }

        if ($timeFields) {
            if (is_array($timeFields)) {
                foreach ($timeFields as $field) {
                    $fields[$field] = strtotime($this->convertTime($fields[$field]));
                }
            } else {
                $fields[$timeFields] = strtotime($this->convertTime($fields[$timeFields]));
            }
        }
        return $fields;
    }
}
