@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Accounts & Finance</p>
        <h1>Accounts & Finance</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Accounts & Finance</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>The world of Accounts & Finance can be a daunting one. We offer a complete accounting and
                        financial recruitment service at all levels. Whatever your requirements, high-calibre
                        professionals can be sourced from Accounts Assistants to Chief Financial Officers.</p>
                    <p>We recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Accountancy</li>
                        <li>Finance Management &amp; Controllership</li>
                        <li>Accounts Administration &amp; Management</li>
                        <li>Purchase Ledger &amp; Bookkeeping</li>
                        <li>Auditing, Tax &amp; Cost Accounting</li>
                        <li>Compliance</li>
                        <li>Payroll Management</li>
                        <li>Insolvency</li>
                        <li>Treasury, Fund Administration &amp; Management</li>
                        <li>Banking &amp; Project Management</li>
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