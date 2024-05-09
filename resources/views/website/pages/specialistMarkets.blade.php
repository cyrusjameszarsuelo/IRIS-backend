@extends('website.main')
@section('page-title')
    SPECIALIST MARKETS - 
@endsection
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets </p>
        <h1>Specialist Markets</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container specilistMarkets-main py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 specilistMarkets-main-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 text-center">Specialist Markets</h1>
                    <div class="bg-primary mb-5 mx-auto" style="width: 80px; height: 4px;"></div>
                    <p class="mb-4 "><strong>i21recruitment </strong> recruits within a number of specific sectors.</p>
                    <p>These includes:</p>
                    <ul class="specialistMarkets-list">
                        <div class="row">
                            <div class="col-lg-6">
                                <li><img src="{{ asset ('website/images/icons/sm-1.png') }} "> IT & Telecoms</li>
                                <li><img src="{{ asset ('website/images/icons/sm-2.png') }} "> Sales & Marketing</li>
                                <li><img src="{{ asset ('website/images/icons/sm-3.png') }} "> Accounts & Finance</li>
                                <li><img src="{{ asset ('website/images/icons/sm-4.png') }} "> HR & Training</li>
                            </div>
                            <div class="col-lg-6">
                                <li><img src="{{ asset ('website/images/icons/sm-5.png') }} "> Engineering & Manufacturing</li>
                                <li><img src="{{ asset ('website/images/icons/sm-6.png') }} "> Logistics & Supply Chain</li>
                                <li><img src="{{ asset ('website/images/icons/sm-7.png') }} "> BPO</li>
                            </div>
                        </div>
                    </ul>
                    <p>Our Consultants have diverse backgrounds and are able to deal with specific sectors, ensuring they are up-to-date with their market place and latest trends. They are regularly monitored and continually trained, ensuring that we have the best to recruit the best!</p>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn d-flex align-items-start justify-content-center" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.featuredArticle')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')
