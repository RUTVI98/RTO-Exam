@extends('web.layouts.master')

@section('title', 'Setting')

@section('content')

    <!-- setting and help section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content">
                        <h1 class="theme-color-fff">{{ __('setting.settings_help') }}</h1>

                        <p class="fs-20px fw-300 mb-0">{{ __('setting.form_info') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="message-section" id="message-section" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="success-message" id="success-message">
                        <div class="alert alert-success">
                        </div>
                    </div>
                </div>
            </div>
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
                                        class="fa-solid fa-clipboard-list"></i>{{ __('setting.menu_forms') }}</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                    type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false"><i
                                        class="fa-solid fa-spinner"></i>{{ __('setting.menu_process') }}</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
                                    type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false"><i
                                        class="fa-solid fa-building"></i>{{ __('setting.menu_rto') }}</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item"
                                    id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings"
                                    type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false"><i
                                        class="fa-solid fa-address-book"></i>{{ __('setting.menu_contact') }}</a>

                                <a href="javascript:void(0)" class="nav-link dropdown-item menubar-item menu-border-none"
                                    id="v-pills-disclaimer-tab" data-bs-toggle="pill" data-bs-target="#v-pills-disclaimer"
                                    type="button" role="tab" aria-controls="v-pills-disclaimer" aria-selected="false"><i
                                        class="fa-solid fa-circle-exclamation"></i>{{ __('setting.menu_disclaimer') }}</a>
                            </div>
                        </ul>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="tab-content setting-and-help-content" id="v-pills-tabContent">
                            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel"
                                aria-labelledby="v-pills-home-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">
                                            {{ __('setting.forms_heading') }}
                                        </h4>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{ __('setting.driving_licence_forms') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="{{ asset('assets/forms/form_1.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_1') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_1A.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_1a') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_2.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_2') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_4.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_4') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_8.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_8') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_9.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_9') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/lld.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_lld') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/tva.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_tva') }}</a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="{{ asset('assets/forms/form4a.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_idp') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingTwo">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                                aria-expanded="false" aria-controls="flush-collapseTwo">
                                                {{ __('setting.registration_forms') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="{{ asset('assets/forms/form_20.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">
                                                        {{ __('setting.form_20') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_25.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_25') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_26.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_26') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_29.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_29') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_30.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_30') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_34.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_34') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/form_35.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_35') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/mt.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_mt') }}
                                                    </a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/nt.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_nt') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/ft.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_ft') }}
                                                    </a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="{{ asset('assets/forms/CNA-Form.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_cna') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingThree">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree"
                                                aria-expanded="false" aria-controls="flush-collapseThree">
                                                {{ __('setting.permit_forms') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="form-body-details first-form-detail">
                                                    <a href="{{ asset('assets/forms/ptema.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_ptema') }}</a>
                                                </div>
                                                <div class="form-body-details">
                                                    <a href="{{ asset('assets/forms/ppuca.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_ppuca') }}</a>
                                                </div>
                                                <div class="form-body-details last-form-detail">
                                                    <a href="{{ asset('assets/forms/pcopa.pdf') }}" target="_blank"
                                                        class="theme-color-161616 fs-16px link-161616-theme">{{ __('setting.form_pcopa') }}</a>
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
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">
                                            {{ __('setting.process_title') }}
                                        </h4>

                                    </div>
                                    <div class="accordion-item form-details">
                                        <h2 class="accordion-header" id="flush-headingOne">
                                            <button class="accordion-button collapsed form-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne"
                                                aria-expanded="false" aria-controls="flush-collapseOne">
                                                {{ __('setting.tab_driving_licence') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.application_form') }}
                                                    </p>

                                                    <div class="licence-information">
                                                        <ul>
                                                            <li> {{ __('setting.applicant_learning_license') }}</li>
                                                            <li> {{ __('setting.applicant_form_2_4') }}<a href="#"
                                                                    class="theme-color-161616 fw-700 link-161616-theme">sarathi.parivahan.gov.in</a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.eligibility') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>{{ __('setting.eligibility_16') }}</li>
                                                            <li> {{ __('setting.eligibility_18') }}</li>
                                                            <li>{{ __('setting.eligibility_20') }}</li>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.document') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>{{ __('setting.proof_age') }}</li>
                                                            <p>{{ __('setting.proof_age_items') }}</p>
                                                            <li>{{ __('setting.proof_address') }}</li>
                                                            <p>{{ __('setting.proof_address_items') }}</p>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">{{ __('setting.fee') }}</p>

                                                    <div class="licence-information">
                                                        <ul>
                                                            <li>{{ __('setting.fee_learning') }}</li>
                                                            <li>{{ __('setting.fee_driving') }}</li>
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.exam_procedure') }}
                                                    </p>
                                                    {{ __('setting.exam_note') }}</p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach(__('setting.exam_rules') as $point)
                                                                <li>{!! $point !!}</li>
                                                            @endforeach
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
                                                {{ __('setting.additional_category') }}

                                            </button>
                                        </h2>
                                        <div id="flush-collapseTwo" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.two_wheeler_category') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            @foreach(__('setting.two_wheeler_points') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.transport_category') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            @foreach(__('setting.transport_points') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>

                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.badge_authorization') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul>
                                                            @foreach(__('setting.badge_points') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.hazardous_goods') }}
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach(__('setting.hazardous_points') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
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
                                                {{ __('setting.renewal_title') }}

                                            </button>
                                        </h2>
                                        <div id="flush-collapseThree" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach(__('setting.renewal_info') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
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
                                                {{ __('setting.change_title') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFour" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class=" pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach(__('setting.change_info') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
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
                                                {{ __('setting.intl_licence_title') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseFive" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="pb-0 first-form-detail">
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach(__('setting.intl_licence_info') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach
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
                                                {{ __('setting.accordion_title') }}
                                            </button>
                                        </h2>
                                        <div id="flush-collapseSix" class="accordion-collapse collapse form-body-space"
                                            aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body form-body">
                                                <div class="pb-0 first-form-detail">
                                                    <p class="fs-18px theme-color-161616 fw-700">
                                                        {{ __('setting.accordion_text') }}.
                                                    </p>
                                                    <div class="licence-information">
                                                        <ul class="mb-0">
                                                            @foreach (__('setting.info') as $point)
                                                                <li>{{ $point }}</li>
                                                            @endforeach

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
                                        <h4 class="fs-4 theme-color-161616 pb-3 border-bottom">
                                            {{ __('setting.rto_office') }}
                                        </h4>
                                    </div>

                                    @foreach($rtoOffices as $index => $office)
                                        <div class="accordion-item form-details">
                                            <h2 class="accordion-header" id="flush-heading{{ $index }}">
                                                <button class="accordion-button form-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#flush-collapse{{ $index }}"
                                                    aria-expanded="false" aria-controls="flush-collapse{{ $index }}">
                                                    {{ $office->stateCode }} - {{ $office->stateName }}
                                                </button>
                                            </h2>
                                            <div id="flush-collapse{{ $index }}"
                                                class="accordion-collapse form-body-space collapse"
                                                aria-labelledby="flush-heading{{ $index }}"
                                                data-bs-parent="#accordionFlushExample">
                                                <div class="accordion-body form-body">
                                                    <div class="form-body-details first-form-detail">
                                                        <a href="javascript:void(0)" class="application-form">
                                                            <i class="fa-solid fa-location-dot"></i>
                                                            {{ $office->officeAddress }}
                                                        </a>
                                                    </div>
                                                    <div class="form-body-details">
                                                        <a href="javascript:void(0)" class="application-form">
                                                            <i class="fa-solid fa-phone"></i>
                                                            {{ $office->contact }}
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel"
                                aria-labelledby="v-pills-settings-tab">
                                <div class="accordion accordion-flush setting-form" id="accordionFlushExample">
                                    <div class="start-form">
                                        <h4 class="pb-3 theme-color-161616 border-bottom fs-4">
                                            {{ __('setting.contact_us') }}
                                        </h4>
                                    </div>
                                    <div class="accordion-item form-details">
                                        <form class="contact-form" name="contact-form" id="contact-form"
                                            action="{{ route('contact_send') }}" method="POST">
                                            @csrf
                                            <div class="container">
                                                <div class="row gap-y-20px">
                                                    <div class="col-sm-6 col-12">
                                                        <div class="address-info">
                                                            <label class="name" for="name">{{ __('setting.name') }}</label>
                                                            <input type="text" name="name"
                                                                placeholder="{{ __('setting.name_text') }}"
                                                                class="contact-input" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="address-info">
                                                            <label for="email"
                                                                class="name">{{ __('setting.email') }}</label>
                                                            <input type="email" name="email"
                                                                placeholder="{{ __('setting.email_text') }}"
                                                                class="contact-input" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="contact-us">
                                                            <div class="address-info">
                                                                <label for="mobileno"
                                                                    class="name">{{ __('setting.mobile_no') }}</label>
                                                                <input type="number" name="mobile_no"
                                                                    placeholder="{{ __('setting.mobile_text') }}"
                                                                    class="contact-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-12">
                                                        <div class="contact-us">
                                                            <div class="address-info">
                                                                <label for="cityname"
                                                                    class="name">{{ __('setting.city') }}</label>
                                                                <input type="text" name="city"
                                                                    placeholder="{{ __('setting.city_text') }}"
                                                                    class="contact-input">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="address-info">
                                                            <label for="message"
                                                                class="name">{{ __('setting.message') }}</label>
                                                            <textarea name="message" cols="30" rows="5"
                                                                placeholder="{{ __('setting.message_text') }}"
                                                                class="contact-input" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-12">
                                                        <div class="submit-button">
                                                            <button type="submit" class="r-submit">
                                                                {{ __('setting.submit') }}
                                                            </button>
                                                        </div>
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
                                        <h4 class="pb-3 theme-color-161616 border-bottom fs-4">{{__('setting.disclaimer')}}
                                        </h4>
                                    </div>
                                    <div class="accordion-item form-details last-form-detail">
                                        <div id="flush-collapseOne" class="accordion-collapse collapse form-body-space pb-0"
                                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                            {{__('setting.disclaimer_content')}}
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

@push('scripts')
    <script>
        $(document).ready(function () {
            $('#contact-form').validate({
                rules: {
                    name: { required: true, minlength: 2, maxlength: 100 },
                    email: { required: true, email: true },
                    mobile_no: { digits: true, minlength: 10, maxlength: 10 },
                    message: { required: true, minlength: 5, maxlength: 250 }
                },
                messages: {
                    name: {
                        required: "Please enter your full name",
                        minlength: "Name must have at least 2 characters",
                        maxlength: "Name must not exceed 100 characters"
                    },
                    email: {
                        required: "Please enter your email",
                        email: "Enter a valid email"
                    },
                    mobile_no: {
                        digits: "Only numbers are allowed",
                        minlength: "Mobile number must be exactly 10 digits",
                        maxlength: "Mobile number must be exactly 10 digits"
                    },
                    message: {
                        required: "Please enter your message",
                        minlength: "Message must have at least 5 characters",
                        maxlength: "Message must not exceed 250 characters"
                    }
                },
                errorPlacement: function (error, element) {
                    error.insertAfter(element);
                },
                submitHandler: function (form, event) {
                    event.preventDefault();

                    const formData = new FormData(form);

                    $.ajax({
                        url: "{{ route('contact_send') }}",
                        type: 'POST',
                        data: formData,
                        processData: false,
                        contentType: false,
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        success: function (response) {
                            if (response.status) {
                                // Fill the alert text with success message from server
                                $('#success-message').text(response.message);

                                // Show the success message section with fade-in effect
                                $('#message-section')
                                    .fadeIn();

                                // Reset the form
                                $('#contact-form')[0].reset();

                                // Hide message after 3 seconds
                                setTimeout(function () {
                                    $('#message-section').fadeOut();
                                }, 3000);
                            } else {
                                alert("Something went wrong. Please try again.");
                            }
                        },
                        error: function (xhr) {
                            let message = "An error occurred.";
                            if (xhr.status === 400 || xhr.status === 422) {
                                const errors = xhr.responseJSON?.error || xhr.responseJSON?.errors;
                                if (typeof errors === 'object') {
                                    message = Object.values(errors).flat().join("\n");
                                } else {
                                    message = errors || "Invalid input.";
                                }
                            } else if (xhr.status === 401) {
                                message = "Unauthorized action.";
                            } else if (xhr.status === 500) {
                                message = "Internal server error. Please try again later.";
                            }
                            alert(message);
                        }
                    });
                }
            });
        });
    </script>
@endpush