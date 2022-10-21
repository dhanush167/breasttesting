@extends('front.layouts.front')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">Reducing your risk</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">Reducing your risk</li>
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

                    <h3>
                        A healthy lifestyle can help reduce your risk of breast cancer.
                    </h3>

                    <p>
                        Drink less alcohol
                    </p>

                    <p>
                        Drinking even one alcoholic drink per day increases your risk of developing breast cancer. The
                        more alcohol you drink, the greater the increase in risk .
                    </p>


                    <div class="clearfix"></div>

                    <h3>
                        Quit smoking
                    </h3>

                    <p>
                        Smoking is associated with an increased risk of breast cancer and
                        quitting smoking is one of the best things you can do for your overall health.
                    </p>


                    <div class="clearfix"></div>

                    <h3>
                        Manage your weight
                    </h3>

                    <p>
                        Being overweight increases your risk for many diseases. Being overweight after menopause
                        increases your risk of breast cancer.
                    </p>

                    <div class="clearfix"></div>

                    <h3>
                        Be active
                    </h3>

                    <p>
                        Physical activity helps in weight management but also provides a whole range of other health
                        benefits.
                    </p>

                    <p>
                        The more you exercise, the greater the reductions in breast cancer risk. Aim to do at least 30
                        minutes of moderate to brisk exercise on most days.
                    </p>

                    <h3>
                        Eat healthy foods
                    </h3>

                    <p>
                        You can lower your risk of cancer by healthy eating. Combined with physical activity, a healthy
                        diet will help you maintain a healthy body weight and reduce your risk of cancer.
                    </p>

                    <h3>
                        Talk to your doctor about managing menopause symptoms
                    </h3>

                    <p>
                        Hormone Replacement Therapy (HRT) may increase your risk of breast cancer. Talk to your doctor
                        about options to manage the symptoms of menopause.
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
