@extends('website.main')
@section('page-title')
    CLIENTS - 
@endsection
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Clients</p>
        <h1>Clients</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-4 pe-lg-0 wow fadeIn d-flex align-items-center justify-content-center"
                style="min-height: 400px;" data-wow-delay="0.8s">
                <img class="img-fluid" src="{{ asset('website/images/clients/clients-1.png')}}"
                    style="object-fit: cover;" alt="">

            </div>
            <div class="col-lg-5 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Clients</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p class="mb-4 "> At <strong> i21recruitment</strong>, we treat Clients as we would like to be
                        treated. </p>
                    <p>Our aim is to build a good relationship and find out exactly what your organization is looking
                        for and how we can help with as little disruption to your core business.</p>
                    <p>Staff are key to the continued growth and success of a Company, with staff retention being one of
                        the biggest problems. We take time to understand your business, culture and philosophy to
                        determine which Candidates would be best suited from a technical and cultural fit to alleviate
                        this issue - by helping you to grow your Company.</p>
                    <p>We then identify, attract and screen suitable Candidates to enable you to take your business
                        forward. We can provide assessments, tailored to your organization, if required. We ensure that
                        our Candidates are prepared for their interviews with knowledge of your Company, the role, the
                        benefits and Company culture.</p>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn d-flex align-items-start justify-content-center"
                style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.featuredArticle')
            </div>
        </div>

    </div>
</div>



@endsection('website-content')