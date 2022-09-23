<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

use App\Models\Menu;
use App\Models\SubMenu;
use App\Models\Content;
use App\Models\News;

class SearchController extends StaticController
{
    use HelperTrait;

    public function find($searchString)
    {
//        $this->validate($request, ['find' => 'required|min:3']);

//        $searchString = $request->input('find');
        $this->data['breadcrumbs'][] = ['href' => url('/search?find='.$searchString), 'name' => trans('content.search_results')];
        $this->data['found'] = collect();

        $foundContents = $this->searchInModel(new Content(), $searchString);
        foreach ($foundContents as $content) {
            if ($content->menu_id || $content->sub_menu_id) {
                $this->data['found']->push([
                    'href' => url($content->menu_id ? '/'.$content->menu->slug : '/'.$content->subMenu->slug.($content->sub_menu_id == 33 ? '?id='.$content->id.'#enc_'.$content->id : '')),
                    'title_ru' => $content->head_ru ? $content->head_ru : ($content->menu_id ? $content->menu->ru : $content->subMenu->ru),
                    'title_en' => $content->head_en ? $content->head_en : ($content->menu_id ? $content->menu->en : $content->subMenu->en),
                    'text_ru' => $content->text_ru,
                    'text_en' => $content->text_en,
                ]);
            }
        }

        $foundNews = $this->searchInModel(new News(), $searchString);
        foreach ($foundNews as $new) {
            $menu = Menu::find(6);
            $this->data['found']->push([
                'href' => url('/'.$menu->slug.'/'.$new->slug),
                'title_ru' => $content->head_ru,
                'title_en' => $content->head_en,
                'text_ru' => $content->text_short_ru,
                'text_en' => $content->text_short_en,
            ]);
        }

        $this->getFound('\AboutProduct', $searchString);
        $this->getFound('\AboutLubricant', $searchString);
        $this->getFound('\Classification', $searchString);

        $this->data['found'] = $this->data['found']->paginate(10);

        return $this->showView('search');
    }

    private function searchInModel(Model $model, $searchString)
    {
        $fields = $model->getFillable();
        $searchInFields = '';
        $validFields = [
            'name_ru',
            'name_en',
            'head_ru',
            'head_en',
            'text_ru',
            'text_en',
            'text_short_ru',
            'text_short_en'
        ];

        foreach ($fields as $field) {
            if (in_array($field, $validFields)) $searchInFields .= $field.',';
        }
        $searchInFields = substr($searchInFields, 0, -1);

        return $model->whereRaw(
            'MATCH('.$searchInFields.') AGAINST(? IN BOOLEAN MODE)',
            array($searchString)
        )->get();
    }

    private function getFound($modelName, $searchString)
    {
        $found = $this->searchInModel(app('App\Models'.$modelName), $searchString);
        if (count($found)) {
            $modelMenu = $this->findMenu(new Menu(), $modelName);
            if (!$modelMenu) $modelMenu = $this->findMenu(new SubMenu(), $modelName);

            foreach ($found as $item) {
                $this->data['found']->push([
                    'href' => url('/'.$modelMenu->slug),
                    'title_ru' => isset($item->head_ru) ? $item->head_ru : $item->name_ru,
                    'title_en' => isset($item->head_en) ? $item->head_en : $item->name_en,
                    'text_ru' => $item->text_ru,
                    'text_en' => $item->text_en,
                ]);
            }
        }
    }

    private function findMenu(Model $menuModel, $addContentModelName)
    {
        return $menuModel->where('add_content_model',$addContentModelName)->first();
    }
}
