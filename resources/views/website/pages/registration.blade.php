@extends('website.main')
@section('page-title')
    REGISTRATION -
@endsection
@section('website-content')
    <div class="breadcrumbs"
        style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png') }}) center repeat;">
        <div class="container">
            <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Registration</p>
            <h1>Registration</h1>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="register-container">
                <form method="POST" action="{{ route('registration.store') }}">
                    {{-- PERSONAL DETAILS --}}
                    <div class="row mb-5">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">Personal Details</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="title" class="mb-2">Title *</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="salutation_id">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="firstname" class="mb-2">Firstname *</label>
                                                <input type="text" class="form-control" id="firstname" name="first_name">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="lastname" class="mb-2">Lastname *</label>
                                                <input type="text" class="form-control" id="lastname" name="last_name">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="dateofbirth" class="mb-2">Date of Birth *</label>
                                                <input type="date" class="form-control" id="dateofbirth"
                                                    name="date_of_birth">
                                            </div>
                                            {{-- <div class="form-group mb-3 px-4">
                                                <label for="maritalstatus" class="mb-2">Marital Status</label>
                                                <select class="form-select" aria-label="Default select example" name="marital_status">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div> --}}
                                            <div class="form-group mb-3 px-4">
                                                <label for="nationality" class="mb-2">Nationality</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="nationality">
                                                    <option selected disabled>Open this select menu</option>
                                                    @foreach ($nationalityContent as $key => $nationality)
                                                        <option value="{{ $nationality['num_code'] }}">
                                                            {{ $nationality['nationality'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-5">
                        {{-- LOCATION --}}
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">LOCATION</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="country" class="mb-2">Country</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="country">
                                                    <option selected disabled>Open this select menu</option>
                                                    @foreach ($nationalityContent as $key => $country)
                                                        <option value="{{ $country['num_code'] }}">
                                                            {{ $country['en_short_name'] }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="address" class="mb-2">Address</label>
                                                <input type="text" class="form-control" id="address" name="address">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="region" class="mb-2">Region</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="region" id="region">
                                                    <option selected>Open this select menu</option>
                                                    @foreach ($regionContent['RECORDS'] as $region)
                                                        <option value="{{$region['id']}}" data-regcode="{{$region['regCode']}}">{{$region['regDesc']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="province" class="mb-2">Province</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="province" id="province">
                                                    <option selected disabled>Open this select menu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="city" class="mb-2">City</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="city" id="city">
                                                    <option selected>Open this select menu</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="barangay" class="mb-2">Barangay</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="barangay" id="barangay">
                                                    <option selected>Open this select menu</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="zipcode" class="mb-2">Zip Code</label>
                                                <input type="text" class="form-control" id="zipcode"
                                                    name="zipcode">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- CONTACT DETAILS --}}
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">CONTACT DETAILS</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="email" class="mb-2">Email</label>
                                                <input type="email" class="form-control" id="email"
                                                    name="email">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="alternateemail" class="mb-2">Alternate Email</label>
                                                <input type="email" class="form-control" id="alternateemail"
                                                    name="alternate_email">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="teleno" class="mb-2">Telephone No.</label>
                                                <input type="text" class="form-control" id="teleno"
                                                    name="tel_no">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="mobileno" class="mb-2">Mobile No. *</label>
                                                <input type="text" class="form-control" id="mobileno"
                                                    name="mobile_no">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="alternatemobileno" class="mb-2">Alternate Mobile No.</label>
                                                <input type="text" class="form-control" id="alternatemobileno"
                                                    name="alternate_mobile_no">
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="username" class="mb-2">Username *</label>
                                                <input type="text" class="form-control" id="username"
                                                    name="username">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="password" class="mb-2">Password *</label>
                                                <input type="password" class="form-control" id="password"
                                                    name="password">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="confirmpassword" class="mb-2">Confirm Password *</label>
                                                <input type="password" class="form-control" id="confirmpassword">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- BACKGROUND --}}
                    <div class="row mb-5">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">BACKGROUND</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="education" class="mb-2">Education</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="education_id">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">License</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="license_id">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="sources" class="mb-2">Where did you hear about i21
                                                    Recruitment?</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="source_id">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- JOB DETAILS --}}
                    <div class="row mb-5">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">JOB DETAILS</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="education" class="mb-2">Preferred Position 1</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_position_1">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Preferred Position 2</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_position_2">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Preferred Position 3</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_position_3">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="minimum-salary" class="mb-2">Minimum Salary Sought</label>
                                                <input type="text" class="form-control" id="minimum-salary"
                                                    name="minimum_salary_sought">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Notice Required</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="notice_required">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-md-12">
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Preferred Location 1</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_location_1">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Preferred Location 2</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_location_2">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <label for="license" class="mb-2">Preferred Location 3</label>
                                                <select class="form-select" aria-label="Default select example"
                                                    name="preferred_location_3">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- JOB DETAILS --}}
                    <div class="row mb-5">
                        <div class="col-12 col-lg-12 col-md-12 m-auto text-center">
                            <div class="form-group mb-3 px-4">
                                <input type="checkbox" class="form-check-input me-3" id="agreement">
                                <label for="agreement" class="mb-2">I acccept <a href="/terms-and-conditions"
                                        class="terms-condition-link"><strong>Terms and Conditions</strong></a></label>
                            </div>
                            <div class="form-group mb-3 px-4">
                                <button type="submit" class="btn btn-primary"
                                    style="padding: 12px 30px;font-weight: bold;">REGISTER NOW</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{asset('website/js/registration.js')}}"></script>
@endsection
