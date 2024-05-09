@extends('website.main')
@section('page-title')
    PRIVACY POLICY -
@endsection
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Privacy Policy</p>
        <h1>Privacy Policy</h1>
    </div>
</div>

<div class="container-xxl  overflow-hidden px-lg-0">
    <div class="container terms-condition py-5">
        <div class="row g-2 mx-lg-8">
            <div class="col-lg-9 terms-condition-text wow fadeIn" data-wow-delay="0.5s">
                <div class="p-lg-5 text-black">
                    <p>We are committed to protecting your privacy and we comply with the Data Protection laws applicable to the Philippines. Details of how we collect, use and disseminate your personal data is described below:</p>

                    <p><strong>The data we collect about you</strong></p>
                    <ol>
                        <li>i21recruitment<strong>&nbsp;</strong>obtains personal data about you that you submit when you complete an application and submit your curriculum vitae ("CV"). This personal information includes data such as your telephone number, name, address, e-mail address, fax number together with current and past work details and requirements, as well as future ones.</li>
                        <li>We also obtain information about you when we take up references from past employers/clients before putting you forward to our recruiting Clients. Such references may provide us with details of criminal records, previous employment or like information.</li>
                        <li>Information is only retained and used in a lawful, fair and relevant way in order to match you with internal vacancies within i21recruitment or the group as a whole.</li>
                        <li>We may also record and store any telephone calls you have with our staff for record keeping and quality control purposes.</li>
                        <li>In order to ensure that the data we hold is accurate and current, we ask you to update your registration details and CV as often as is necessary and recommend at least every 3 months. Our service to you is reliant on you supplying us with accurate and complete information about you and your requirements via your application, CV, certificates, references, skills analysis, and talking to our consultants.</li>
                        <li>During discussions with i21recruitment we may change the look of your CV/details to better reflect your skills and working history.</li>
                    </ol>

                    <p><strong>How we process your data</strong></p>
                    <ol>
                        <li>Your personal data will be stored in our database in our Philippines based data processing centre.</li>
                        <li>We analyse your application, CV and other such information you supply about yourself to obtain key data such as skills, disciplines and experience. Such data will be used for matching purposes for internal opportunities.</li>
                        <li>All data stored on our database is available to our internal recruitment team who take requirements from each of our divisions. Such searches will use key data such as discipline, availability, qualifications, location, Industry knowledge, skills, experience and salary / remuneration requirements. The Site allows the recruitment team to prioritise individuals according to the quality of the match with the requirements. We then select the appropriate Candidates for interview. The selection process also takes into account any extra knowledge we have about you or the specific preferences of the division.</li>
                    </ol>

                    <p><strong>Your Legal Data Protection Rights</strong></p>
                    <ul style="text-align: justify;">
                        <li>You have the right to request a copy of the information held by us about you in our records. You also have the right to correct any inaccuracies in the information and various other data subject rights under the Philippines Data Protection laws.</li>
                    </ul>

                    <p><strong>Security Policy</strong></p>
                    <ul>
                        <li style="text-align: justify;">i21 staff and the Site administration staff contracted to i21recruitment are the ONLY parties to have access to your personal details save as set out above.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 pe-lg-0 wow fadeIn" style="min-height: 400px;" data-wow-delay="0.8s">
                @include('website.sections.jobTipsSection')
                @include('website.sections.specialistMarketsSection')
            </div>
        </div>

    </div>
</div>
@endsection('website-content')