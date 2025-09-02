@extends('web.layouts.master')

@section('title', 'Online Exam')

@section('content')

    <!-- online exam section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content exam-change-position">
                        <h1 class="theme-color-fff">Online Driving Licence Computer Test Exam - RTO Exam</h1>
                        <!-- <img src="assets/image/rto-banner-image.png" alt="rto-banner-image" class="img-fluid"> -->
                        <p class="fs-20px fw-300 mb-0">Time and question bound test exactly same as actual RTO test</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- online exam section end -->

    <!-- quiz section start -->
    <section class="quiz-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="quiz-content-info">
                        <div class="card quiz-card">
                            <div class="card-body quiz-card-body">
                                <form class="question-answer p-0" id="question-answer">
                                    <div class="easy-to-use d-flex gap-2 align-items-center">
                                        <span class="quiz-time fs-14px">
                                            30s
                                        </span>
                                        <p class="card-text mb-0 theme-color-161616 fs-18px" id="#">
                                            The average pulse rate of an adult is rage pulse rate of an adultrage pulse
                                            rate of an adult</p><br>
                                    </div>
                                    <div class="image-text" id="#"> </div>
                                    <!-- Option A -->
                                    <label class="click-answer first-click ">
                                        <input type="radio" name="question1" id="check1" class="d-none">
                                        <div class="select-answer gap-2 d-flex align-items-center p-3 overflow-hidden">
                                            <div class="click-with fs-14px">A</div>
                                            <div class="option-texta theme-color-161616 fs-16px">
                                                Stop the vehicle and wait for the green light to appear
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Option B -->
                                    <label class="click-answer first-click ">
                                        <input type="radio" name="question1" id="check1" class="d-none">
                                        <div class="select-answer gap-2 d-flex align-items-center p-3 overflow-hidden">
                                            <div class="click-with fs-14px">B</div>
                                            <div class="option-texta theme-color-161616 fs-16px">
                                                Stop the vehicle and wait for the green light to appear
                                            </div>
                                        </div>
                                    </label>

                                    <!-- Option C -->
                                    <label class="click-answer first-click ">
                                        <input type="radio" name="question1" id="check1" class="d-none">
                                        <div class="select-answer gap-2 d-flex align-items-center p-3 overflow-hidden">
                                            <div class="click-with fs-14px">C</div>
                                            <div class="option-texta theme-color-161616 fs-16px">
                                                Stop the vehicle and wait for the green light to appear
                                            </div>
                                        </div>
                                    </label>
                                    <div class="errorExam my-2"> You Have Not Select The Answer
                                    </div>

                                    <div class="question-number d-flex align-items-center justify-content-between">
                                        <p class="display-number mb-0 theme-color-161616 fw-600">Question 6/20 </p>
                                        <div class="true-false-btn gap-2 d-flex">
                                            <a class="true-btn d-flex justify-content-between" data-bs-toggle="modal"
                                                href="#">
                                                <span class="true-answer"><i class="fa-solid fa-check"></i></span>
                                                <span class="true-answer-counter" id="correct_answer_count">01</span>
                                            </a>
                                            <a class="false-btn d-flex justify-content-between" data-bs-toggle="modal"
                                                href="#">
                                                <span class="true-answer"><i class="fa-solid fa-xmark"></i></span>
                                                <span class="true-answer-counter" id="wrong_answer_count">02</span>
                                            </a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card quiz-card card-position"></div>
                    </div>
                </div>
            </div>
            <div class="row">
                    <div class="col-12">
                        <div class="next-button text-center mt-4 pt-2">
                            <a type="submit" form='question-answer' class="next" id="next">Next
                                <i class="fa-solid fa-chevron-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- quiz section end -->

    <!--ScoreBoard Section start -->
    <!-- ScoreBoard Heading section start -->
    <section class="sub-sections ScoreBoard-section" id="ScoreBoard-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content exam-change-position ScoreBoard-main">
                        <h1 class="theme-color-fff">ScoreBoard</h1>
                        <!-- <img src="assets/image/rto-banner-image.png" alt="rto-banner-image" class="img-fluid"> -->
                        <p class="fs-20px fw-300 mb-0">Time and question bound test exactly same as actual RTO test</p>
                    </div>
                </div>
            </div>
    </section>
    <!-- ScoreBoard Heading section end -->
    <br>
    <!-- ScoreBoard Question&Answer section start -->
    <section class="ScoreBoard-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="quiz-content-info">
                        <div class="card quiz-card">
                            <div class="card-body quiz-card-body">
                                <div class="easy-to-use d-flex align-items-center">
                                    <div class="scoreboard-text" id="scoreboard-text">
                                        <p class="card-text" id="que-text"> </p>
                                        <p class="img-text" id="img-text"> </p>
                                        <p class="card-text" id="CAns-text"> </p>
                                        <p class="card-text" id="UAns-text"> </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card quiz-card card-position"></div>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 mt-4">
                    <div class="d-flex align-items-center flex-column flex-ms-row justify-content-center gap-3">
                        <a class="r-submit fw-300" href="#">Home</a>
                        <a class="r-submit fw-300" href="#">Try Again</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ScoreBoard Question&Anser section end -->
    <!--ScoreBoard Section end -->

    <!-- result section start -->
    <section class="result-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="quiz-content-info">
                        <div class="card quiz-card">
                            <div class="card-body quiz-card-body">
                                <div class="easy-to-use d-flex align-items-center center">
                                    <div>
                                        <p class="card-text" id="result-text"> Exam is Successfully Completed. </p>
                                        <h2 class="card-text" id="passed-text">Passed</h2>
                                        <h2 class="card-text" id="failed-text">Failed </h2>
                                        <p class="card-text" id="correct_answer">Correct Answers:14 </p>
                                        <p class="card-text" id="wrong_answer">Wrong Answers:06 </p>
                                        <div
                                            class="d-flex align-items-center justify-content-center gap-3 flex-column flex-ms-row">
                                            <a class="r-submit w-100 text-center fw-300" href="#">Home</a>
                                            <a class="r-submit w-100 text-center fw-300" href="#">ScoreBoard</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card quiz-card card-position"></div>
                    </div>
                </div>
            </div>
            <div class="next-question-btn">
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-6">
                        
                        <div
                            class="d-flex align-items-center justify-content-center flex-column flex-ms-row next-button gap-3">
                            <a href="#" class="next  text-center">Next</a>
                            <a href="#" class="next text-center">
                                <p class="mb-0">Retake Exam </p> <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- result section end -->

@endsection
