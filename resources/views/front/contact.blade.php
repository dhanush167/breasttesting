@extends('front.layouts.front')

@section('content')


    <section id="education" class="bg-silver-light">
        <div class="container">
            <div class="section-content">
                <div class="row">


                    <div class="col-md-4">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20">
                                <a class="media-left pull-left" href="#"> <i class="pe-7s-map-2"></i></a>
                                <div class="media-body"> <strong>OUR OFFICE LOCATION</strong>
                                    <h5 class="text-black">Call Us</h5>
                                    <p>Phone number:
                                        <br>
                                        <a href="#">0113 159 227</a>
                                    </p>
                                    <p>Phone number:
                                        <br>
                                        <a href="#">+94 11 2368627</a>
                                    </p>
                                    <p>Fax number:
                                        <br>
                                        <a href="#">+94 11 2368627</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-call text-theme-colored"></i></a>
                                <div class="media-body"> <strong>Address</strong>
                                    <p>
                                        555/5, Public Health Complex, Elvitigala Mawatha, Colombo 05, Sri Lanka.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12">
                            <div class="icon-box left media bg-deep p-30 mb-20"> <a class="media-left pull-left" href="#"> <i class="pe-7s-mail text-theme-colored"></i></a>
                                <div class="media-body"> <strong>OUR CONTACT E-MAIL</strong>
                                    <p>
                                        cedc.nccp@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-8">
                        <h2 class="mt-0 mb-20 line-height-1">Interested in discussing?</h2>
                        <form id="contact_form" name="contact_form" class="" action="#" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="form_name">Name <small>*</small></label>
                                        <input id="form_name" name="form_name" class="form-control" type="text" placeholder="Enter Name" required="">
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="form_email">Email <small>*</small></label>
                                        <input id="form_email" name="form_email" class="form-control required email" type="email" placeholder="Enter Email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_name">Subject <small>*</small></label>
                                        <input id="form_subject" name="form_subject" class="form-control required" type="text" placeholder="Enter Subject">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" name="form_phone" class="form-control" type="text" placeholder="Enter Phone">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="form_name">Message</label>
                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" placeholder="Enter Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-dark btn-theme-colored btn-flat mr-5" data-loading-text="Please wait...">Send your message</button>
                            </div>
                        </form>
                    </div>



                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container-fluid pt-0 pb-0">
            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3968.3254072949053!2d80.5349095!3d5.9498204999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae13f408ac96c3b%3A0xacf4b3bec9360bb8!2sInstitute%20of%20Palliative%20Medicine%20of%20Sri%20Lanka!5e0!3m2!1sen!2slk!4v1665140618313!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </section>

@endsection
