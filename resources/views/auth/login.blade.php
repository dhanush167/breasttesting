@extends('front.layouts.front')

@section('content')
    <!-- Start main-content -->
    <div class="main-content">
        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <h3 class="font-28">My Account</h2>
                                <ol class="breadcrumb text-center text-black mt-10">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li class="active text-theme-colored">Login</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <h4 class="text-gray mt-0 pt-5"> {{ __('Login') }}</h4>
                        <hr>
                        <form name="login-form" class="clearfix" method="POST" action="{{ route('login') }}">

                            @csrf

                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="form_username_email">Email</label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label for="form_password">Password</label>


                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                            </div>
                            <div class="checkbox pull-left mt-15">
                                <label for="form_checkbox">
                                    {{-- <input id="form_checkbox" name="form_checkbox" type="checkbox">
                                    Remember me </label> --}}
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>

                            </div>
                            <div class="form-group pull-right mt-10">
                                <button type="submit" class="btn btn-dark btn-sm">Login</button>
                            </div>


                                    @if (Route::has('password.request'))
                            <div class="clear text-center pt-10">
                                <a class="text-theme-colored font-weight-600 font-12" href="{{ route('password.request') }}">Forgot Your
                                    Password?</a>
                            </div>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->
@endsection
