<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

use App\Mail\ContactMail;
use App\response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    use response;

    public function sendcontact(Request $request)
{
    try {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:100',
            'email' => 'required|email',
            'mobile_no' => 'nullable|digits:10',
            'city' => 'nullable|string|max:20',
            'message' => 'required|string|min:5|max:250',
        ]);

        if ($validator->fails()) {
            return $this->validatorerror($validator->errors());
        }

        $details = [
            'name' => $request->name,
            'email' => $request->email,
            'mobile_no' => $request->mobile_no,
            'city' => $request->city,
            'message' => $request->message,
        ];

        Mail::to('rtoexam@mailtrap.io')->send(new ContactMail($details));

        if ($request->ajax()) {
            return $this->success(__('setting.message_sent'));
        }

        return back()->with('success', __('setting.message_sent'));

    } catch (Exception $exception) {
        if ($request->ajax()) {
            return $this->error($exception->getMessage(), 500);
        }

        return back()->with('error', 'Something went wrong!');
    }
}

}

