<?php

use App\Http\Controllers\web\ExamController;
use App\Http\Controllers\web\HomeController;
use App\Http\Controllers\web\QuestionbankController;
use App\Http\Controllers\web\SettingController;
use Illuminate\Support\Facades\Route;

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

