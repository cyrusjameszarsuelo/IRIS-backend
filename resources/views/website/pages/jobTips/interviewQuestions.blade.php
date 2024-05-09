@extends('website.main')
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Job Tips <i
                class="fa fa-arrow-right" aria-hidden="true"></i> Interview Questions</p>
        <h1>Interview Questions</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container clients py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 clients-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <h1 class="display-5 ">Interview Questions</h1>
                    <div class="bg-primary mb-5" style="width: 80px; height: 4px;"></div>
                    <p>Below is a selection of questions, some of which will come up in the interview, others that may not. There are no penalties for over-preparation though, so it is important that you have put some thought into how you will answer some of them.</p>
                    
                    <p><strong>What did you dislike about your old job?</strong> This is an invitation to put your head in a noose. Keep answers short and positive: e.g. 'I really enjoyed my last job but I felt that I wanted a bigger challenge’. ‘One of the things that appeal to me about working with your company is the fact the individuals are stretched to bring the best out of them’. ‘I look forward to tackling such a challenge.’</strong></p>
                    
                    <p><strong>Have you done the best work that you are capable of doing?</strong> By saying ‘yes’ you give the image of being a spent force. Say something along the lines of being proud of your work to date, whilst assuring the interviewer that you feel the best is yet to come.</p>
                    
                    <p><strong>Where do you see yourself in five years time?</strong> A good response is to throw a question back: What opportunities are there within this company? If possible and honest, blend this answer with your prepared answer.</p>
                    
                    <p><strong>What are your biggest accomplishments?</strong> A golden opportunity to sell yourself. It is absolutely crucial that you have several well-prepared stories including facts and figures. The more vivid your story, the better the interviewer can visualise you not only successfully completing that task, but completing such tasks for their company. Be conscious of time and don’t ramble – get as much detail into as short a time as possible.</p>
                    
                    <p><strong>Can you work under pressure?</strong> A simple ‘yes’ does not separate you from the crowd. Think of specifics from your past including how you dealt with pressure. What are your greatest strengths?</p>

                    <p><strong>What most interests you about this job?</strong> Describe a difficult problem that you have had to deal with. This is a chance to show off your approach to problems. Show that you employ a logical thought process by outlining a step-by-step approach to problem solving and then give an example of a problem that you are particularly proud of solving.</p>

                    <p><strong>What have you done that shows initiative?</strong> It is best to think of some example that is work related, but use examples from outside professional life if absolutely necessary.</p>

                    <p><strong>What qualities do you think it needs to be successful in this field?</strong> If you have listened to the interviewer’s preamble at the beginning of the interview, you will know what they want to hear.</p>

                    <p><strong>Do you work better on your own or as part of a team?</strong>  By knowing about the role you will have an idea of the balance of work in terms of how much time will be spent working on your own and how much contributing to team efforts. Answer according to the necessary balance.</p>

                    <p><strong>Tell me of a time when you had to communicate with people from different levels. What problems did you encounter? What were the results?</strong> This is not only a question designed to probe your interpersonal skills, but also to determine how you dealt with a problem. As above, show a logical approach to problem solving.</p>

                    <p><strong>Give me an example of an event that really challenged you. How did you overcome the challenge?</strong> Answer in the same manner as the previous question. Be sure to portray the challenge in its worst light. The darker you can paint the problem, the more you will shine.</p>

                    <p><strong>How have you benefited from your disappointments?</strong> Resist the temptation to explain specific disappointment in detail. This is one of those questions where it is better to give a general answer, e.g. 'I treat disappointments as learning experience. I looked at what happened, why it happened and how I would deal with things differently if I had the chance. Having done that, I put the disappointment behind me and look forward to tackling the next problem with a better understanding.’</p>

                    <p><strong>What is your greatest weakness?</strong> Keep your answer short and end it on a positive note if possible, e.g. 'I like to give projects 100% and I sometimes find it frustrating when others in the team do not give the same level of commitment. I am conscious of this weakness and aim to overcome it by a positive attitude that I hope will catch on.' </p>
                    <br>
                    <p>The interview will normally close with the interviewer inviting you to ask some questions. Having researched the company you will be in a great position to really probe and find out if this is the role/company for you, have your prepared questions written down, you will never remember them off the top of your head.</p>
                    <p>Another thing to remember is that people love to talk about themselves. Now is the time to find out about the interviewer – after all you are potentially going to be working with this person.</p>
                    <p>We hope you find this information useful and when we secure you an interview we will go through other interview questions in more detail to help you get your ideal job!</p>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.jobTipsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')