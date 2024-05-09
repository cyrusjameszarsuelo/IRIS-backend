@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Job Tips <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Interview Preparation</p>
        <h1>Interview Preparation</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Interview Preparation</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p><strong>Researching the Company for which you are being interviewed</strong></p>
                    <p>Not only will you have a better idea of what you are potentially letting yourself in for, but it
                        provides you with ammunition to drop into either your answers, or your questions at the end of
                        the interview.</p>
                    <p>e.g. I understand that last year your Company merged with Company X. How do you see this
                        affecting the X department and what will it mean in terms of opportunities for advancement?</p>

                    <p><strong>Being Prepared</strong></p>
                    <p>It is now common practice for interviewers to focus on key competencies - skills or attitudes
                        that are necessary to the role in question. Most interviews will follow a structure that is
                        designed to bring out those qualities. The questions should be answered by giving specific
                        examples from your background that highlight the relevant competencies. Therefore it is
                        important to have ready-made examples that you can use on cue. Go over your CV and recall your
                        greatest achievements. What were the skills and attitudes that you used to bring about the
                        achievements? How did you use them? What did you learn from the experience? What would you do
                        differently if faced with the same situation again?</p>

                    <p><strong>Appearance</strong></p>
                    <p>Within the first 2 minutes of the interview, the interviewer will already have formed a judgement
                        of you and your suitability for the role - make sure it is a positive one.</p>

                    <h5>Body Language</h5>
                    <p>Research has shown that 50% of communication relies on body language. Many interviewees shoot
                        themselves in the foot without realising that they are sending out negative signals. There are
                        several issues to avoid:</p>
                    <p><strong>Areas to concentrate on include:</strong></p>
                    <ul>
                        <li>Walk slowly, deliberately and tall when you enter the room.</li>
                        <li>Smile - show the interviewer that you are open, friendly and confident</li>
                        <li>Maintain good eye contact</li>
                    </ul>
                    <p>The main point is to ensure that you are relaxed and confident and the best way to ensure this is thorough preparation.</p>

                    <h5>REASONS FOR HIRING</h5>
                    <p>By looking at the interview from the other side of the desk, it is much easier to understand what the interviewer is looking for, and therefore to tailor your answers to what is needed.</p>

                    <h6>The interviewer will have 3 main considerations:</h6>
                    <p><strong>Ability & suitability</strong></p>
                    <p>There are plenty of people with the right qualifications and skills to do the job in hand. On paper, the interviewer may have little to help them differentiate between Candidates. Look at the role that you are applying for and list all the technical skills and personal traits that are vital to the job. Now pick out specific examples from your past that highlight these qualities. Make life easy for the interviewer by painting vivid pictures from your past. Specifics will always win over generalisations as they prove to the interviewer that you have what it takes to do the job well.
                    </p>

                    <p><strong>Willingness</strong></p>
                    <p>You may have the right credentials to do the job but the interviewer needs to know if you are the sort of person who will go the extra mile in order to help the team succeed. Have examples ready of when you went beyond the call of duty in order to ensure the success of a project or task.</p>

                    <p><strong>Problem solving</strong></p>
                    <p>Anyone who is hired is hired for the same reason: the employer has a problem of some kind that needs solving. Look at the job description and decide what problems will need to be solved by the individual who gets the job. Again go to your past and prepare examples of when you overcame similar problems. Pay particular attention to your approach to the problem, your thought process in tackling it, how you went about solving it and the outcome of your actions.</p>

                    <h5>Common Competencies</h5>
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12">
                            <p><strong>Personal Profile</strong></p>
                            <ul>
                                <li>Drive</li>
                                <li>Motivation</li>
                                <li>Communication Skills</li>
                                <li>Teamwork</li>
                                <li>Energy/Enthusiasm</li>
                                <li>Determination</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12">
                            <p><strong>Professional Profile</strong></p>
                            <ul>
                                <li>Reliability</li>
                                <li>Honesty/Integrity</li>
                                <li>Pride</li>
                                <li>Dedication</li>
                                <li>Analytical Skills</li>
                                <li>Listening Skills</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6 col-md-12">
                            <p><strong>Achivement Profile</strong></p>
                            <ul>
                                <li>Money that you have saved your company</li>
                                <li>Time that you have saved your company</li>
                            </ul>
                        </div>
                        <div class="col-12 col-lg-6 col-md-12">
                            <p><strong>Business Profile</strong></p>
                            <ul>
                                <li>Efficiency</li>
                                <li>Economy</li>
                                <li>Procedures</li>
                                <li>Profit</li>
                            </ul>
                        </div>
                    </div>


                    <p>There are many different questions that the interviewer can use to determine whether you possess certain competencies. However, by matching the above competencies to specific examples from your past in preparation for the interview, you will be able to cover most eventualities.</p>

                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.jobTipsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')