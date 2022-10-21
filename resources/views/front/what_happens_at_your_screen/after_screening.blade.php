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
                            <h3 class="title text-white">AFTER SCREENING</h3>
                            <ol class="breadcrumb mt-10 white">
                                <li><a class="text-white" href="#">Home</a></li>
                                <li class="active text-theme-colored">AFTER SCREENING</li>
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
                            When will I get my results?
                        </h5>

                        <p>
                            If abnormality is detected at the breast examination and the ultra sound scanning you will be referred to the nearest breast clinic.
                        </p>
                        <p>
                            The mammogram will be sent to a radiologist and your results will be sent to you within 2-4 weeks.
                        </p>

                        <div class="clearfix"></div>

                        <p>
                            These include:
                        </p>

                        <ul>
                            <li>&#8226; encouraging participation</li>
                            <li>&#8226; cancer detection rates</li>
                            <li>
                                &#8226; minimising the negative impacts of screening on clients attending our program
                            </li>
                            <li>
                                &#8226; getting results or treatment as soon as possible
                            </li>
                            <li>
                                &#8226; ensuring our clients have the best possible experience at the point of service
                            </li>
                        </ul>

                        <br>

                        <h4>
                            Participation
                        </h4>


                        <p>
                    <span style="text-indent: -1em; font-size: 1.125rem;">
                       Participation relates to an appropriate level of access and participation of women in the target population.
                    </span>
                        </p>

                        <br>

                        <h4>
                            Cancer detection rates
                        </h4>

                        <p>
                    <span style="text-indent: -1em; font-size: 1.125rem;">
                      We aim to maximise the early detection of breast cancer in the target population.
                      Safety and harm minimisation.
                    </span>
                        </p>

                        <p>
                    <span style="text-indent: -1em; font-size: 1.125rem;">
                          Breast cancer detection is maximised and harm, either physical or emotional, is minimised.
                    </span>
                        </p>

                        <h4>
                            Timeliness
                        </h4>

                        <p>
                      <span style="text-indent: -1em; font-size: 1.125rem;">
                      Timeliness refers to our clients being provided with access to screening and assessment services in a timely and efficient manner.
                     </span>
                        </p>

                        <h4>
                            Client focused
                        </h4>

                        <p>
                            We have a number of initiatives to deepen its understanding of our clients' experience with the breast screening program. We work to address all client feedback to ensure the service is delivered in a manner which is acceptable, in accessible, non-threatening and comfortable environments.
                        </p>
                        <p>
                            This helps us to offer a service that is of high quality and client centric, meaning our clients feel well informed, appropriately engaged and supported.
                        </p>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4">
                        <div class="sidebar sidebar-right mt-sm-30">
                            <div class="widget">
                                <h5 class="widget-title line-bottom">
                                    Know about
                                    <br>
                                    detecting breast
                                    <br>
                                    cancer at CEDC
                                </h5>
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
