@extends('front.layouts.front')

@section('content')



    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">Signs and symptoms of breast cancer</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">Signs and symptoms of breast cancer</li>
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

                    <h5>
                        Signs and symptoms of breast cancer
                    </h5>

                    <p>
                        It is important that any symptoms or breast changes are properly investigated by your doctor.
                        This may include:
                    </p>

                    <ul>
                        <li>physical examination of your breasts</li>
                        <li>mammogram</li>
                        <li>other tests that may be required</li>
                    </ul>

                    <p>
                        It is important to be breast aware because breast cancer can develop at any time. We recommend you get to know the normal look and feel of your breasts. If you find a breast change that is unusual for you, we recommend that should see your doctor without delay.
                    </p>

                    <p>
                        Most breast changes are not due to cancer, but it’s important to see a doctor to be sure.
                    </p>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">All Services</h5>
                            <ul class="list-divider list-border list check">
                                <li><a class="text-theme-colored" href="{{route('your_screening_choice')}}">Your screening choice</a></li>
                                <li><a href="{{route('measuring_the_success_of_our_breast_screening_program')}}">Measuring the success</a></li>
                                <li><a href="{{route('your_breast_cancer_risk')}}">Your breast cancer risk</a></li>
                                <li><a href="{{route('reducing_your_risk')}}">Reducing your risk</a></li>
                                <li><a href="{{route('signs_and_symptoms_of_breast_cancer')}}">Signs and symptoms of breast cancer</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
