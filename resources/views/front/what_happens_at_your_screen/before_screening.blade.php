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
                            <h3 class="title text-white">Before Screening</h3>
                            <ol class="breadcrumb mt-10 white">
                                <li><a class="text-white" href="#">Home</a></li>
                                <li class="active text-theme-colored">Before Screening</li>
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
                                women of all ages possess a risk.
                                It is emphasized if you have family history or other risk factors for breast cancer (add short cut to Your breast cancer risk).
                                Any women after 35 years of age are advised to go through breast cancer screening.
                            </p>
                        </div>

                        <div class="clearfix"></div>

                        <h5>
                            Scope of our programme
                        </h5>

                        <p>
                            Breast cancer detect is a population screening program,
                            which means we offer our service to the eligible group in the community proven to benefit most from screening.
                            Breast screening is known to be most effective in reducing breast cancer deaths and the impact of treatment among women .
                            Breast cancer detect is a free service for women.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            What if I have breast symptoms or changes?
                        </h5>

                        <p>
                            If you have noticed an  unusual change in your breasts  such as a lump, pain or discharge from the nipple, it is important that you visit your doctor as soon as possible.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            What is breast screening?
                        </h5>

                        <p>
                            A breast screening is a process of activities conducted to identify risk factors for breast cancer and to detect early developments of breast cancer . This will include answering few questions ,
                            examining the breast by expert medical personnel,
                            and also do a scanning of the breast Breast screening can find cancers that are too small to see or feel.
                            The earlier breast cancer is found, the better the chance of a positive outcome.
                        </p>


                        <div class="clearfix"></div>

                        <h5>
                            Is the breast screening safe?
                        </h5>

                        <p>
                            You are assessed and examined by experienced medical and nursing staff attached to the cancer early detection centre who will ensure your safety and privacy all the time. When you undergo a mammogram your breasts are exposed to a very small amount of radiation. Research shows that the benefits of breast screens in finding cancer early outweigh any radiation risks. All procedure will be done after explaining to you and with your consent.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            Family history
                        </h5>

                        <p>
                            Cancer early detection centre collects information about the client’s  family history of breast cancer and family and personal history of ovarian cancer to provide them with better care. We use this information to estimate the personal risk of developing breast cancer. Before completing your registration form, please talk to your family about your family history.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            What should I wear to my appointment?
                        </h5>

                        <p>
                            Wear a skirt or slacks and a top so that you can remove your top for the breast screening
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            What should I wear to my appointment?
                        </h5>

                        <p>
                            Wear a skirt or slacks and a top so that you can remove your top for the breast screen.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            Book your appointment
                        </h5>

                        <ul>
                            <li> My breast check</li>
                            <li>  email by cedc.nccp@gmail.com</li>
                            <li>  or by calling 0223259227 between 8.30 am to3.30 pm on any weekday.</li>
                        </ul>

                        <p>
                            <strong>
                                Opening hours
                            </strong>
                        </p>

                        <p>
                            8.30 am to 3.00pm on weekdays except on public holiday
                        </p>

                        <div class="clearfix"></div>

                        <p>
                            <strong>
                                Loaction
                            </strong>
                        </p>

                        <a target="_blank" href="https://goo.gl/maps/tGAMBY59vkQd9mtw9">
                            https://goo.gl/maps/tGAMBY59vkQd9mtw9
                        </a>



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
