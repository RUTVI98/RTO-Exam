<?php

use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\QuestionbankController;
use App\Http\Controllers\web\SettingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::middleware('lang')->group(function () {
    Route::controller(HomeController::class)->group(function () {
        Route::get('/', 'view')->name('home');
    });

    Route::controller(ExamController::class)->group(function () {
        Route::get('/exam', 'view')->name('exam');
    });

    Route::controller(QuestionbankController::class)->group(function () {
        Route::get('/questionbank', 'view')->name('questionbank');
        Route::post('/load_questions', 'loadQuestions')->name('loadQuestions');
        Route::post('/load_signs', 'loadSigns')->name('loadSigns');
    });

    Route::controller(SettingController::class)->group(function () {
        Route::get('/setting', 'view')->name('setting');
    });

    Route::get('set-locale/{lang?}', function($lang = 'eng'){
        if(!in_array($lang,['guj','eng'])){
            $lang = 'eng';
        }
        session()->put('lang',$lang);
        return redirect()->back();
    })->name('set-locale');

});
