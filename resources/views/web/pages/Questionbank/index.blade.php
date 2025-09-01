@extends('web.layouts.master')

@section('title', 'QuestionBank')

@section('content')
    
    <!-- question answer section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content">
                        <h1 class="theme-color-fff">RTO EXAM</h1>
                        <!-- <img src="assets/image/rto-banner-image.png" alt="rto-banner-image" class="img-fluid"> -->
                        <p class="fs-20px fw-300 mb-0">List of Questions & answer and meaning of road signs</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sub-section">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <ul class="nav nav-pills nav-fill gap-3 mb-5 question-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-700" id="home-tab" data-bs-toggle="tab"
                                data-bs-target="#home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">Questions</button>
                        </li>
                        <li class="nav-item nav-secont-item" role="presentation">
                            <button class="nav-link sign-link traffic-content-space" id="profile-tab"
                                data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="true">Traffic Signs</button>
                        </li>
                    </ul>

                    <div class="tab-content question-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active question-tab-info" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="row gap-y-20px">
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">01
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">02
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">03
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Lorem ipsum dolor sit
                                                    amet consectetur.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">04
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting crossing, when the
                                                    pedestrians are waiting to cross
                                                    the road, you should</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">05
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting crossing, when the
                                                    pedestrians are waiting to cross
                                                    the road, you should</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">06
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0 theme-color-161616">
                                                    Near a pedestrian crossing, when the pedestrians are waiting
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">07
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting crossing, when the
                                                    pedestrians are waiting to cross
                                                    the road, you should</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="card content-card">
                                        <div class="card-body">
                                            <div class="content-body d-flex gap-2 align-items-center">
                                                <span
                                                    class="start-content text-center fw-700 start-number theme-color-fff">08
                                                </span>
                                                <p class="fs-18px theme-color-54595f fw-300 mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting to cross
                                                    the road, you should
                                                </p>
                                            </div>
                                            <div class="content-body second-content d-flex gap-2 align-items-center">
                                                <span class="start-content text-center start-alpha fs-18px">A</span>
                                                <p class="fs-18px fw-300 theme-color-54595f mb-0">Near a pedestrian
                                                    crossing, when the pedestrians are waiting crossing, when the
                                                    pedestrians are waiting to cross
                                                    the road, you should</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="tab-pane traffic-sign-tab fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="row g-4">

                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">01</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img1.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">Stop
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">02</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img2.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">Keep
                                                    left</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">03</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img3.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">Give
                                                    way</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">04</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img4.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">No
                                                    entry</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">05</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img5.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    Sharp curve to the right</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">06</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img6.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    Pedestrian crossing</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">07</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img7.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    Parking on the right allowed</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">08</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img8.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    U-turn prohibited</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">09</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img9.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    U-turn prohibited</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                                    <div class="card content-card traffic-sign-card">
                                        <div class="card-body">
                                            <div class="content-body card-border-none">
                                                <span
                                                    class="start-content start-number theme-color-fff text-center mx-sm-0 mx-auto">10</span>
                                                <div class="traffic-sign-image">
                                                    <img src="assets/image/ts-upload/ts-img10.png"
                                                        class="img-fluid mx-auto d-block ">
                                                </div>
                                                <p class="traffic-signs-info fw-500 text-center theme-color-161616">
                                                    U-turn prohibited</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- question answer section end -->

    @endsection