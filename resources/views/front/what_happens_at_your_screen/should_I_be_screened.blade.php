@extends('front.layouts.front')

@section('content')



    <div class="main-content">

        <!-- Section: inner-header -->
        <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
            <div class="container pt-60 pb-60">
                <!-- Section Content -->
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-12 xs-text-center">
                            <h3 class="title text-white">Should i be screened</h3>
                            <ol class="breadcrumb mt-10 white">
                                <li><a class="text-white" href="#">Home</a></li>
                                <li class="active text-theme-colored">Should i be screened</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section: Services -->
        <section class="bg-silver-light">
            <div class="container">
                <div class="row mtli-row-clearfix">
                    <div class="col-sm-6 col-md-8 col-lg-8">
                        <div class="campaign maxwidth500 mb-sm-30">
                            <h4 class="">
                                <a href="#">
                                    Should I be screened?
                                </a>
                            </h4>
                        </div>
                        <div class="event-details">
                            <p class="mb-20 mt-0">
                                Breast cancer is the most common cancer among females.
                                Though the commonest age to develop breast cancer is after 50 years,
                                women of all ages possess a risk. It is emphasized if you have family history or other risk factors for breast cancer (add short cut to Your breast cancer risk).
                                Any women after 35 years of age are advised to go through breast cancer screening.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">All Services</h5>
                                <ul class="list-divider list-border list check">
                                    <li><a class="text-theme-colored" href="{{route('before_screening')}}">Before screening</a></li>
                                    <li><a href="{{route('should_i_be_screened')}}">Should I be screened?</a></li>
                                    <li><a href="{{route('the_scope_of_our_program')}}">The scope of our program</a></li>
                                    <li><a href="{{route('at_screening')}}">At screening</a></li>
                                    <li><a href="{{route('after_screening')}}">After screening</a></li>
                                    <li><a href="{{route('client_feedback')}}">Client feedback</a></li>
                                    <li><a href="#">Your stories</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>



    </div>


@endsection
