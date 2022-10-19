<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <meta name="description" content="Medikal - Health & Medical HTML Template" />
    <meta name="keywords" content=" clinic, dental, doctor, health, hospital, medical, medical theme, medicine, therapy" />
    <meta name="author" content="ThemeMascot" />

    <!-- Page Title -->
    <title>Home</title>

    <!-- Favicon and Touch Icons -->
    <link href="{{asset('images/favicon.png')}}" rel="shortcut icon" type="image/png">
    <link href="{{asset('images/apple-touch-icon.png')}}" rel="icon">
    <link href="{{asset('images/apple-touch-icon-72x72.png')}}" rel="icon" sizes="72x72">
    <link href="{{asset('images/apple-touch-icon-114x114.png')}}" rel="icon" sizes="114x114">
    <link href="{{asset('images/apple-touch-icon-144x144.png')}}" rel="icon" sizes="144x144">

    <!-- Stylesheet -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/jquery-ui.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/css-plugin-collections.css')}}" rel="stylesheet"/>
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="{{asset('css/menuzord-skins/menuzord-boxed.css')}}" rel="stylesheet"/>
    <!-- CSS | Main style file -->
    <link href="{{asset('css/style-main.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Preloader Styles -->
    <link href="{{asset('css/preloader.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="{{asset('css/custom-bootstrap-margin-padding.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link  href="{{asset('js/revolution-slider/css/settings.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('js/revolution-slider/css/layers.css')}}" rel="stylesheet" type="text/css"/>
    <link  href="{{asset('js/revolution-slider/css/navigation.css')}}" rel="stylesheet" type="text/css"/>

    <!-- CSS | Theme Color -->
    <link href="{{asset('css/colors/theme-skin-blue.css')}}" rel="stylesheet" type="text/css">

    <!-- external javascripts -->

    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="{{asset('js/jquery-plugin-collection.js')}}"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="{{asset('js/revolution-slider/js/jquery.themepunch.tools.min.js')}}"></script>
    <script src="{{asset('js/revolution-slider/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Header -->
<body>



<div style="float: right;margin-right: 2em;"
     id='google_translate_element'>
</div>


<div class="clearfix">
</div>


@include('front.layouts.navbar')



@yield('content')


<!-- Footer -->
<footer id="footer" class="footer pb-0" data-bg-img="{{asset('images/footer-bg.png')}}" data-bg-color="#25272e">
    <div class="container pt-90 pb-60">
        <div class="row">
            <div class="col-sm-6 col-md-3">
                <div class="widget dark"> <img alt="" src="{{asset('images/logo-wide.png')}}">
                    <p class="font-12 mt-10 mb-10">
                        The National Cancer Control Programme (NCCP) was established in 1980 on the recommendations made by a World Health Organization (WHO) team to the Ministry of Health after a detailed study on mortality and morbidity of cancers in Sri Lanka.The National Cancer Control Programme (NCCP) was established in 1980 on the recommendations made by a World Health Organization (WHO) team to the Ministry of Health after a detailed study on mortality and morbidity of cancers in Sri Lanka.
                    </p>
                    <a class="btn btn-default btn-transparent btn-xs btn-flat mt-5" href="{{route('our_programme')}}">Read more</a>
                    <ul class="styled-icons icon-dark icon-theme-colored icon-circled icon-sm mt-20">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom-theme-colored-2">Latest News</h5>
                    <div class="latest-posts">
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Sustainable Construction</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Industrial Coatings</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                        <article class="post media-post clearfix pb-0 mb-10">
                            <a class="post-thumb" href="#"><img src="https://placehold.it/80x55" alt=""></a>
                            <div class="post-right">
                                <h5 class="post-title mt-0 mb-5"><a href="#">Storefront Installations</a></h5>
                                <p class="post-date mb-0 font-12">Mar 08, 2015</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom-theme-colored-2">Quick Contact</h5>
                    <form id="footer_quick_contact_form" name="footer_quick_contact_form" class="quick-contact-form" action="https://kodesolution.com/html/2016/medikal-html/demo/includes/quickcontact.php" method="post">
                        <div class="form-group">
                            <input name="form_email" class="form-control" type="text" required="" placeholder="Enter Email">
                        </div>
                        <div class="form-group">
                            <textarea name="form_message" class="form-control" required="" placeholder="Enter Message" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <input name="form_botcheck" class="form-control" type="hidden" value="" />
                            <button type="submit" class="btn btn-default btn-transparent btn-xs btn-flat mt-0" data-loading-text="Please wait...">Send Message</button>
                        </div>
                    </form>

                    <!-- Quick Contact Form Validation-->
                    <script type="text/javascript">
                        $("#footer_quick_contact_form").validate({
                            submitHandler: function(form) {
                                var form_btn = $(form).find('button[type="submit"]');
                                var form_result_div = '#form-result';
                                $(form_result_div).remove();
                                form_btn.before('<div id="form-result" class="alert alert-success" role="alert" style="display: none;"></div>');
                                var form_btn_old_msg = form_btn.html();
                                form_btn.html(form_btn.prop('disabled', true).data("loading-text"));
                                $(form).ajaxSubmit({
                                    dataType:  'json',
                                    success: function(data) {
                                        if( data.status == 'true' ) {
                                            $(form).find('.form-control').val('');
                                        }
                                        form_btn.prop('disabled', false).html(form_btn_old_msg);
                                        $(form_result_div).html(data.message).fadeIn('slow');
                                        setTimeout(function(){ $(form_result_div).fadeOut('slow') }, 6000);
                                    }
                                });
                            }
                        });
                    </script>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="widget dark">
                    <h5 class="widget-title line-bottom-theme-colored-2">Opening Hours</h5>
                    <div class="opening-hours">
                        <ul class="list list-border">
                            <li class="clearfix">
                                <span class="text-theme-color-2"><i class="fa fa-clock-o mr-5"></i>
                                    Monday to Friday
                                </span>
                                <br>
                                <div class="text-white">
                                    9.00 am - 3.00 pm
                                </div>
                            </li>
                            <li>
                                Closed on weekends and public holidays
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="horizontal-contact-widget mt-30 pt-30 text-center">
                    <div class="col-sm-12 col-sm-4">
                        <div class="each-widget"> <i class="pe-7s-phone font-36 mb-10"></i>
                            <h5 class="text-white">Call Us</h5>
                            <p>Phone number: <a href="#">0113 159 227</a></p>
                            <p>Phone number: <a href="#">+94 11 2368627</a></p>
                            <p>Fax number: <a href="#">+94 11 2368627</a></p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-4 mt-sm-50">
                        <div class="each-widget"> <i class="pe-7s-map font-36 mb-10"></i>
                            <h5 class="text-white">Address</h5>
                            <p>
                                555/5, Public Health Complex, Elvitigala Mawatha, Colombo 05, Sri Lanka.
                            </p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-sm-4 mt-sm-50">
                        <div class="each-widget"> <i class="pe-7s-mail font-36 mb-10"></i>
                            <h5 class="text-white">Email</h5>
                            <p>
                                <a href="#">
                                    cedc.nccp@gmail.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <ul class="list-inline styled-icons icon-hover-theme-colored icon-gray icon-circled text-center mt-30 mb-10">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-theme-colored p-20">
        <div class="row text-center">
            <div class="col-md-12">
                <p class="text-white font-11 m-0">Copyright &copy;2022 3DH DESIGN. All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
<!-- end wrapper -->

<!-- Footer Scripts -->
<!-- JS | Custom script for all pages -->
<script src="{{asset('js/custom.js')}}"></script>




<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

<script>
    function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en' , includedLanguages : 'si,ta,en'}, 'google_translate_element');
    }
</script>



<!-- SLIDER REVOLUTION 5.0 EXTENSIONS
      (Load Extensions only on Local File Systems !
       The following part can be removed on Server for On Demand Loading) -->
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.actions.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.carousel.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.migration.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.navigation.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.parallax.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/revolution-slider/js/extensions/revolution.extension.video.min.js')}}"></script>


</body>
</html>
