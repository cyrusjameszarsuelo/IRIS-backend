@extends('website.main')
@section('page-title')
    FORGOT PASSWORD -
@endsection
@section('website-content')
    <div class="breadcrumbs"
        style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png') }}) center repeat;">
        <div class="container">
            <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Forgot Password</p>
            <h1>Forgot Password</h1>
        </div>
    </div>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="register-container">
                <form>
                    {{-- RESET PASSWORD --}}
                    <div class="row mb-5">
                        <div class="col-12 col-lg-12 col-md-12">
                            <div class="card register-card">
                                <div class="card-header">
                                    <div class="text-center wow fadeInUp" data-wow-delay="0.1s"
                                        style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
                                        <h3 class="text-white">RESET PASSWORD</h3>
                                        <div class="bg-white mx-auto" style="width: 80px; height: 2px;"></div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6 offset-md-3 text-center">
                                            <p>Enter your Email Address below and you will receive a new password shortly.</p>
                                            <p>Use this new password to access the site.</p>
                                            <div class="input-group mb-3 mt-4">
                                                <div class="input-group-prepend">
                                                  <span class="input-group-text" id="basic-addon1">@</span>
                                                </div>
                                                <input type="email" class="form-control" placeholder="Email Address" aria-label="Email Address" aria-describedby="basic-addon1">
                                            </div>
                                            <div class="form-group mb-3 px-4">
                                                <button type="submit" class="btn btn-primary" style="padding: 12px 20px;font-weight: bold;">Reset Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
