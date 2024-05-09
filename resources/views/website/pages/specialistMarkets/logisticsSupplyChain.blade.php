@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Specialist Markets <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Logistics & Supply Chain</p>
        <h1>Logistics & Supply Chain</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Logistics & Supply Chain</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>In this fast-paced world, we need qualified and experience Logistics professionals to bring us
                        closer to desired products and services. We are in constant communication with players in the
                        industry and we can bring you the right and the most suitable candidates for your recruitment in
                        Logistics. </p>
                    <p>Within Logistics, we recruit into the following sub-sectors:</p>
                    <ul>
                        <li>Logistics Administration and Analysis</li>
                        <li>Supply Chain Manager</li>
                        <li>Air Freight / Aviation</li>
                        <li>Ocean Freight / Marine</li>
                        <li>Fleet Operations</li>
                        <li>Customs Brokerage</li>
                        <li>Freight Agent / Broker</li>
                        <li>Inventory Manager</li>
                        <li>Shipping / Receiving</li>
                        <li>Loss Prevention Specialist</li>
                        <li>Materials Handler</li>
                        <li>Warehouse Manager / Leader</li>
                        <li>Purchasing / Procurement</li>
                        <li>Quality Control</li>
                        <li>Safety</li>
                        <li>Intermodal Operations</li>
                        <li>Carrier, Cargo and Freight Sales</li>
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