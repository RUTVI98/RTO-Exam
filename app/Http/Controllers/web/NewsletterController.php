<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

use App\Models\Newsletter;
use App\response;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class NewsletterController extends Controller
{
    use response;

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|unique:newsletters,email',
            ], [
                'email.required' => 'Please enter your email address.',
                'email.email' => 'Make sure your email format is valid.',
                'email.unique' => 'This email is already subscribed to our updates.',
            ]);

            if ($validator->fails()) {
                return $this->validatorerror($validator->errors());
            }

            Newsletter::create([
                'email' => $request->email,
            ]);

            if ($request->ajax()) {
                return $this->success('Thank you! You’ll receive updates soon.');
            }

            return back()->with('success', 'Thank you! You’ll receive updates soon.');

        } catch (Exception $exception) {
            if ($request->ajax()) {
                return $this->error($exception->getMessage(), 500);
            }

            return back()->with('error', 'Something went wrong!');
        }
    }
}
