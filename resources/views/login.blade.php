@extends('layouts.end_user')

@section('content')
<!-- singUp-area -->
        <section class="singUp-area section-py-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="singUp-wrap">
                            <h2 class="title">Welcome back!</h2>
                            <p>Hey there! Ready to log in? Just enter your username and password below and you'll be back in action in no time. Let's go!</p>
                            <div class="account__social">
                                <a href="#" class="account__social-btn">
                                    <img src="assets/img/icons/google.svg" alt="img">
                                    Continue with google
                                </a>
                            </div>
                            <div class="account__divider">
                                <span>or</span>
                            </div>
                            <form action="#" class="account__form">
                                <div class="form-grp">
                                    <label for="email">Email</label>
                                    <input id="email" type="text" placeholder="email">
                                </div>
                                <div class="form-grp">
                                    <label for="password">Password</label>
                                    <input id="password" type="text" placeholder="password">
                                </div>
                                <div class="account__check">
                                    <div class="account__check-remember">
                                        <input type="checkbox" class="form-check-input" value="" id="terms-check">
                                        <label for="terms-check" class="form-check-label">Remember me</label>
                                    </div>
                                    <div class="account__check-forgot">
                                        <a href="registration.html">Forgot Password?</a>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-two arrow-btn">Sign In<img src="assets/img/icons/right_arrow.svg" alt="img" class="injectable"></button>
                            </form>
                            <div class="account__switch">
                                <p>Don't have an account?<a href="registration.html">Sign Up</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- singUp-area-end -->
@stop