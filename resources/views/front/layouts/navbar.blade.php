<header id="header" class="header">
    <div style="background-color: #e1e1e3;" class="header-top  sm-text-center">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget no-border m-0">
                        <ul class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                            <li><a href="#"><i  class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i  class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="widget no-border m-0">
                        <ul class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <a class="bg-light p-5 text-theme-colored font-11" href="{{route('locations')}}">
                                    Locations
                                </a>
                            </li>
                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <!-- Modal: Appointment Starts -->
                                <a class="bg-light p-5 text-theme-colored font-11" href="{{route('contact')}}">Contact</a>
                                <!-- Modal: Appointment End -->
                            </li>

                            @auth
                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <a class="bg-light p-5 text-theme-colored font-11" href="#">Welcome {{ auth()->user()->name }}</a>
                            </li>

                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <a class="bg-light p-5 text-theme-colored font-11" href="{{route('patient.profile')}}">Dashboard</a>
                            </li>

                                <li class="sm-display-block mt-sm-10 mb-sm-10">
                                    <a class="bg-light p-5 text-theme-colored font-11" href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </li>
                            @endauth

                            @guest
                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <!-- Modal: Appointment Starts -->
                                <a class="bg-light p-5 text-theme-colored font-11" href="{{ route('register') }}">Register</a>
                                <!-- Modal: Appointment End -->
                            </li>
                            <li class="sm-display-block mt-sm-10 mb-sm-10">
                                <!-- Modal: Appointment Starts -->
                                <a class="bg-light p-5 text-theme-colored font-11" href="{{ route('login') }}">Login</a>
                                <!-- Modal: Appointment End -->
                            </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-nav">
        <div class="header-nav-wrapper navbar-scrolltofixed bg-lightest">
            <div class="container">
                <nav id="menuzord-right" class="menuzord blue bg-lightest">
                    <a class="menuzord-brand pull-left flip" href="{{route('front')}}">
                        <img src="images/logo-wide.png" alt="">
                        <br>
                        <img src="logoNCCP.png" width="150px;" alt="">
                    </a>
                    <ul class="menuzord-menu">
                        <li class="active">
                            <a href="#">
                                Know about
                                <br>
                                detecting breast
                                <br>
                                cancer at CEDC
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{route('before_screening')}}">Before screening</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('should_i_be_screened')}}">Should I be screened?</a></li>
                                        <li><a href="{{route('the_scope_of_our_program')}}">The scope of our program</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{route('at_screening')}}">At screening </a>
                                </li>
                                <li><a href="{{route('after_screening')}}">After screening</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('client_feedback')}}">Client feedback</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Your stories </a>
                                </li>
                            </ul>
                        </li>


                        <li><a href="#">
                                Know About
                                <br>
                                Breast Cancer
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{route('your_screening_choice')}}">Your screening choice</a>
                                    <ul class="dropdown">
                                        <li><a href="{{route('measuring_the_success_of_our_breast_screening_program')}}">Measuring the success</a></li>
                                    </ul>
                                </li>

                                <li><a href="{{route('your_breast_cancer_risk')}}">Your breast cancer risk</a>
                                </li>
                                <li><a href="{{route('reducing_your_risk')}}">Reducing your risk</a>
                                </li>
                                <li><a href="{{route('signs_and_symptoms_of_breast_cancer')}}">Signs and symptoms of breast cancer</a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                Start my
                                <br>
                                breast check
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{ route('brestcheck.at_home') }}">
                                        Start your
                                        breast check at
                                        home
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Calculate your
                                        breast cancer
                                        risk
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Book an
                                        appointment
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                Make a Special
                                <br>
                                Request
                            </a>
                            <ul class="dropdown">
                                <li><a href="{{route('group_bookings')}}">Group bookings </a>
                                </li>

                                <li><a href="{{route('In_your_workplace')}}">In your workplace </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#">
                                Identify our
                                <br>
                                resources
                                <br>
                                network
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{route('resources.institutions_with_functioning')}}">
                                        Institutions with functioning Breast Clinics in Sri Lanka
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('resources.Mammography_Centers_in_Sri_lanka')}}">
                                        Mammography Centers in Sri Lanka
                                    </a>
                                </li>
                                {{-- <li>
                                    <a href="{{route('resources.Videos')}}">
                                    Videos
                                    </a>
                                </li> --}}
                            </ul>
                        </li>

{{--                        <li>--}}
{{--                            <a href="{{route('get_involved')}}">--}}
{{--                                Get--}}
{{--                                <br>--}}
{{--                                Involved--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown">--}}
{{--                                <li>--}}
{{--                                    <a href="{{route('consumer_network')}}">--}}
{{--                                        Volunteer Network--}}
{{--                                    </a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}

                        <li>
                            <a href="#">
                                Get
                                <br>
                                Updated
                            </a>
                            {{-- <ul class="dropdown">
                                <li>
                                    <a href="{{route('institutions_with_functioning_breast_clinics_in_sri_lanka')}}">
                                        Institutions with functioning Breast Clinics in Sri Lanka
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('mammography_centers_in_sri_lanka_get_updated')}}">
                                        Mammography Centers in Sri Lanka
                                    </a>
                                </li>
                            </ul> --}}
                        </li>

                        <li><a href="#">
                                About
                                <br>
                                Us
                            </a>
                            <ul class="dropdown">
                                <li>
                                    <a href="{{route('our_programme')}}">
                                        Our Programme
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('our_purpose')}}">
                                        Our Purpose
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('governance')}}">
                                        Governance
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Partnerships
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Measuring the success of our breast screening
                                        programme
                                    </a>
                                </li>
                             {{--<li>--}}
                             {{--<a href="{{route('cancer_early_detection_centre')}}">--}}
                             {{--Cancer early detection center--}}
                             {{--</a>--}}
                             {{--</li>--}}
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</header>
