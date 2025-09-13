<?php

namespace App\Http\Controllers\web;
use App\Http\Controllers\controller;

use App\Models\Question;
use Illuminate\Http\Request;

class Examcontroller extends Controller
{
  public function view(Request $request)
  {
    $lang = session()->get('lang', 'eng');

    // Get 15 random questions
    $questions = Question::where('lang', $lang)
      ->inRandomOrder()
      ->limit(5)
      ->get();

    return view('web.exam.index', compact('questions'));
  }

}