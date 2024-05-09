@extends('website.main')
@section('page-title')
    LOGIN - 
@endsection
@section('website-content')
<div class="breadcrumbs"
    style="background:rgba(16, 107, 136, 0.5) url({{ asset('website/images/diamonds.png')}}) center repeat;">
    <div class="container">
        <p><a href="/">Home</a> <i class="fa fa-arrow-right" aria-hidden="true"></i> Login</p>
        <h1>Login</h1>
    </div>
</div>
<div class="container-xxl py-5">
    <div class="container">
        <div class="loginRegister-container">
            <div class="row">
                <div class="col-12 col-lg-6 col-md-12" style="border: 2px solid #106b88;">
                    <div class="login-content">
                        <h2 class="text-center">Log in to your Account</h2>
                        <div class="bg-primary mb-5 mx-auto" style="width: 150px; height: 3px;"></div>
                        <form>
                            <div class="form-group mb-3">
                                <label for="username">Username</label>
                                <input type="text" class="form-control mt-2" id="username"
                                    placeholder="Enter your username">
                            </div>
                            <div class="form-group mb-4">
                                <label for="password">Password</label>
                                <input type="password" class="form-control mt-2" id="password"
                                    placeholder="Enter your password">
                            </div>
                            <div class="form-group mb-5 d-flex align-items-center justify-content-center">
                                <button type="submit" class="btn btn-primary" style="width: 160px;">Log me in</button>
                            </div>
                            <p class="forgotpass-link text-center"><a href="/forgot-password" >I forgot my password</a></p>
                        </form>
                    </div>
                </div>
                <div class="col-12 col-lg-6 col-md-12 d-flex align-items-center justify-content-center" style="background:#106b88">
                    <div class="register-content">
                        <h2 class="text-center text-white">Don't have an account?</h2>
                        <div class="bg-white mb-5 mx-auto" style="width: 150px; height: 3px;"></div>
                        <p class="text-white text-center mb-4">Register now to join the community!</p>
                        <p class="register-link"><a href="{{route('registration.index')}}">Register Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection