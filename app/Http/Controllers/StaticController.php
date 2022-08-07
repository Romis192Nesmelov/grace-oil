<?php

namespace App\Http\Controllers;
//use Illuminate\Http\Request;
//use App\Models\Content;

class StaticController extends Controller
{
    use HelperTrait;

    protected $data = [];

    public function index()
    {
        return $this->showView('home');
    }

    protected function showView($view)
    {
        $settings = new SettingsController();
        return view($view, [
            'seo' => $settings->getSeoTags(),
            'metas' => $this->metas,
            'settings' => $settings->getSettings(),
            'data' => $this->data
        ]);
    }
}
