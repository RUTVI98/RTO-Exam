<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

class QuestionbankController extends Controller
{
    public function view(){
        return view('web.questionbank.index');
    }
}
