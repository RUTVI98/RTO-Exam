<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionbankController extends Controller
{
    public function view(){
        return view('web.pages.questionbank.index');
    }
}
