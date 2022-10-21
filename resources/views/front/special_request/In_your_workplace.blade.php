@extends('front.layouts.front')

@section('content')


    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">In your workplace</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">In your workplace</li>
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
                        In your workplace
                    </h3>

                    <p>
                        Workplaces have a critical role to play in supporting health and wellbeing.
                        We have developed a suite of materials to help you promote free breast cancer screening within your workplace.
                    </p>

                    <p>
                        <strong>
                            Promoting free breast screening:
                        </strong>
                    </p>

                    <ul class="mb-10">
                        <li>&#8226; supports staff health and wellbeing</li>
                        <li>&#8226; provides information and skills to help lead healthier and happier lives</li>
                        <li>&#8226; retains women in the workforce and maximise their contribution to future economic growth </li>
                        <li>&#8226; reduces death from breast cancer through early diagnosis </li>
                    </ul>

                    <p>
                        In addition to the workplace resource kit, an experienced Health Promotion Officer will assist you indeveloping and implementing an employeeeducation program on breast cancerand our program.
                    </p>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">Make a Special Request</h5>
                            <ul class="list-divider list-border list check">
                                <li><a class="text-theme-colored" href="{{route('group_bookings')}}">Group bookings</a></li>
                                <li><a href="{{route('In_your_workplace')}}">In your workplace</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

@endsection

