<div class="featured-article py-5">
    <div class="featured-article-title">
        <h4>Featured Articles</h4>
    </div>
    <div class="featured-article-content">

        @if (!Request::is('candidates'))
        <div class="featured-article-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/candidates"><img src="{{ asset('website/images/candidates.png') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/candidates">Candidates</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('specialist-markets'))
        <div class="featured-article-items">
            <div class="row">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/specialist-markets"><img src="{{ asset('website/images/specialist-markets.png') }}"
                            class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/specialist-markets">Specialist Markets</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('clients'))
        <div class="featured-article-items">
            <div class="row ">
                <div class="col-5 d-flex align-items-center justify-content-center">
                    <a href="/clients"><img src="{{ asset('website/images/clients.png') }}" class="img-fluid"></a>
                </div>
                <div class="col-7 d-flex align-items-center justify-content-start">
                    <h5><a href="/clients">Clients</a></h5>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>