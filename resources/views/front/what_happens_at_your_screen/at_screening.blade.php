@extends('front.layouts.front')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">At screening</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">At screening</li>
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
                        At screening
                    </h5>

                    <p>
                        You are assessed and examined by experienced medical and nursing staff attached to the cancer early detection centre who will ensure your safety and privacy all the time.
                    </p>

                    <div class="clearfix"></div>

                    <h5>
                        What will happen at my appointment? History taking
                    </h5>

                    <p>
                        You will be welcomed by a cancer early detection staff member who will explain what happens at the clinic.
                        You will be asked few questions to assess the cancer risk.
                    </p>

                    <div class="clearfix"></div>

                    <h5>
                        History taking
                    </h5>

                    <p>
                        A medical expert will then examine your breasts to detect any abnormalities in your breasts.
                    </p>

                    <p>
                        Depending on your age , you will then undergo an Ultra sound scanning or mammography of the breasts.
                    </p>

                    <p>
                        Ultra sound scan of the breasts
                    </p>

                    <img src="pg_img844/first.png" alt="">

                    <p>
                        A medical officer will do a scanning of your breasts using a
                    </p>

                    <p style="color: deeppink;">
                        At the mammogram
                    </p>

                    <img src="pg_img844/second.png" alt="">

                    <p style="margin-top: 2em;">
                        A radiographer will take two pictures of each breast.
                        You will stand in front of a special X-ray machine,
                        and she will gently position each breast on a plate on the machine.
                        Another plate will firmly press your breast and hold it still to take the image.
                        The radiographer will repeat the steps to take a side view of the breast.
                        You will then wait a few minutes while the radiographer checks the images to ensure they have shown as much of your breast tissue as possible and the images have no motion blur.
                        If this is the case, then more images may need to be taken or retaken.
                    </p>

                    <p style="color: deeppink;">
                        Can I talk to the radiographer
                    </p>

                    <p>
                        Yes, communicating with your radiographer is important,
                        especially if you have any concerns.
                        They will be happy to answer any questions.
                    </p>

                    <p style="color: deeppink;">
                        Will it hurt?
                    </p>

                    <p>
                        It is normal to feel discomfort during a breast examination, scanning and mammography but this should only last a few seconds.. Please tell the doctor , nurse or the radiographer if you feel any pain. They will work with you to make sure that the breast screen is as comfortable as possible.
                    </p>

                    <p>
                        <strong>
                            You can stop at any time
                        </strong>
                    </p>

                    <p>
                        What is informed consent?
                    </p>

                    <p>
                        Informed consent is your voluntary decision about medical care, made with knowledge and understanding of the benefits and risks involved.
                    </p>

                    <p>
                        When you book a breast screen, you fill in a registration and consent form which gives informed consent. If you do not have the capacity to give informed consent, consent may be given by your legal medical agent or guardian.
                    </p>

                    <p style="color: deeppink;">
                        You can withdraw consent
                    </p>

                    <p>
                        You can withdraw consent at any time throughout the procedure. If you are distressed or wish to stop, the breast screening should be halted and your concerns addressed.
                    </p>

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
