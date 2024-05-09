<div class="jobTips-section py-5">
    <div class="jobTips-section-title">
        <h4>Job Tips</h4>
    </div>
    <div class="jobTips-section-content">

        @if (!Request::is('job-tips/job-hunting'))
        <div class="jobTips-section-items">
            <div class="row">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a href="/job-tips/job-hunting"><img src="{{ asset('website/images/icons/job-primary.png') }}" class="img-fluid"></a>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-start">
                    <h5><a href="/job-tips/job-hunting">Job Hunting</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('job-tips/cv-check'))
        <div class="jobTips-section-items">
            <div class="row">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a href="/job-tips/cv-check"><img src="{{ asset('website/images/icons/cv-check-primary.png') }}"
                            class="img-fluid"></a>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-start">
                    <h5><a href="/job-tips/cv-check">CV Check</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('job-tips/interview-preparation'))
        <div class="jobTips-section-items">
            <div class="row ">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a href="/job-tips/interview-preparation"><img src="{{ asset('website/images/icons/interview-preparation-primary.png') }}" class="img-fluid"></a>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-start">
                    <h5><a href="/job-tips/interview-preparation">Interview Preparation</a></h5>
                </div>
            </div>
        </div>
        @endif

        @if (!Request::is('job-tips/interview-questions'))
        <div class="jobTips-section-items">
            <div class="row">
                <div class="col-4 d-flex align-items-center justify-content-center">
                    <a href="/job-tips/interview-questions"><img src="{{ asset('website/images/icons/interview-questions-primary.png') }}" class="img-fluid"></a>
                </div>
                <div class="col-8 d-flex align-items-center justify-content-start">
                    <h5><a href="/job-tips/interview-questions">Interview Questions</a></h5>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>