@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Sales & Marketing</p>
        <h1>Sales & Marketing</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Sales & Marketing</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>Sales & Marketing are probably two of the most vital departments in any business. The reason why
                        they have so much importance is because the success or failure of a Company depends on the
                        effectiveness of its Sales & Marketing teams.</p>
                    <p>We can ensure that we identify the optimum level of permanent Sales & Marketing staff required
                        for your organization. We guarantee a professional and confidential service delivered to Clients
                        and Candidates at every stage of the recruitment process. Our broad market presence and
                        continual research in the Sales & Marketing industry has allowed our consulting team to source
                        the best Sales & Marketing personnel in the market.</p>
                    <p>We recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Sales</li>
                        <li>Marketing</li>
                        <li>Business Development</li>
                        <li>Account Management</li>
                        <li>Brand Management</li>
                        <li>Field Sales</li>
                        <li>Pre / Post Sales</li>
                        <li>Territory Management</li>
                        <li>Channel Management</li>
                        <li>Product Development</li>
                        <li>Digital Marketing</li>
                        <li>SEO Specialists</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn"
                style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.specialistMarketsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')