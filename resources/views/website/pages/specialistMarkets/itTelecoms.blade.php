@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> IT & Telecoms</p>
        <h1>IT & Telecoms</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">IT & Telecoms</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>IT & Telecoms are our forte. We have a proven track record in finding the right people in this
                        area. Be they CTOs, Solutions Architects or Web/Android Developers, we have the resources and
                        the skills to find the people you need.</p>
                    <p>As the use of IT & Telecommunications is the key driver of business competitiveness, we have a
                        specialist team of Consultants in place to focus on this sector.</p>
                    <p>Within IT, we recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Software &amp; Systems Development</li>
                        <li>Web Development &amp; Design</li>
                        <li>Database Development &amp; Administration</li>
                        <li>Niche IT roles i.e. Hyperion, Sharepoint, Salesforce, etc.</li>
                        <li>Networking &amp; Systems Administration</li>
                        <li>Helpdesk / Support</li>
                        <li>Business Analysis &amp; Project Management</li>
                        <li>IT Security</li>
                        <li>IT Trainers</li>
                        <li>Mobile Development</li>
                    </ul>
                    <p>Within Telecoms, we recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Telephony (VoIP, PBX systems, including:&nbsp; Avaya, Mitel,
                            Ericsson, Cisco and other related products)</li>
                        <li>Systems Analysis &amp; Solutions Architecture</li>
                        <li>Installations &amp; Commissioning</li>
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