@extends('web.layouts.master')

@section('title', 'QuestionBank')

@section('content')

    <!-- question answer section start -->
    <section class="sub-sections question-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="exam-test-content">
                        <h1 class="theme-color-fff">{{ __('questionbank.title') }}</h1>
                        <p class="fs-20px fw-300 mb-0">{{ __('questionbank.subtitle') }}</p>
                    </div>
                </div>
            </div>    </div>
    </section>

    <section class="sub-section">
        <div class="container">
            <div class="row g-3">
                <div class="col-12">
                    <ul class="nav nav-pills nav-fill gap-3 mb-5 question-nav" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-700" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="pills-home" aria-selected="true">{{ __('questionbank.questions_tab') }}</button>
                        </li>
                        <li class="nav-item nav-secont-item" role="presentation">
                            <button class="nav-link sign-link traffic-content-space" id="profile-tab" data-bs-toggle="tab"
                                data-bs-target="#profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="true">{{ __('questionbank.signs_tab') }}</button>
                        </li>
                    </ul>

                    <div class="tab-content question-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active question-tab-info" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="scroll-container" style="height:650px; overflow-y:auto; ">
                                <div class="row g-4" id="questionContainer">
                                    <!-- Questions will be loaded dynamically here -->
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane traffic-sign-tab fade" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="scroll-container-signs" style="height:605px; overflow-y:auto;">
                                <div class="row g-4" id="signsContainer">
                                    <!-- Signs will be loaded dynamically here -->
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

@push('scripts')
    <script>
        $(document).ready(function () {
            let offsetQ = 0;
            let loadingQ = false;
            let endReachedQ = false;

            let offsetS = 0;
            let loadingS = false;
            let endReachedS = false;

            let language = $("#langselect").val();

            function loadQuestions() {
                if (loadingQ || endReachedQ) return;

                $.ajax({
                    url: "{{ route('loadQuestions') }}",
                    method: "POST",
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data: { offset: offsetQ, lang: language },
                    dataType: "json",
                    beforeSend: function () { loadingQ = true; },
                    success: function (res) {
                        if (res.count > 0) {
                            $("#noDataMsg").remove(); // Remove placeholder
                            $("#questionContainer").append(res.html);
                            offsetQ += res.count;
                        } else {
                            endReachedQ = true;
                            const noMoreMsg = $('<div class="col-12 text-center my-3 no-more-msg"><i>{{ __('questionbank.no_more_questions') }}</i></div>');
                            $("#questionContainer").append(noMoreMsg);

                            setTimeout(function () {
                                noMoreMsg.fadeOut(500);
                            }, 2000);

                        }
                        loadingQ = false;
                    },
                    error: function (xhr, status, error) {
                        console.error("AJAX error:", error);
                        loadingS = false;
                    }
                });
            }

            function loadSigns() {
                if (loadingS || endReachedS) return;

                $.ajax({
                    url: "{{ route('loadSigns') }}",
                    method: "POST",
                    headers: { 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    data: { offset: offsetS, lang: language },
                    dataType: "json",
                    beforeSend: function () { loadingS = true; },
                    success: function (res) {
                        if (res.count > 0) {
                            $("#noDataMsgSigns").remove();
                            $("#signsContainer").append(res.html);
                            offsetS += res.count;
                        } else {
                            endReachedS = true;
                            const noMoreMsg = $('<div class="col-12 text-center my-3 no-more-msg"><i>{{ __('questionbank.no_more_signs') }}</i></div>');
                            $("#signsContainer").append(noMoreMsg);

                            setTimeout(function () {
                                noMoreMsg.fadeOut(500);
                            }, 2000);
                        }
                        loadingS = false;
                    },
                    error: function (xhr, status, error) {
                        console.error("Error:", error);
                        loadingS = false;
                    }
                });
            }

            // Initial load
            loadQuestions();
            loadSigns();

            // Scroll for questions
            $(".scroll-container").on("scroll", function () {
                let $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= this.scrollHeight - 100) {
                    loadQuestions();
                }
            });

            // Scroll for signs
            $(".scroll-container-signs").on("scroll", function () {
                let $this = $(this);
                if ($this.scrollTop() + $this.innerHeight() >= this.scrollHeight - 70) {
                    loadSigns();
                }
            });
        });

    </script>
@endpush