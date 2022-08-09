<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    use HelperTrait;

    public function feedback(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'email' => 'required|email',
            'question' => 'max:2000',
            'i_agree' => 'required|accepted'
        ]);
        $fields = $this->processingFields($request);
        return $this->sendMail($request,'feedback',$fields);
    }

    private function sendMail(Request $request, $template, $fields)
    {
        $message = trans('content.thanx_feedback');
        $this->sendMessage($template,$fields);
        return $request->ajax()
            ? response()->json(['success' => true, 'message' => $message])
            : redirect()->back()->with('message', $message);
    }
}
