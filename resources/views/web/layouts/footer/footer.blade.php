<!-- footer section start -->
<footer>
    <div class="footer-section">
        <div class="container">
            <div class="footer-info">
                <div class="row justify-content-center justify-content-xl-start">
                    <div class="col-xxl-4 col-12">
                        <div class="footer-content text-center text-lg-start my-3 my-lg-4 ">
                            <div class="footer-logo">
                                <img src="assets/image/footer-logo.png" alt="footer-logo" class="img-fluid">
                            </div>
                            <p class="my-3 my-lg-4 theme-color-fff fs-18px fw-300"><b
                                    style="color: #fedf53;">{{ __('footer.disclaimer_title') }}</b>
                                {{ __('footer.disclaimer_text') }}
                            </p>
                            <div class="footer-social-media">
                                <a href="javascript:void(0)"><i class="fa-brands fa-square-facebook"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-youtube"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-whatsapp"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-instagram"></i></a>
                                <a href="javascript:void(0)"><i class="fa-brands fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-8 col-12">
                        <div class="row">
                            <div class="col-6 col-md-3">
                                <div class="footer-nav">
                                    <h4 class="mb-2 mb-lg-3 theme-color-FEDF53">{{ __('footer.navigation') }}</h4>
                                    <ul class="footer-navigation mb-0">
                                        <li><a href="{{route('questionbank') }}">{{ __('footer.nav_qbank') }}</a></li>
                                        <li><a href="{{route('exam') }}">{{ __('footer.nav_exam') }}</a></li>
                                        <li><a href="{{route('setting') }}">{{ __('footer.nav_setting') }}</a></li>
                                        <li><a href="{{route('setting') }}">{{ __('footer.nav_contact') }}</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-6 col-md-3">
                                <div class="contact-info">
                                    <h4 class="mb-2 mb-lg-3 theme-color-FEDF53">{{ __('footer.contact') }}</h4>
                                    <ul class="contact-us mb-0">
                                        <li><a href="javascript:void(0)">+91 8200362945</a></li>
                                        <li><a href="javascript:void(0)">rtoexam@gmail.com</a></li>
                                        <li><a href="javascript:void(0)">Portfolio-rto.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="information-info mb-0">
                                    <h4 class="mb-3 mb-lg-4 theme-color-FEDF53">{{ __('footer.latest_info') }}</h4>
                                    <div class="postion-reletive w-75 w-md-auto">
                                        <form class="footer-form" name="footer-form" id="footer-form">
                                            @csrf
                                            <input type="email" name="email" class="footer-input theme-color-fff"
                                                placeholder="{{ __('footer.placeholder_email') }}" required>

                                            <button type="submit"
                                                class="position-absolute top-0 end-0 bottom-0 border-0">
                                                <i class="fa-solid fa-arrow-right fs-4 theme-color-fff"></i>
                                            </button><br>

                                        </form>
                                        <div id="form-feedback" class="mt-2"></div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="copyright d-flex justify-content-lg-start justify-content-center">
                        <p class="theme-color-fff fs-18px mb-0 fw-300">Copyright© {{ date('Y') }} RTO Exam. All Rights
                            Reserved.</p>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="privacy d-flex justify-content-lg-end justify-content-center">
                        <a href="javascript:void(0)" class="theme-color-fff fw-300 fs-18px">
                            {{ __('footer.privacy') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer section end -->

<!-- back to top button start -->
<div class="scroll-up fs-18px" style="opacity: 1;">
    <i class="fa-solid fa-arrow-up"></i>
</div>
<!-- back to top button end -->

 @push('scripts')
<script>
    $(document).ready(function () {
        $('#footer-form').validate({
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email format"
                }
            },

            errorPlacement: function (error, element) {
                $('#form-feedback').html('<div class="text-danger">' + error.text() + '</div>');
            },

            submitHandler: function (form, event) {
                event.preventDefault();

                const formData = new FormData(form);

                $.ajax({
                    url: "{{ route('newsletter_store') }}",
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    success: function (response) {
                        if (response.status) {
                            $('#form-feedback').html('<div class="alert alert-success">' + response.message + '</div>');
                            $('#footer-form')[0].reset();

                            setTimeout(function () {
                                $('#form-feedback').fadeOut();
                            }, 3000);
                        } else {
                            $('#form-feedback').html('<div class="text-danger">Something went wrong. Please try again.</div>');
                        }
                    },
                    error: function (xhr) {
                        let message = "An error occurred.";
                        if (xhr.status === 400 || xhr.status === 422) {
                            const errors = xhr.responseJSON?.error || xhr.responseJSON?.errors;
                            if (typeof errors === 'object') {
                                message = Object.values(errors).flat().join("<br>");
                            } else {
                                message = errors || "Invalid input.";
                            }
                        } else if (xhr.status === 401) {
                            message = "Unauthorized action.";
                        } else if (xhr.status === 500) {
                            message = "Internal server error. Please try again later.";
                        }
                        $('#form-feedback').html('<div class="text-danger">' + message + '</div>');
                    }
                });
            }
        });

        // 🧹 Clear messages on typing
        $('#footer-form input').on('input focus', function () {
            $('#form-feedback').html('');
        });
    });
</script>
@endpush
