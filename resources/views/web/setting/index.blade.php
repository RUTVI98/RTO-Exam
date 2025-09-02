@extends('web.layouts.master')

@section('title', 'Setting')

@section('content')

    <!-- setting and help section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content">
                        <h1 class="theme-color-fff">Settings & Help</h1>

                        <p class="fs-20px fw-300 mb-0">Form, RTO office information and more</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="message-section" id="#">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="success-message" id="success-message">
                        <div class="success-container">
                            <p class="success-text fw-300">Your message has been sent. we'll get back to you shortly</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- success message box -->
    </section>

    <section class="contact-section">
        <div class="container">
            <div class="help-details">
                <div class="row g-4 justify-content-between">
                    <div class="col-12 col-lg-4">
                        <ul class="dropdown-menu help-menubar">
                            <div class="nav nav-pills menu-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">

                                <a href="javascript:void(0)" class="nav-link active dropdown-item menubar-item"
                                    id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                    role="tab" aria-controls="v-pills-home" aria-selected="true"><i
                                        class="fa-solid fa-clipboard-list"></i>Forms</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                    type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                        class="fa-solid fa-spinner"></i>Process of driving Licence</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                    type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                        class="fa-solid fa-building"></i>RTO Office</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                                    type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                        class="fa-solid fa-address-book"></i>Contact Us</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item menu-border-none"
                                    id="v-pills-disclaimer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disclaimer"
                                    type="button" role="tab" aria-controls="v-pills-disclaimer" aria-selected="false"><i
                                        class="fa-solid fa-circle-exclamation"></i>Disclaimer</a>
                            </div>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="tab-content setting-and-help-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">Forms</h4>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Driving Licence Forms
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="#" class="theme-color-161616 fs-16px link-161616-theme">Form 1
                                                        -
                                                        Application - cum - declaration as to physical fitness.</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 1 A -
                                                        Medical certificate</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 2 -
                                                        Issue/Renewal of learner's license</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 4 -
                                                        Issue of fresh driving license</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 8 -
                                                        Addition of another class of
                                                        vehicle</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 9 -
                                                        Renewel of driving license</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form L.L.D
                                                        -
                                                        Issue of duplicate driving license</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form T.V.A
                                                        -
                                                        Authorization to drive transport vehicle</a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Application
                                                        for international driving permit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Registration Forms
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 20 -
                                                        Permanent registration</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 25 -
                                                        Renewel of certificate of registration.</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 26 -
                                                        Issue of duplicate certificate of registration.</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 29 -
                                                        Transfer of ownership.</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 30 -
                                                        Transfer of ownership(If covered by finance)</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 34 -
                                                        Endorsement of hire-purchase agreement</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form 35 -
                                                        Termination of hire-purchase
                                                        agreement</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form M.T -
                                                        Application for tax exemption </a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form N.T -
                                                        Application for non use of motor
                                                        vehicle</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">Form F.T
                                                    </a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">CNA Form -
                                                        Application for obtaining choice
                                                        number</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Permit Forms
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">P.Tem.A. -
                                                        Application for temporary
                                                        permit</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">P.Pu.C.A -
                                                        Application for good carriage
                                                        permit</a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="#" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">P.Co.P.A -
                                                        Application for contract
                                                        carriage
                                                        permit</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel"
                                aria-labelledby="v-pills-profile-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">Process of driving
                                            Licence</h4>

                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                Driving licence
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">Application Form</p>

                                                    <div class="licence-information">
                                                        <ul>
                                                            <li> An applicant is required to obtain a learning
                                                                license
                                                                in order to get new driving license.</li>
                                                            <li> An applicant is required to apply in Form No.2/4 for
                                                                the
                                                                purpose of both learning as well as driving license,
                                                                Medical
                                                                Certificate in Form No.1 (A) is also required to be
                                                                attached
                                                                . In case a person wants to obtain driving license for
                                                                transport goods vehicle, & to get online appointment or
                                                                for
                                                                further details, please visit : <a href="#"
                                                                    class="theme-color-161616 fw-700 link-161616-theme">www.sarathi.nic.in</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">Eligibility</p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>A person should have completed 16 years to obtain
                                                                license for 2 wheelers without gear.</li>
                                                            <li> person should have completed 18 years age to obtain
                                                                license
                                                                for 2 wheelers with gear, Motor-car, Tractor and other
                                                                non-transport vehicles.</li>
                                                            <li>For transport vehicles, a person should have completed
                                                                20
                                                                years of age. In addition he should be passed standard
                                                                8th
                                                                pass and should have experience of 1 year driving a
                                                                light
                                                                motor vehicle.</li>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">Necessary Documents</p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>Proof of Age</li>
                                                            <p>School Leaving Certificate, Birth Certificate, Passport,
                                                                Pan
                                                                Card, L.I.C. Policy or a Certificate from Civil Surgeon
                                                                or a
                                                                Doctor equivalent to that can be submitted as a proof of
                                                                age.</p>
                                                            <li>Proof of Address</li>
                                                            <p>School Leaving Certificate, Passport, L.I.C. Policy,
                                                                Electoral Voter I-Card, Light Bill, Telephone Bill,
                                                                receipt
                                                                of House Tax with address, Pay Slip of
                                                                Central/State/Local
                                                                self Government or an Affidavit from the applicant to
                                                                that
                                                                effect can be submitted as the proof for address.</p>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">Fee</p>

                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>The fee for Learning License and Driving License
                                                                has to
                                                                be paid together. Rs.25/- as test fee plus Rs.30/- per
                                                                category of vehicle is required to be paid for Learning
                                                                License.</li>
                                                            <li>Rs.200/- for a Smart Card Driving License and Rs.50/-
                                                                per
                                                                category of vehicle is required to be paid for Driving
                                                                License.</li>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">Procedure Of
                                                        Examination</p>
                                                    To obtain Learning License, Knowledge Test through computer is
                                                    required to be passed.</p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li>Subject like Rules and Regulations of traffic, and
                                                                traffic signage's are included the test.</li>
                                                            <li>15 questions are asked in the test at random, out of
                                                                which
                                                                11 questions are required to be answered correctly to
                                                                pass
                                                                the test.</li>
                                                            <li>48 seconds are allowed to answer each question.</li>
                                                            <li>A person failing in the test can appear for the re-test
                                                                after a gap of 24 hours.</li>
                                                            <li>A person who has learning license or driving license and
                                                                seeks to apply for an additional category of driving
                                                                license
                                                                in the existing driving license, is exempted from the
                                                                knowledge test on computer.</li>
                                                            <li> Click here for<a href="#"
                                                                    class="theme-color-161616 fw-700 link-161616-theme">
                                                                    LLR
                                                                    Practices and Mock Test</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button  collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                Additional another category in the existing driving licence

                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">To add another category
                                                        in the existing license for two
                                                        wheelers</p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>Application should be made in form-8 attaching
                                                                original
                                                                driving license with a fee of Rs.50/- for driving
                                                                license,
                                                                Rs.200/- for a smart card driving license and Rs.50/-
                                                                for
                                                                driving test is required to be paid with application
                                                            </li>
                                                            <li>Learning license is required to be obtained by the
                                                                applicant, but he is exempted from the computer
                                                                knowledge
                                                                test.</li>
                                                            <li>The applicant can appear for driving test after a gap of
                                                                30
                                                                days of obtaining the learning license.</li>
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">Addition of transport
                                                        vehicle category in the L.M.V.
                                                        license</p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>Application is made in Form No.8 attaching original
                                                                driving license is required to be attached.</li>
                                                            <li>Applicant should have completed 20 years of age.</li>
                                                            <li>Minimum standard 8th pass, and</li>
                                                            <li>Have minimum of 1 year of experience of driving L.M.V.
                                                            </li>
                                                            <li>Applicant should also produce certificate of training
                                                                from a
                                                                recognized Motor Driving School in Form No.5.</li>
                                                            <li>A fee of Rs.50/-for driving license with Rs.200/- for a
                                                                smart card and driving test fee of Rs.50/- per category
                                                                of
                                                                vehicle is required to paid with application.</li>
                                                            <li>Please note that, an applicant is required to take
                                                                learning
                                                                license, but he is exempted from the computer knowledge
                                                                test.</li>
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">To obtain badge or
                                                        authorization for transport
                                                        vehicle</p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>Application should be made in Form T.V.A.</li>
                                                            <li>Applicant should have completed 20 years of age and he
                                                                should be minimum standard-8th pass, and</li>
                                                            <li>Have minimum of 1 year of experience of driving L.M.V.
                                                                Applicant should also produce training certificate in
                                                                From
                                                                No.5 from an authorized Motor Driving School.</li>
                                                            <li>He should also produce a Certificate of good conduct
                                                                from
                                                                concerned Police Station.</li>
                                                            <li>A fee of Rs.50/- for every category of vehicle is
                                                                required
                                                                to be paid for this purpose</li>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">Inclusion of hazardous
                                                        goods category in transport
                                                        driving
                                                        license</p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li>Application can be made on a plain paper specifying
                                                                particulars of applicant.</li>
                                                            <li>The application should be accompanied with a certificate
                                                                of
                                                                3 days training from a Central or State Government
                                                                approved
                                                                centre.</li>
                                                            <li>A fee of Rs.50/- for endorsement is required to be paid.
                                                            </li>
                                                            <li>The endorsement is made for a period of one year.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                Renewal of driving licence

                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li>Driving license is valid till the date as shown in
                                                                the
                                                                driving license.</li>
                                                            <li>A grace period of 30 days is granted for renewal of
                                                                driving
                                                                license.</li>
                                                            <li>If, a driving license holder comes for renewal within a
                                                                period of 5 years from the date of expiry, he is
                                                                exempted
                                                                from test, but license is valid from date of renewed
                                                                license.</li>
                                                            <li>Application in Form-9 attached with original Driving
                                                                License
                                                                should be made for renewal of driving license.</li>
                                                            <li>Medical Certificate in Form-1-A is required to be
                                                                produced,
                                                                if, applicant has completed 50 years of age or is
                                                                applying
                                                                for renewal of driving license for a transport vehicle.
                                                            </li>
                                                            <li>A fee of Rs.50/- with a smart card fee of Rs.200/- is
                                                                required to be paid, if, application is made within the
                                                                period.</li>
                                                            <li>For delay, an additional fee of Rs.50/- for every year
                                                                of
                                                                such delay is required to be paid.</li>
                                                            <li>In case of original driving license is from other R.T.O.
                                                                or
                                                                State, then N.O.C. of concerned R.T.O. should be
                                                                attached.
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingFour">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour"
                                                aria-expanded="false" aria-controls="flush-collapseFour">
                                                For change in details of driving licence or obtaining a duplicate
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li> Application should be made in Form L.L.D. with
                                                                details
                                                                of original driving license and a fee of Rs.200/- should
                                                                be
                                                                paid. </li>
                                                            <li>n case applicant has forgotten number of original smart
                                                                card, then, he can apply for information regarding it by
                                                                making an application indicating his name, address, date
                                                                of
                                                                birth and is required to be pay a fee of Rs.25/-.</li>
                                                            <li>To change details of driving license like name, address,
                                                                etc., then, an application on plain paper with a smart
                                                                card
                                                                fee of Rs.200/- is required to be made.</li>
                                                            <li>N.O.C. from the original licensing authority should be
                                                                obtained and attached with the application.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingFive">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFive"
                                                aria-expanded="false" aria-controls="flush-collapseFive">
                                                International driving licence or permit
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li>To obtain international driving license,
                                                                application in
                                                                Form 4 (A) should be made along with the Medical
                                                                Certificate
                                                                in Form - 1 (A).</li>
                                                            <li>Copy of Existing driving license. Copy of passport, visa
                                                                and
                                                                three passport size photographs should be attached with
                                                                the
                                                                application.</li>
                                                            <li>A fee of Rs.500/- is required to be paid for this
                                                                purpose.
                                                            </li>
                                                            <li>A permit is issued for a period of one year or till the
                                                                validity of existing driving license, whichever is
                                                                earlier.
                                                            </li>
                                                            <li>Duplicate International Driving Permit is not issued or
                                                                renewed after expiry.</li>
                                                            <li>After expiry of International Driving Permit it is not
                                                                renewed.</li>
                                                            <li>It may be noted that, such license is issued only for
                                                                Indian
                                                                citizen and they are required to be presented in R.T.O.
                                                                in
                                                                person.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingSix">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseSix"
                                                aria-expanded="false" aria-controls="flush-collapseSix">
                                                Driving licence delivered
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">Learning license is
                                                        delivered to the applicant in person
                                                        on
                                                        the same day when he comes for knowledge test.</p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            <li>Driving license is sent by speed post at the
                                                                address
                                                                mentioned by the applicant in his application.</li>
                                                            <li>International driving permit is delivered to the
                                                                applicant
                                                                in person.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel"
                                aria-labelledby="v-pills-messages-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">RTO Office</h4>
                                    </div>

                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-heading1">
                                            <button class="accordion-button form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapse1"
                                                aria-expanded="true" aria-controls="flush-collapse1">
                                                GJ01 - Ahmedabad
                                            </button>
                                        </h2>
                                        <div id="flush-collapse1" class="accordion-collapse form-body-space collapse show"
                                            aria-labelledby="flush-heading1" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="javascript:void(0)" class="application-form"><i
                                                            class="fa-solid fa-location-dot"></i>RTO Ahmedabad, Subhash
                                                        Bridge, Sastri Nagar, Hridaya Kunj, Road, Ahmedabad, Gujarat
                                                        380027</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="javascript:void(0)" class="application-form"><i
                                                            class="fa-solid fa-phone"></i>079-27559696</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="pb-3 theme-color-161616 border-bottom fs-4">Contact Us</h4>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <form class="contact-form" name="contact-form" id="contact-form">
                                            <div class="container">
                                                <div class="row gap-y-20px">
                                                    <div class="col-sm-6 col-12">
                                                        <div class="address-info">
                                                            <label class="name" for="Name">Name</label>
                                                            <input type="text" name="name" placeholder="Enter your name"
                                                                class="contact-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="address-info">
                                                            <label for="email" class="name">Email</label>
                                                            <input type="text" name="email" placeholder="Enter your email"
                                                                class="contact-input">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="contact-us">
                                                            <div class="address-info">
                                                                <label for="mobileno" class="name">Mobile No.
                                                                    (Optional)</label>
                                                                <input type="number" name="mobile_no"
                                                                    placeholder="Enter your mobile number"
                                                                    class="contact-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="contact-us">
                                                            <div class="address-info">
                                                                <label for="cityname" class="name">City
                                                                    (Optional)</label>
                                                                <input type="text" name="city" placeholder="Enter your city"
                                                                    class="contact-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="address-info">
                                                            <label for="message" class="name">Message</label>
                                                            <textarea name="message" cols="30" rows="5"
                                                                placeholder="Enter your massage"
                                                                class="contact-input"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <form class="submit-button">
                                                            <a href="javascript:void()" type="button"
                                                                class="r-submit">submit</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="v-pills-disclaimer" role="tabpanel"
                                aria-labelledby="v-pills-disclaimer-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="pb-3 theme-color-161616 border-bottom fs-4">Disclaimer</h4>
                                    </div>
                                    <div class="accordion-item form-details last-form-detail">
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space pb-0"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            This test is only for public awareness. Thought all efforts have been
                                            made
                                            to ensure the accuracy of the content, the same should not be construed as a
                                            statement of low or used for any legal purposes. This application accepts no
                                            responsibility in relation to the accuracy, completeness, usefulness or
                                            otherwise, of the contents. Users are advised to verify/check any
                                            information
                                            with the Transport Department.
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
    <!-- setting and help section end -->

@endsection