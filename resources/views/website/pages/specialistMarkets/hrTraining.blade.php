@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> HR & Training</p>
        <h1>HR & Training</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">HR & Training</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>HR & Training is a large sector that spans numerous industries. This sector is a widely
                        recognised key function in driving businesses forward and influencing business strategies.</p>
                    <p>Within HR and Training, we recruit into the following areas:</p>
                    <ul>
                        <li>HR Director</li>
                        <li>HR Manager</li>
                        <li>HR Business Partner</li>
                        <li>HR Assistant</li>
                        <li>Onboarding&nbsp;Administrator</li>
                        <li>Employee Relations</li>
                        <li>Recruitment &amp; Resourcing</li>
                        <li>Change Management</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.specialistMarketsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')