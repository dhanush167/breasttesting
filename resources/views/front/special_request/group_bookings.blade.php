@extends('front.layouts.front')

@section('content')

    <!-- Section: inner-header -->
    <section class="inner-header divider parallax layer-overlay overlay-dark-8" data-bg-img="images/bg/bg1.jpg">
        <div class="container pt-60 pb-60">
            <!-- Section Content -->
            <div class="section-content">
                <div class="row">
                    <div class="col-md-12 xs-text-center">
                        <h3 class="title text-white">Group bookings</h3>
                        <ol class="breadcrumb mt-10 white">
                            <li><a class="text-white" href="#">Home</a></li>
                            <li class="active text-theme-colored">Group bookings</li>
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
                        Group bookings
                    </h3>


                    <h3 style="color: orangered;">
                        <strong>
                            Some things are better with friends!
                        </strong>
                    </h3>

                    <p>
                        Group bookings are a great way to support your community to have a breast screen.
                        Perhaps you work with a group of people who may need some extra support to screen,
                        or you are part of a club that would like to screen together.
                    </p>

                    <p>
                        Group bookings are just like regular breast screen appointments.
                        The difference is approximately 4-10 appointments are booked on behalf of a group.
                         This allows the group to attend their appointment together and support each other.
                    </p>

                    <p>
                        <strong>
                            The benefits of group bookings include:
                        </strong>
                    </p>

                    <ul>
                        <li>&#8226; Group members can provide each other with support</li>
                        <li>&#8226; Group bookings are more private</li>
                        <li>&#8226; Group members have more time to ask staff questions and debrief after their screen</li>
                    </ul>

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
