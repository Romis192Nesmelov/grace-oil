<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

trait HelperTrait
{
    private $cacheTime = 60*60*24*365;
    public $validationPhone = 'regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/';
    public $validationDate = 'required|regex:/^((\d){2}\/(\d){2}\/(\d){4})$/';
    public $validationPassword = 'required|confirmed|min:3|max:50';
    public $validationString = 'required|min:5|max:255';
    public $validationId = 'required|integer|exists:';
    public $validationArrayIds = 'required|array|exists:';
    public $validationText = 'required|min:5|max:5000';
    public $validationPng = 'mimes:png|max:2000';
    public $validationJpgAndPng = 'mimes:jpg,png|max:2000';
    private $validationFeedback = [
        'organization_name' => 'required|min:3|max:255',
        'email' => 'required|email',
        'phone' => 'max:2000',
        'i_agree' => 'required|accepted'
    ];
    private $validationDoc = 'required|mimes:doc,docx';

    private function getRequestValidation()
    {
        return [
            'organization_name' => 'required|min:3|max:255',
            'email' => 'required|email',
            'phone' => $this->validationPhone, 
            'field_of_activity' => 'max:1000',
            'i_agree' => 'required|accepted'
        ];
    }
    
    private $metas = [
        'meta_description' => ['name' => 'description', 'property' => false],
        'meta_keywords' => ['name' => 'keywords', 'property' => false],
        'meta_twitter_card' => ['name' => 'twitter:card', 'property' => false],
        'meta_twitter_size' => ['name' => 'twitter:size', 'property' => false],
        'meta_twitter_creator' => ['name' => 'twitter:creator', 'property' => false],
        'meta_og_url' => ['name' => false, 'property' => 'og:url'],
        'meta_og_type' => ['name' => false, 'property' => 'og:type'],
        'meta_og_title' => ['name' => false, 'property' => 'og:title'],
        'meta_og_description' => ['name' => false, 'property' => 'og:description'],
        'meta_og_image' => ['name' => false, 'property' => 'og:image'],
        'meta_robots' => ['name' => 'robots', 'property' => false],
        'meta_googlebot' => ['name' => 'googlebot', 'property' => false],
        'meta_google_site_verification' => ['name' => 'robots', 'property' => false],
    ];

    private function convertTime($time)
    {
        $time = explode('/', $time);
        return $time[1].'/'.$time[0].'/'.$time[2];
    }

    public function saveCompleteMessage()
    {
        Session::flash('message','Сохранение произведено');
    }

    public function unlinkFile($table, $file, $path='')
    {
        $fullPath = base_path('public/'.$path.$table[$file]);
        if (isset($table[$file]) && $table[$file] && file_exists($fullPath)) unlink($fullPath);
    }

    public function sendMessage($template, array $fields, $pathToFile=null, $copyTo=null)
    {
        if (!rand(0,5)) {
            $title = trans('content.company_name');
            $fields['title'] = $title;
            Mail::send('emails.'.$template, $fields, function($message) use ($title, $pathToFile, $copyTo) {
                $message->subject(trans('content.message_from',['from' => $title]));
                $message->to(env('MAIL_TO'));
                if ($copyTo) $message->cc($copyTo);
                if ($pathToFile) $message->attach($pathToFile);
            });
        }
    }
}