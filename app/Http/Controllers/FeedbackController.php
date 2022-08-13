<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    use HelperTrait;

    public function feedback(Request $request)
    {
        $this->validate($request, $this->validationFeedback);
        $fields = $this->processingFields($request);
        $fields['mailTitle'] = trans('content.feedback');
        return $this->sendMail($request,'feedback',$fields);
    }

    public function toBeAPartner(Request $request)
    {
        $this->validate($request, $this->validationFeedback);
        $fields = $this->processingFields($request);
        $fields['mailTitle'] = trans('content.to_make_a_partner');
        return $this->sendMail($request,'feedback',$fields);
    }

    public function programApplication(Request $request)
    {
        $this->validate($request, $this->validationFeedback);
        $fields = $this->processingFields($request);
        $fields['mailTitle'] = trans('content.affiliate_program_application');
        return $this->sendMail($request,'feedback',$fields);
    }

    public function becomeDealer(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:100',
            'phone' => $this->validationPhone,
            'email' => 'required|email',
            'my_message' => 'max:2000',
            'i_agree' => 'required|accepted'
        ]);
        $fields = $this->processingFields($request);
        return $this->sendMail($request,'dealer',$fields);
    }

    public function graceTestRequest(Request $request)
    {
        $this->validate($request, [
            'purpose_of' => 'required|min:3|max:200',
            'equipment' => 'required|min:3|max:200',
            'competitor_product' => 'required|min:3|max:200',
            'grace_product' => 'required|min:3|max:200',
            'number_of_samples' => 'required|min:3|max:200',
            'expected_effect' => 'required|min:3|max:200',
            'partner' => 'required|min:3|max:200',
            'email' => 'required|email',
            'phone' => $this->validationPhone,
            'i_agree' => 'required|accepted'
        ]);

        $fields = $this->processingFields($request);
        return $this->sendMail($request,'grace_test',$fields);
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
