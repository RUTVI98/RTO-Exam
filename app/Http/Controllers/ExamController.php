<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamController extends Controller
{
    public function view(){
        return view('web.pages.exam.index');
    }
}
