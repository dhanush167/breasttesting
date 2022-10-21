@extends('front.layouts.front')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">Governance</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored"> Governance</li>
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

                    <h2>
                        Governance
                    </h2>

                    <p>
                        <strong>
                            Dr. Champika Wickramasinghe
                        </strong>
                    </p>

                    <p>
                        <strong>
                            DDG, NCD
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Director, NCCP
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Advisors
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Dr. Suraj Perera
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Dr. Hasarali
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Dr. Dumindu
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Mrs. Inoka
                        </strong>
                    </p>

                    <p>
                        <strong>
                            Radiographer
                        </strong>
                    </p>


                </div>
                <div class="col-sm-6 col-md-4 col-lg-4">
                    <div class="sidebar sidebar-right mt-sm-30">
                        <div class="widget">
                            <h5 class="widget-title line-bottom">About Us</h5>
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
