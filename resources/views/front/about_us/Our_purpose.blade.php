@extends('front.layouts.front')

@section('content')


    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white"> Our purpose</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">    Our purpose</li>
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

                    <p>
                        The National Cancer Control Programme (NCCP) is a public health programme designed to reduce the number of cancer cases and deaths and improve quality of life of cancer patients
                    </p>

                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">All Services</h5>
                            <ul class="list-divider list-border list check">
                                <li><a class="text-theme-colored" href="{{route('our_programme')}}"> Our Programme</a></li>
                                <li><a href="{{route('our_purpose')}}"> Our Purpose</a></li>
                                <li><a href="{{route('governance')}}"> Governance</a></li>
                                <li><a href="#"> Partnerships </a></li>
                                <li>
                                    <a href="#">
                                        Measuring the success of our breast screening
                                        programme
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>


@endsection
