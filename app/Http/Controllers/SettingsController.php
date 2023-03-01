<?php

namespace App\Http\Controllers;

class SettingsController extends Controller
{
    use HelperTrait;
    
    private $xml;

    public function __construct()
    {
        $this->xml = simplexml_load_file(base_path(config('app.settings')));
    }

    // Seo
    public function getSeoTags()
    {
        $seo = (array)$this->xml->seo;
        $tags = ['title' => $seo['title_'.app()->getLocale()]];
        foreach ($this->metas as $meta => $params) {
            $tags[$meta] = (string)$this->xml->seo->$meta;
        }
        return $tags;
    }
    
    // Settings
    public function getSettings()
    {
        return (array)$this->xml->settings;
    }
}
