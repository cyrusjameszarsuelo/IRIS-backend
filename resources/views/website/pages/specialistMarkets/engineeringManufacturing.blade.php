@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Engineering & Manufacturing</p>
        <h1>Engineering & Manufacturing</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Engineering & Manufacturing</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>Today, most Engineering & Manufacturing sectors are thriving. In many areas of these sectors, the
                        demand for well-qualified, skilled professionals outstrips supply and some recruiters find that
                        they have hard-to-fill vacancies. We have built our reputation in providing reliable and
                        responsible recruitment services through the delivery of highly qualified Engineering &
                        Manufacturing professionals, helping organisations meet their business goals.</p>
                    <p>Within Engineering, we recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Mechanical Engineering</li>
                        <li>Electrical Engineering</li>
                        <li>Electronics Engineering</li>
                        <li>Chemical &amp; Process Engineering</li>
                        <li>Automotive</li>
                        <li>Maintenance</li>
                        <li>Engineering Design &amp; Draughts</li>
                        <li>Health &amp; Safety</li>
                        <li>Project Management</li>
                        <li>Contract Management and Administration</li>
                        <li>Oil, Gas and Mining</li>
                        <li>Environmental</li>
                    </ul>
                    <p>Within Manufacturing, we recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Operations Management</li>
                        <li>Production Management &amp; Planning</li>
                        <li>Quality Control</li>
                        <li>Factory / Floor Management</li>
                        <li>Workshop</li>
                        <li>Waste Management</li>
                        <li>Toolmaking &amp; Machine Operations</li>
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