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
                                    <li class="active text-theme-colored">Register</li>
                                </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-silver-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-push-3">
                        <form name="reg-form" class="register-form" method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="icon-box mb-0 p-0">
                                <a href="#" class="icon icon-bordered icon-rounded icon-sm pull-left mb-0 mr-10">
                                    <i class="pe-7s-users"></i>
                                </a>
                                <h4 class="text-gray pt-10 mt-0 mb-30">Don't have an Account? Register Now.</h4>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Full Name</label>

                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    <input type="hidden" name="user_type" value="patient" />

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Email Address</label>
                                    <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label>Age</label>

                                    <input id="age" type="number"
                                        class="form-control @error('age') is-invalid @enderror" name="age"
                                        value="{{ old('age') }}" required autocomplete="age" autofocus>



                                    @error('age')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-group col-md-6">
                                    <label>Gender</label>

                                    <select name="gender" class="form-control" id="gender" required>
                                        <option value="male"> Male</option>
                                        <option value="female"> Female</option>
                                        <option value="other"> Other</option>
                                    </select>


                                    @error('gender')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="form_choose_username">Phone No</label>
                                    <input id="phone_no" name="phone_no" class="form-control @error('phone_no') is-invalid @enderror"
                                        type="text" required>

                                        @error('phone_no')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="marital_status">Marital Status</label>

                                    <select id="marital_status" name="marital_status" class="form-control" autocomplete="off">
                                        <option value="single">Single</option>
                                        <option value="married">Married</option>
                                        <option value="widowed">Widowed</option>
                                        <option value="divorced">Divorced</option>
                                    </select>

                                        @error('marital_status')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">

                                <div class="form-group col-md-12">
                                    <label for="form_choose_username">Home Address</label>

                                    <textarea name="address" class="form-control @error('address') is-invalid @enderror" cols="5" required></textarea>

                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                            </div>

                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="form_choose_password">Choose Password</label>
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Confirm Password</label>
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-dark btn-lg btn-block mt-15" type="submit">Register Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- end main-content -->


@endsection
