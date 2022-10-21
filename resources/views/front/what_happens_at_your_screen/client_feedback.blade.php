@extends('front.layouts.front')

@section('content')


    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">CLIENT FEEDBACK</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">CLIENT FEEDBACK</li>
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
                        You can provide feedback about our service at any time. To provide feedback, please click on the pink "Feedback" button that appears on the right of the page
                    </p>

                    <p>
                        Cancer Early Detection Centre regularly invites clients to submit feedback about their recent breast screening experience by completing a Client Feedback Survey online.
                    </p>

                    <div class="clearfix"></div>

                    <h4>
                        Why we collect client feedback?
                    </h4>

                    <p>
                        Client Feedback Surveys are essential in helping us to understand your breast screening experience and needs.
                        By looking at survey results and feedback, we can identify things we are doing well and highlight areas that need improving.
                        Collecting and using client feedback is also an organisational priority for Cancer Early Detection centre.
                    </p>

                    <div class="clearfix"></div>

                    <h4>
                        Is it compulsory to fill the survey?
                    </h4>

                    <p>
                        Participating in the survey is voluntary. We encourage everyone to complete it.
                        Your feedback is essential and will be used to help improve Cancer early detection services in the future.
                        If you choose not to complete the survey, this will not affect your invitation for your next breast screening appointment.
                    </p>

                    <div class="clearfix"></div>

                    <h4>
                        How can I be sure that my privacy will be protected?
                    </h4>

                    <p>
                        Cancer early detection centre complies with relevant legislation relating to confidentiality and privacy.
                        All survey responses are de-identified and anonymous unless you specifically request follow-up about the feedback you provide.
                        For more information, see cancer early detection center Privacy Policy.
                    </p>

                    <h4>
                        Can I speak to somebody about the survey?
                    </h4>


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


@endsection
