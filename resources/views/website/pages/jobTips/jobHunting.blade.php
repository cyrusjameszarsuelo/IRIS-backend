@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Job Tips <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Job Hunting</p>
        <h1>Job Hunting</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Job Hunting</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>The most successful jobseekers are people who are persistent in their search and know all the places to look for work. There are a number of ways you can search for jobs, including online.</p>
                    
                    <p><strong>Search the internet</strong></p>
                    <p>New jobs are being filled as quickly as they appear so it's important you look regularly to make sure you don't miss an opportunity.</p>
                    <p>Many companies advertise jobs on the internet through their own websites or online job boards.</p>
                    <p>If you don't have access to the internet at home, try your local library.</p>
                    
                    <p><strong>Register with a recruitment agency</strong></p>
                    <p>Recruitment agencies advertise short- and long-term jobs and some specialise in particular areas of work. If you register with the relevant agencies in your local area, you'll be kept up to date on the latest vacancies available. i21recruitment covers different sectors and has Clients and Candidates all over NCR and GMA. To register with us click here.</p>
                    
                    <p><strong>Word of mouth</strong></p>
                    <p>People you know can give you useful information about job hunting. It's worth talking to them about the type of work you're looking for, your skills and experience. They may know about a suitable vacancy or think of you when they hear about vacancies in the future. They may also be able to put in a good word for you at the company where they work.</p>
                    <p>Networking events and conferences are also a good way of meeting new contacts. Before attending the event, you should think about what you want to get from it and also take a few copies of your CV along with you.</p>
                    <p><strong>Keeping track of your progress</strong></p>
                    <p>Keeping track of your job search is a good idea as it helps you remember who you have approached, and what the response was. You should record which recruitment agencies you have contacted and which jobs you have been put forward to.</p>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.jobTipsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')