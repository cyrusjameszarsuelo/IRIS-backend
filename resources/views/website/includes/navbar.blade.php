<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg navbar-light sticky-top nav-pad">
    <div class="container">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <img src="{{ asset('website/images/i21rec.png') }}" class="img-fluid">
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <!-- <a href='#home' class="nav-item nav-link active">Home</a>
                <a href='#jobs' class="nav-item nav-link">Jobs</a>
                <a data-scroll href="#news" class="nav-item nav-link">News</a>
                <a data-scroll href="#specialist-markets" class="nav-item nav-link">Specialist Markets</a>
                <a data-scroll href="#contact-us" class="nav-item nav-link">Contact Us</a> -->
                <a class="nav-item nav-link active" id="link-home" href="/">Home</a>
                <a class="nav-item nav-link" id="link-jobs">Jobs</a>
                <a class="nav-item nav-link" id="link-news" href="/">News</a>
                <a class="nav-item nav-link" id="link-specialistMarkets" href="/">Specialist Markets</a>
                <a class="nav-item nav-link" id="link-contact" href="/">Contact Us</a>
            </div>
            <div class="h-100 d-lg-inline-flex align-items-center d-flex register-login-btn">
                <a href="/login"><i class="fa fa-user" style="margin-right:5px;"></i> Register / Login</a>
            </div>
        </div>
    </div>
</nav>
<!-- Navbar End -->