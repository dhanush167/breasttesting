@extends('front.layouts.front')

@section('content')
    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-white-8" data-bg-img="images/bg/bg6.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 class="title">At screening</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="education" class="bg-silver-light">
        <div class="container">
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12">

                        <h5>
                            At screening
                        </h5>

                        <p>
                            You are assessed and examined by experienced medical and nursing staff attached to the cancer
                            early detection centre who will ensure your safety and privacy all the time.
                        </p>

                        <div class="clearfix"></div>

                        <h5>
                            What will happen at my appointment? History taking
                        </h5>

                        <p>
                            You will be welcomed by a cancer early detection staff member who will explain what happens at
                            the clinic.
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
                            Depending on your age , you will then undergo an Ultra sound scanning or mammography of the
                            breasts.
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

                        <p>
                            A radiographer will take two pictures of each breast.
                            You will stand in front of a special X-ray machine,
                            and she will gently position each breast on a plate on the machine.
                            Another plate will firmly press your breast and hold it still to take the image.
                            The radiographer will repeat the steps to take a side view of the breast.
                            You will then wait a few minutes while the radiographer checks the images to ensure they have
                            shown as much of your breast tissue as possible and the images have no motion blur.
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
                            It is normal to feel discomfort during a breast examination, scanning and mammography but this
                            should only last a few seconds.. Please tell the doctor , nurse or the radiographer if you feel
                            any pain. They will work with you to make sure that the breast screen is as comfortable as
                            possible.
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
                            Informed consent is your voluntary decision about medical care, made with knowledge and
                            understanding of the benefits and risks involved.
                        </p>

                        <p>
                            When you book a breast screen, you fill in a registration and consent form which gives informed
                            consent. If you do not have the capacity to give informed consent, consent may be given by your
                            legal medical agent or guardian.
                        </p>

                        <p style="color: deeppink;">
                            You can withdraw consent
                        </p>

                        <p>
                            You can withdraw consent at any time throughout the procedure. If you are distressed or wish to
                            stop, the breast screening should be halted and your concerns addressed.
                        </p>

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <video id="my-video" class="video-js vjs-fluid" controls preload="auto"
                            poster="{{ asset('videos/at_screening/doctor.png') }}" data-setup="{'controls': true, 'autoplay': false, 'preload': 'auto', 'responsive': true}">
                            <source src="{{ asset('videos/at_screening/doctor.mp4') }}" type="video/mp4" />
                            <source src="MY_VIDEO.webm" type="video/webm" />
                        </video>
                    </div>

                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <video id="my-video1" class="video-js vjs-fluid" controls preload="auto"
                            poster="{{ asset('videos/at_screening/nurse1.png') }}" data-setup="{'controls': true, 'autoplay': false, 'preload': 'auto', 'responsive': true}">
                            <source src="{{ asset('videos/at_screening/nurse1.mp4') }}" type="video/mp4" />
                            <source src="MY_VIDEO.webm" type="video/webm" />
                        </video>
                    </div>
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <video id="my-video2" class="video-js vjs-fluid" controls preload="auto"
                            poster="{{ asset('videos/at_screening/nurse2.png') }}" data-setup="{'controls': true, 'autoplay': false, 'preload': 'auto', 'responsive': true}">
                            <source src="{{ asset('videos/at_screening/nurse2.mp4') }}" type="video/mp4" />
                            <source src="MY_VIDEO.webm" type="video/webm" />
                        </video>
                    </div>

                </div>

                <div class="row">

                </div>

            </div>
        </div>
    </section>
@endsection
