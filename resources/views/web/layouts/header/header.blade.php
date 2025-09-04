    <!-- header start -->
    <header class="web-background">
        <div class="container">
            <nav class="navbar theme-bg-FEDF53 navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="javascript:void(0)">
                    <div class="nav-logo d-flex align-items-center">
                        <img src="./assets/image/nav-image.png" alt="nav logo" class="img-fluid logo-image">
                        RTO EXAM
                    </div>
                </a>
                <button class="navbar-toggler nav-show" type="button" data-bs-toggle="collapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <i class="fa-solid fa-xmark nav-close nav-show"></i>
                    <ul class="navbar-nav nav ms-auto align-items-lg-center mb-2 mb-lg-0">

                        <li class="nav-item">
                            <a class="nav-link fs-18px  p-0 fw-300 theme-color-161616 {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                href="./">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-18px p-0 fw-300 theme-color-161616 {{ request()->is('questionbank') ? 'active' : '' }}"                            
                                href="./questionbank">Question Bank</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-18px p-0 fw-300 theme-color-161616 {{ request()->is('exam') ? 'active' : '' }}"                             
                            href="./exam">Exam</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-18px p-0 fw-300 theme-color-161616  {{ request()->is('setting') ? 'active' : '' }}" 
                            href="./setting">Setting & Help</a>
                        </li>

                        <div class="language ">
                            <select id="langselect" class="form-select" style="width: 100%;">
                                <option value="eng">English</option>
                                <option value="guj">Gujrati</option>
                            </select>
                        </div>
                </div>
            </nav>
        </div>
    </header>
    <!-- header end -->
