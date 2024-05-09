<div class="specialistMarkets-section py-5">
    <div class="specialistMarkets-section-title">
        <h4>Specialist Markets</h4>
    </div>
    <div class="specialistMarkets-section-content">

        @if (!Request::is('specialist-markets/it-telecoms'))
        <div class="specialistMarkets-section-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/it-telecoms"><img src="{{ asset('website/images/specialistMarkets/it.jpg') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/it-telecoms">IT & Telecoms</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/sales-marketing'))
        <div class="specialistMarkets-section-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/sales-marketing"><img src="{{ asset('website/images/specialistMarkets/sales.jpg') }}"
                            class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/sales-marketing">Sales & Marketing</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/accounts-finance'))
        <div class="specialistMarkets-section-items">
            <div class="row ">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/accounts-finance"><img src="{{ asset('website/images/specialistMarkets/finance.jpg') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/accounts-finance">Accounts & Finance</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/hr-training'))
        <div class="specialistMarkets-section-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/hr-training"><img src="{{ asset('website/images/specialistMarkets/hr.jpg') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/hr-training">HR & Training</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/engineering-manufacturing'))
        <div class="specialistMarkets-section-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/engineering-manufacturing"><img src="{{ asset('website/images/specialistMarkets/engineer.jpg') }}"
                            class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/engineering-manufacturing">Engineering & Manufacturing</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/logistics-supply-chain'))
        <div class="specialistMarkets-section-items">
            <div class="row ">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/logistics-supply-chain"><img src="{{ asset('website/images/specialistMarkets/logistics.jpg') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/logistics-supply-chain">Logistics & Supply Chain</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets/bpo'))
        <div class="specialistMarkets-section-items">
            <div class="row ">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets/bpo"><img src="{{ asset('website/images/specialistMarkets/bpo.jpg') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets/bpo">BPO</a></h5>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>