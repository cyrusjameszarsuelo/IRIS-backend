@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Job Tips <i
                class="fa fa-arrow-right" aria-hidden="true"></i> CV Check</p>
        <h1>CV Check</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">CV Check</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>A good CV is essential when looking for work and it is worth spending time getting it right so that it is a true representation of your skills and experience to make it potentially enticing for an employer to want to interview you.</p>
                    
                    <p><strong>What is your CV?</strong></p>
                    <p>Your CV should:</p>
                    <ul style="list-style: none">
                        <li>Be neat, typed if possible and structured to the best standard you can achieve in content and layout.</li>
                        <li>Be concise, a minimum of two to three pages is normally sufficient.</li>
                        <li>Be positive, emphasise your achievements, strengths, successes and how you have contributed to your employers.</li>
                        <li>Make a good impression, this means presenting the facts about yourself in a clear and positive way.</li>
                    </ul>
                    
                    <h5>How to use your CV</h5>
                    <p><strong>At interviews</strong></p>
                    <p>Having your CV with you while you're waiting to be called in can help you refresh your memory.</p>
                    <p>It is also handy to leave a copy with the interviewer if they do not already have one.</p>
                    
                    <p><strong>Registering with recruitment agencies</strong></p>
                    <p>Agencies may sometimes ask to see your CV before you can register with them.</p>
                    
                    <p><strong>What to include</strong></p>
                    <p>There is no set format. How you present your CV is up to you. However, you should include at least the following:</p>
                    <ul style="list-style: none">
                        <li>Your name</li>
                        <li>Your address</li>
                        <li>Your phone number</li>
                        <li>Your email address</li>
                        <li>Your career history</li>
                    </ul>
                    <p>Put your most recent job first and include dates. Employers will be more interested in what you have done recently. Don't leave gaps between dates, because employers will want to know what you did during those periods.</p>
                    <p>If you don't have much work experience, you could include temporary, holiday, part-time or voluntary jobs too. If you've had many different jobs, emphasize the skills and experience you have gained across those jobs (for example, skills in dealing with customers or communication skills).</p>

                    <h5>Here are some examples you may want to include:</h5>
                    <p><strong>A personal profile</strong></p>
                    <p>This is a concise statement at the beginning of your CV to sell yourself, to show your skills, experience and personal qualities. You could include positive words such as 'competent', 'adaptable', and 'conscientious'. Tailor the statement to the requirements of each job that you apply for, so that you make it clear to the employer that you're the right person for the job.</p>

                    <p><strong>Achievements</strong></p>
                    <p>Mention things you did well in your past jobs which could be relevant to the job you're applying for.</p>

                    <p><strong>Qualifications and training</strong></p>
                    <p>Include any qualifications and training from previous jobs put the most recent first, include qualifications you got from school or college.</p>

                    <p><strong>Interests</strong></p>
                    <p>These can support your application if your hobbies and leisure activities highlight responsibilities and skills that are relevant to the job you're applying for, perhaps you belong to a club or society which you organise activities for, or you use leadership skills or teamwork as part of the activity.</p>

                    <p><strong>Other information</strong></p>
                    <p>It is up to you whether to include this, but it can be helpful if there are gaps in your CV. If you had a career break because you were caring for children or elderly relatives, make this a positive thing and think about the skills you used doing this. If the job you are applying for is different from what you have done in the past, explain why you are interested in the new type of work.</p>

                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.jobTipsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')