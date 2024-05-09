@extends('website.main')
@section('page-title')
    CANDIDATES - 
@endsection
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Candidates</p>
        <h1>Candidates</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container candidates py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-4 pe-lg-0 wow fadeIn d-flex align-items-center justify-content-center"
                style="min-height: 400px;" data-wow-delay="0.8s">
                <img class="img-fluid" src="{{ asset('website/images/candidates/candidates-1.jpg')}}"
                    style="object-fit: cover;" alt="">

            </div>
            <div class="col-lg-5 candidates-text py-5 wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Candidates</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p class="mb-4 "> At <strong> i21recruitment </strong> , we treat Candidates as we would like to be
                        treated. </p>
                    <p>Our aim is to build a good relationship and find out exactly what you are looking for in your
                        next move and ensuring that your next move is the right one and for the right reasons, as well
                        as being a good cultural and technical fit.</p>
                    <p>We also endeavour to help prepare you for your interviews with our knowledge about the role, the
                        company, their vision and benefits.</p>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn d-flex align-items-start justify-content-center" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.featuredArticle')
            </div>
        </div>

    </div>
</div>



@endsection('website-content')