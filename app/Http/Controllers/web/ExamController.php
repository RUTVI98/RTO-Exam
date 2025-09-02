<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    public function view(){
        return view('web.exam.index');
    }
}
