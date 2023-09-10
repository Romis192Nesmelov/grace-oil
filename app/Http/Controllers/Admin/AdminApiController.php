<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HelperTrait;
use App\Models\Oil;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

//use Illuminate\Support\Str;

class AdminApiController extends Controller
{
    use HelperTrait;

    public function deleteUser(Request $request)
    {
        return $this->deleteSomething($request, new User());
    }

    public function deleteOil(Request $request)
    {
        return $this->deleteSomething($request, new Oil(), 'image');
    }

    private function deleteSomething(Request $request, Model $model, $imageFields=null, $addPathToFile='')
    {
        $this->validate($request, ['id' => 'required|integer|exists:'.$model->getTable().',id']);
        $table = $model->findOrFail($request->input('id'));

        if ($imageFields) {
            if (is_array($imageFields)) {
                foreach ($imageFields as $imageField) {
                    $this->unlinkFile($table, $imageField, $addPathToFile);
                }
            } else {
                $this->unlinkFile($table, $imageFields, $addPathToFile);
            }
        }

        $table->delete();
        return response()->json(['success' => true]);
    }
}
