@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> BPO</p>
        <h1>BPO</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">BPO</h1>
                    <div class="bg-primary mb-5" style="width: 50px; height: 4px;"></div>
                    <p>Business Process Outsourcing (BPO) has been one of the Country’s top income earners. The
                        Philippines being the third largest English speaking Country is filled with talented and
                        ambitious professionals wanting to make a mark in the international scene through international
                        companies investing in the Philippines.</p>
                    <p>Your back office operations are the heart of your business. These are the functions which happen
                        behind the scenes and the smooth running of your business is dependent on these processes. This
                        is very crucial and needs a lot of attention.</p>
                    <p>We have been trained to recruit the best whether you need financial, technical, medical, sales or
                        business development people, we can immediately fill your requirements with suitable, qualified
                        and hard working industry professionals.</p>
                    <p>Within this sector, we recruit into the following areas:</p>
                    <ul>
                        <li>Customer Service Representatives</li>
                        <li>Technical Support Representatives</li>
                        <li>Multi-lingual CSRs</li>
                        <li>Medical Transcriptionists</li>
                        <li>Back-office Support Representatives</li>
                        <li>Quality Assurance Support Professionals</li>
                        <li>Team Leaders / Managers</li>
                        <li>Account Managers</li>
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