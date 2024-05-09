@extends('website.main')
@section('page-title')
    HOME - 
@endsection
@section('website-content')
    <div class="container-fluid p-0 pb-5 home-slider" id="home-container"
        style="background: url( {{ asset('website/images/banner.png') }} )">

    </div>
    <!-- Carousel Start -->
    <!-- <div class="container-fluid p-0 pb-5 home-slider" id="home-container">
                <div class="owl-carousel header-carousel position-relative" id="home">
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('website/images/slider1.png') }}" alt="">
                        <div class="carousel-inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10 text-center">
                                        <h1 class="display-3 text-white animated slideInDown mb-4">RECRUITMENT AS IT SHOULD BE</h1>
                                        <h2 class="mb-4 pb-2">TRIED <i class="fa fa-minus" aria-hidden="true"></i> TESTED <i
                                                class="fa fa-minus" aria-hidden="true"></i> EFFECTIVE</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('website/images/slider2.png') }}" alt="">
                        <div class="carousel-inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10 text-center">
                                        <h1 class="display-3 text-white animated slideInDown mb-4">RECRUITMENT AS IT SHOULD BE</h1>
                                        <h2 class="mb-4 pb-2">TRIED <i class="fa fa-minus" aria-hidden="true"></i> TESTED <i
                                                class="fa fa-minus" aria-hidden="true"></i> EFFECTIVE</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-carousel-item position-relative">
                        <img class="img-fluid" src="{{ asset('website/images/slider3.png') }}" alt="">
                        <div class="carousel-inner">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-12 col-lg-10 text-center">
                                        <h1 class="display-3 text-white animated slideInDown mb-4">RECRUITMENT AS IT SHOULD BE</h1>
                                        <h2 class="mb-4 pb-2">TRIED <i class="fa fa-minus" aria-hidden="true"></i> TESTED <i
                                                class="fa fa-minus" aria-hidden="true"></i> EFFECTIVE</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center">
                <h1 class="display-5">ABOUT US</h1>
                <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
            </div>
            <div class="mb-5" style="text-align:justify">
                <p>i21recruitment is a division of Indigo 21 Ltd, specializing in placing Candidates into various sectors of
                    industry. We pride ourselves on providing a high quality service to Candidates and Clients alike. We
                    feel we have the right approach and are able to meet specific needs by providing tailor-made solutions.
                    Our services are effective and targeted, with our teams of Consultants specializing within particular
                    industry sectors. They are able to identify, attract, screen and recommend qualified Candidates into
                    specific roles within the Candidates field.</p>
                <p>If you want to find out more on how i21recruitment can help your Company recruit or if you are looking
                    for your next move then please do not hesitate to contact us.</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="slider specialist-markets-slider">
                        <div class="owl-carousel specialist-markets-carousel">
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/candidates.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>CANDIDATES</b></h5>
                                <p class="text-center mb-0 p-4">At i21recruitment, we treat Candidates as we would like to
                                    be treated.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/candidates"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                                </div>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/specialist-markets.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>SPECIALIST MARKETS</b></h5>
                                <p class="text-center mb-0 p-4">i21recruitment provides a range of services to a number of
                                    specific sectors.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/specialist-markets"><i class="fa fa-arrow-right me-3"></i>Read
                                        More</a>
                                </div>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/clients.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>CLIENTS</b></h5>
                                <p class="text-center mb-0 p-4">At i21recruitment, we treat Clients as we would like to be
                                    treated.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/clients"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                                </div>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/candidates.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>CANDIDATES</b></h5>
                                <p class="text-center mb-0 p-4">At i21recruitment, we treat Candidates as we would like to
                                    be treated.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/candidates"><i class="fa fa-arrow-right me-3"></i>Read
                                        More</a>
                                </div>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/specialist-markets.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>SPECIALIST MARKETS</b></h5>
                                <p class="text-center mb-0 p-4">i21recruitment provides a range of services to a number of
                                    specific sectors.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/specialist-markets"><i
                                            class="fa fa-arrow-right me-3"></i>Read More</a>
                                </div>
                            </div>
                            <div class="slider-card">
                                <div class="d-flex justify-content-center align-items-center mb-4">
                                    <img src="{{ asset('website/images/clients.png') }}" alt="">
                                </div>
                                <h5 class="mb-0 text-center"><b>CLIENTS</b></h5>
                                <p class="text-center mb-0 p-4">At i21recruitment, we treat Clients as we would like to be
                                    treated.</p>
                                <div class="sm-btn-container pb-4">
                                    <a class="btn" href="/clients"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="row g-0 service-row">
                <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4"
                            style="width: 180px; height: 180px; margin: auto;">
                            <img class="img-fluid" src="{{ asset('website/images/candidates.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">CANDIDATES</h4>
                        <p class="mb-4">At i21recruitment, we treat Candidates as we would like to be treated.</p>
                        <a class="btn" href="/candidates"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4"
                            style="width: 180px; height: 180px; margin: auto;">
                            <img class="img-fluid" src="{{ asset('website/images/specialist-markets.png') }}"
                                alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">SPECIALIST MARKETS</h4>
                        <p class="mb-4">i21recruitment provides a range of services to a number of specific sectors.</p>
                        <a class="btn" href="/specialist-markets"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square bg-light rounded-circle mb-4"
                            style="width: 180px; height: 180px; margin: auto;">
                            <img class="img-fluid" src="{{ asset('website/images/clients.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">CLIENTS</h4>
                        <p class="mb-4">At i21recruitment, we treat Clients as we would like to be treated.</p>
                        <a class="btn" href="/clients"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- About End -->

    <!-- Career Start -->
    <div class="container-fluid py-5 career-section"
        style="background-image:url({{ asset('website/images/career.png') }});">
        <div class="container">
            <div class="career-inner">
                <h1>CONNECTING YOU TO BETTER OPPORTUNITIES</h1>
                <p class="mb-3">Our Specialist Consultants will contact you immediately after a match with one or more of
                    our vacancies.</p>
                <div class="career-btn">
                    <a href="">LATEST JOBS</a>
                    <a href="">UPLOAD YOUR CV NOW</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Career End -->

    <!-- Jobs Start -->
    <div class="container-fluid py-5 bg-light" id="jobs">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">LATEST JOBS</h1>
                <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
            </div>
            <div class="row mb-5">

            </div>
        </div>
    </div>
    <!-- Jobs End -->

    <!-- Job Tips Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="display-5">JOB TIPS</h1>
                <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
            </div>
            <div class="row g-0 service-row">
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square rounded-circle mb-4 m-auto" style="width: 85px; height: 85px;background:#002027;">
                            <img class="img-fluid" src="{{ asset('website/images/icons/job.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">Job Hunting</h4>
                        <p class="mb-4">The most successful jobseekers are people who are persistent in their search and know all
                            the
                            places to look for work. There are a number of ways you can search for jobs, including
                            online.</p>
                        <a class="btn" href="/job-tips/job-hunting"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.3s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square rounded-circle mb-4 m-auto" style="width: 85px; height: 85px;background:#002027;">
                            <img class="img-fluid" src="{{ asset('website/images/icons/interview-preparation.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">Interview Preparation</h4>
                        <p class="mb-4">Not only will you have a better idea of what you are potentially letting yourself in for,
                            but
                            it provides you with ammunition to drop into either your answers, or your questions at
                            the
                            end of the interview.</p>
                        <a class="btn" href="/job-tips/interview-preparation"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            <div class="row g-0 service-row">
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square rounded-circle mb-4 m-auto" style="width: 85px; height: 85px;background:#002027;">
                            <img class="img-fluid" src="{{ asset('website/images/icons/cv-check.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">CV Check</h4>
                        <p class="mb-4">A good CV is essential when looking for work and it is worth spending time getting it
                            right so that it is a true representation of your skills and experience to make it
                            potentially enticing for an employer to want to interview you.</p>
                        <a class="btn" href="/job-tips/cv-check"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="service-item border h-100 p-5">
                        <div class="btn-square rounded-circle mb-4 m-auto" style="width: 85px; height: 85px;background:#002027;">
                            <img class="img-fluid" src="{{ asset('website/images/icons/interview-questions.png') }}" alt="Icon">
                        </div>
                        <h4 class="mb-3 text-white">Interview Questions</h4>
                        <p class="mb-4">Below is a list of questions, some of which will come up in the interview, others that
                            may
                            not. There are no penalties for over-preparation though, so it is important that you
                            have
                            put some thought into how you will answer all of them.</p>
                        <a class="btn" href="/job-tips/interview-questions"><i class="fa fa-arrow-right me-3"></i>Read More</a>
                    </div>
                </div>
            </div>
            {{-- <div class="row g-0">
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <a href="/job-tips/job-hunting">
                        <div class="row jobtips-content animated slideInLeft">
                            <div class="col-3 col-md-3 col-lg-3 wow fadeIn" data-wow-delay="0.2s">
                                <div class="jobtip-icon">
                                    <img src="{{ asset('website/images/icons/job.png') }}"
                                        class="img-responsive img-fluid" alt="" />
                                </div>
                            </div>
                            <div class="col-8 col-md-8 col-lg-8">
                                <h4>Job Hunting</h4>
                                <p>The most successful jobseekers are people who are persistent in their search and know all
                                    the
                                    places to look for work. There are a number of ways you can search for jobs, including
                                    online.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/job-tips/cv-check">
                        <div class="row jobtips-content animated slideInLeft">
                            <div class="col-3 col-md-3 col-lg-3">
                                <div class="jobtip-icon">
                                    <img src="{{ asset('website/images/icons/cv-check.png') }}"
                                        class="img-responsive img-fluid" alt="" />
                                </div>
                            </div>
                            <div class="col-8 col-md-8 col-lg-8 wow fadeIn" data-wow-delay="0.3s">
                                <h4>CV Check</h4>
                                <p>A good CV is essential when looking for work and it is worth spending time getting it
                                    right so that it is a true representation of your skills and experience to make it
                                    potentially enticing for an employer to want to interview you.</p>
                            </div>

                        </div>
                    </a>
                </div>
                <div class="col-md-12 col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <a href="/job-tips/interview-preparation">
                        <div class="row jobtips-content animated slideInRight">
                            <div class="col-3 col-md-3 col-lg-3">
                                <div class="jobtip-icon">
                                    <img src="{{ asset('website/images/icons/interview-preparation.png') }}"
                                        class="img-responsive img-fluid" alt="" />
                                </div>
                            </div>
                            <div class="col-8 col-md-8 col-lg-8 wow fadeIn" data-wow-delay="0.3s">
                                <h4>Interview Preparation</h4>
                                <p>Not only will you have a better idea of what you are potentially letting yourself in for,
                                    but
                                    it provides you with ammunition to drop into either your answers, or your questions at
                                    the
                                    end of the interview.</p>
                            </div>
                        </div>
                    </a>
                    <a href="/job-tips/interview-questions">
                        <div class="row jobtips-content animated slideInRight">
                            <div class="col-3 col-md-3 col-lg-3">
                                <div class="jobtip-icon">
                                    <img src="{{ asset('website/images/icons/interview-questions.png') }}"
                                        class="img-responsive img-fluid" alt="" />
                                </div>
                            </div>
                            <div class="col-8 col-md-8 col-lg-8 wow fadeIn" data-wow-delay="0.3s">
                                <h4>Interview Questions</h4>
                                <p>Below is a list of questions, some of which will come up in the interview, others that
                                    may
                                    not. There are no penalties for over-preparation though, so it is important that you
                                    have
                                    put some thought into how you will answer all of them.</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div> --}}
        </div>
    </div>
    <!-- Job Tips End -->

    <!-- Latest News Start -->
    <div class="container-fluid py-5 bg-light" id="news">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">LATEST NEWS</h1>
                <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-4 col-md-6 specialist-item wow fadeInUp mb-3">
                    <div class="specialist-inner">
                        <div class="card news-card">
                            <img class="card-img-top img-fluid"
                                src="{{ asset('website/images/specialistMarkets/engineer.jpg') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">Filipinos are happiest employees in Southeast Asia: survey </h5>
                                <div class="bg-primary mb-2 mx-auto" style="width: 80px; height: 2px;"></div>
                                <p class="card-text">MANILA (UPDATE) - Filipino employees are the happiest in Southeast
                                    Asia
                                    and their positive attitude is likely to boost the economy, results of a Jobstreet.com
                                    survey released Wednesday showed. The Philippines topped the seven-nation "Happiness
                                    Index" with...
                                </p>
                                <a class="readmore-btn btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 specialist-item wow fadeInUp mb-3">
                    <div class="specialist-inner">
                        <div class="card news-card">
                            <img class="card-img-top img-fluid"
                                src="{{ asset('website/images/specialistMarkets/logistics.jpg') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title"> Employers in Philippines to ramp up recruitment activities in 2017
                                </h5>
                                <div class="bg-primary mb-2 mx-auto" style="width: 80px; height: 2px;"></div>
                                <p class="card-text">Employers in the Philippines are ramping up their recruitment
                                    activities in 2017, giving jobseekers access to a wide range of career opportunities,
                                    according to the latest annual Global Salary Survey from specialist professional
                                    recruitment firm Robert Wal...</p>
                                <a class="readmore-btn btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 specialist-item wow fadeInUp mb-3">
                    <div class="specialist-inner">
                        <div class="card news-card">
                            <img class="card-img-top img-fluid"
                                src="{{ asset('website/images/specialistMarkets/bpo.jpg') }}" alt="">
                            <div class="card-body">
                                <h5 class="card-title">BPOs cautious on expansion due to Trump </h5>
                                <div class="bg-primary mb-2 mx-auto" style="width: 30px; height: 2px;"></div>
                                <p class="card-text">MANILA - Some American companies have delayed expansion plans in the
                                    Philippines due to caution over the economic policies of US President Donald Trump, the
                                    head of a recruitment website said Wednesday. Expansion projects in Dumaguete, Cebu and
                                    Davao have ...</p>
                                <a class="readmore-btn btn" href="">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News End -->

    <!-- Specialist Markets Start -->
    <div class="container-xxl py-5" id="specialistMarkets">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="display-5">SPECIALIST MARKETS</h1>
                <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
            </div>
            <div class="row mb-5">
                <div class="col-lg-12 col-md-12 specialist-item wow fadeInUp mb-3">
                    <div class="specialist-inner">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist"
                                    aria-orientation="vertical">
                                    <button class="tabs-link active" id="it-telecoms-tab" data-bs-toggle="pill"
                                        data-bs-target="#it-telecoms" type="button" role="tab"
                                        aria-controls="it-telecoms" aria-selected="true">IT & TELECOMS</button>

                                    <button class="tabs-link" id="sales-marketing-tab" data-bs-toggle="pill"
                                        data-bs-target="#sales-marketing" type="button" role="tab"
                                        aria-controls="sales-marketing" aria-selected="false">SALES & MARKETING</button>

                                    <button class="tabs-link" id="account-finance-tab" data-bs-toggle="pill"
                                        data-bs-target="#account-finance" type="button" role="tab"
                                        aria-controls="account-finance" aria-selected="false">ACCOUNTS & FINANCE</button>

                                    <button class="tabs-link" id="hr-training-tab" data-bs-toggle="pill"
                                        data-bs-target="#hr-training" type="button" role="tab"
                                        aria-controls="hr-training" aria-selected="false">HR & TRAINING</button>

                                    <button class="tabs-link" id="engineering-manufacturing-tab" data-bs-toggle="pill"
                                        data-bs-target="#engineering-manufacturing" type="button" role="tab"
                                        aria-controls="engineering-manufacturing" aria-selected="false">ENGINEERING &
                                        MANUFACTURING</button>

                                    <button class="tabs-link" id="logistics-supplychain-tab" data-bs-toggle="pill"
                                        data-bs-target="#logistics-supplychain" type="button" role="tab"
                                        aria-controls="logistics-supplychain" aria-selected="false">LOGISTICS & SUPPLY
                                        CHAIN</button>

                                    <button class="tabs-link" id="bpo-tab" data-bs-toggle="pill" data-bs-target="#bpo"
                                        type="button" role="tab" aria-controls="bpo"
                                        aria-selected="false">BPO</button>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active" id="it-telecoms" role="tabpanel"
                                        aria-labelledby="it-telecoms-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/it.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>IT & TELECOMS</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>IT &amp; Telecoms are our forte. We have a proven track record in finding
                                                    the right people in this area. Be they CTOs, Solutions Architects or
                                                    Web/Android Developers, we have the resources and the skills to find the
                                                    people you need.</p>
                                                <a class="readmore-btn" href="/specialist-markets/it-telecoms">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="sales-marketing" role="tabpanel"
                                        aria-labelledby="sales-marketing-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/sales.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>SALES & MARKETING</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>Sales &amp; Marketing are probably two of the most vital departments in
                                                    any business. The reason why they have so much importance is because the
                                                    success or failure of a Company depends on the effectiveness of its
                                                    Sales &amp; Marketing teams.ources and the skills to find the people you
                                                    need.</p>
                                                <a class="readmore-btn" href="/specialist-markets/sales-marketing">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="account-finance" role="tabpanel"
                                        aria-labelledby="account-finance-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/finance.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>ACCOUNTS & FINANCE</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>The world of Accounts &amp; Finance can be a daunting one. We offer a
                                                    complete accounting and financial recruitment service at all levels.
                                                    Whatever your requirements, high-calibre professionals can be sourced
                                                    from Accounts Assistants to Chief Financial Officers.</p>
                                                <a class="readmore-btn" href="/specialist-markets/accounts-finance">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="hr-training" role="tabpanel"
                                        aria-labelledby="hr-training-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/hr.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>HR & TRAINING</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>HR & Training is a large sector that spans numerous industries. This
                                                    sector is a widely recognised key function in driving businesses forward
                                                    and influencing business strategies.</p>
                                                <a class="readmore-btn" href="/specialist-markets/hr-training">Read
                                                    More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="engineering-manufacturing" role="tabpanel"
                                        aria-labelledby="engineering-manufacturing-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/engineer.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>ENGINEERING & MANUFACTURING</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>Today, most Engineering & Manufacturing sectors are thriving. In many
                                                    areas of these sectors, the demand for well-qualified, skilled
                                                    professionals outstrips supply and some recruiters find that they have
                                                    hard-to-fill vacancies.</p>
                                                <a class="readmore-btn"
                                                    href="/specialist-markets/engineering-manufacturing">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="logistics-supplychain" role="tabpanel"
                                        aria-labelledby="logistics-supplychain-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/logistics.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>LOGISTICS & SUPPLY CHAIN</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>In this fast-paced world, we need qualified and experience Logistics
                                                    professionals to bring us closer to desired products and services. We
                                                    are in constant communication with players in the industry and we can
                                                    bring you the right and the most suitable candidates for your
                                                    recruitment in Logistics.</p>
                                                <a class="readmore-btn"
                                                    href="/specialist-markets/logistics-supply-chain">Read More</a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="tab-pane fade" id="bpo" role="tabpanel" aria-labelledby="bpo-tab">
                                        <div class="row">
                                            <div class="col-lg-5 col-md-12">
                                                <img class="img-fluid mb-3"
                                                    src="{{ asset('website/images/specialistMarkets/bpo.jpg') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-lg-7 col-md-12">
                                                <h3>BPO</h3>
                                                <div class="bg-primary mb-3 " style="width: 80px; height: 2px;"></div>
                                                <p>The Business Process Outsourcing has been one of the Country’s top income
                                                    earners. The Philippines being the third largest English speaking
                                                    Country is filled with talented and ambitious professionals wanting to
                                                    make a mark in the international scene through international companies
                                                    investing in the Philippines.</p>
                                                <a class="readmore-btn" href="/specialist-markets/bpo">Read More</a>
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
    <!-- Specialist Market End -->
@endsection
