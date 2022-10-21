@extends('front.layouts.front')

@section('content')




    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">Your screening choice</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">Your screening choice</li>
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
                        Breast cancer is the most common cancer among women in Sri Lanka. Being a curable breast cancer if detected early, still most cancers are found at very later stages and one third of all reported women die of breast cancer.
                    </h5>

                    <p>
                        For most people after 35 years of age, having a breast screening is a really good option. Getting to know your
                        <a href="">
                            risk factors
                        </a>
                        may help you make a decision about having a breast screening.
                    </p>

                    <div class="clearfix"></div>

                    <h5>
                        Benefits of breast screening
                    </h5>

                    <ul>
                        <li>Regular screening prevents deaths from
                            <a href="#">
                                breast cancer.
                            </a>
                        </li>
                        <li>Breast screening can detect most cancers early</li>
                        <li>If breast cancer is found early, it is more likely to be small, and successfully treated.</li>
                        <li>The earlier breast cancer is found, the better your chance of surviving it.</li>
                    </ul>

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
