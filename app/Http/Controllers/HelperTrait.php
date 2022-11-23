<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

trait HelperTrait
{
    private $cacheTime = 60*60*24*365;
    private $validationPhone = 'regex:/^((\+)?(\d)(\s)?(\()?[0-9]{3}(\))?(\s)?([0-9]{3})(\-)?([0-9]{2})(\-)?([0-9]{2}))$/';
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


    public function processingFields(Request $request, $checkboxFields=null, $ignoreFields=null, $timeFields=null, $colorFields=null)
    {
        $exceptFields = ['id'];
        if ($ignoreFields) {
            if (is_array($ignoreFields)) $exceptFields = array_merge($exceptFields, $ignoreFields);
            else $exceptFields[] = $ignoreFields;
        }

//        $exceptFields = array_merge($exceptFields, $this->ignoringFields);
        $fields = $request->except($exceptFields);

        if ($checkboxFields) {
            if (is_array($checkboxFields)) {
                foreach ($checkboxFields as $field) {
                    $fields[$field] = isset($fields[$field]) && $fields[$field] == 'on' ? 1 : 0;
                }
            } else {
                $fields[$checkboxFields] = isset($fields[$checkboxFields]) && $fields[$checkboxFields] == 'on' ? 1 : 0;
            }
        }

        if ($timeFields) {
            if (is_array($timeFields)) {
                foreach ($timeFields as $field) {
//                    $fields[$field] = Carbon::createFromTimestamp($this->convertDate($fields[$field]))->toDateTimeString();
                    $fields[$field] = $this->convertDate($fields[$field]);
                }
            } else {
//                $fields[$timeFields] = Carbon::createFromTimestamp($this->convertDate($fields[$timeFields]))->toDateTimeString();
                $fields[$timeFields] = $this->convertDate($fields[$timeFields]);
            }
        }

        if ($colorFields) {
            if (is_array($colorFields)) {
                foreach ($colorFields as $field) {
                    $fields[$field] = $this->convertColor($fields[$field]);
                }
            } else {
                $fields[$colorFields] = $this->convertColor($fields[$colorFields]);
            }
        }
        return $fields;
    }

//    private function convertTime($time)
//    {
//        $time = explode('/', $time);
//        return $time[1].'/'.$time[0].'/'.$time[2];
//    }

    private function sendMessage($template, array $fields, $pathToFile=null, $copyTo=null)
    {
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