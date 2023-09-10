<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperTrait;
use App\Models\Menu;
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
        $this->editSomething(
            $request,
            new SubMenu(),
            ['ru' => $this->validationString, 'en' => $this->validationString, 'menu_id' => $this->validationId.'menus,id']
        );
        return redirect(route('admin.menus',['slug' => null, 'id' => $request->input('menu_id')]));
    }

    public function editOil(Request $request)
    {
        $oilType = OilType::findOrFail($request->input('oil_type_id'));
        $pathToImage = 'images/catalogue/'.$oilType->slug.'/';
        $imageName = strtoupper(Str::slug($request->input('name_en')));

        $this->editSomething(
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
                'viscosity_grade_id' => $this->validationId.'viscosity_grades,id'
            ],
            [],
            'image',
            ['image' => $this->validationJpgAndPng],
            $pathToImage,
            $imageName
        );
        return redirect(route('admin.oils'));
    }

    private function editSomething (
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

            $fields = array_merge($fields, $this->processingFields($request, 'active'));

            $table = $model->findOrFail($request->input('id'));
            $table->update($fields);
        } else {
            if ($imageField && $validationImage) $validationArr[$imageField] = 'required|'.$validationImage;
            $this->validate($request, $validationArr);
            $fields = array_merge($fields, $this->processingFields($request, 'active', (isset($fields['time']) ? $fields['time'] : null)));
            $table = $model->create($fields);
        }

        if ($imageField && $validationImage && $request->hasFile($imageField)) {
            $this->processingImage($request, $table, $imageField, $imageName, $pathToImage);
        }

        $this->saveCompleteMessage();
    }

    private function processingImage(Request $request, Model $model, $field, $name=null, $path=null)
    {
        $this->unlinkFile($model, $field);
        $info = pathinfo($model[$field]);
        $imageName = ($name ? $name : $info['filename']).'.'.$request->file($field)->getClientOriginalExtension();
        $path = $path ? $path : $info['dirname'];

        $request->file($field)->move(base_path('public/'.$path), $imageName);
        $model->update([$field => $path.'/'.$imageName]);
    }

    private function processingFields(Request $request, $checkboxFields = null, $timeFields = null, $ignoreFields = null)
    {
        $exceptFields = ['_token','id','password'];
        if ($ignoreFields) {
            if (is_array($ignoreFields)) $exceptFields = array_merge($exceptFields, $ignoreFields);
            else $exceptFields[] = $ignoreFields;
        }
        $fields = $request->except($exceptFields);

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
