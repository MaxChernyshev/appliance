@extends('front.layouts.locationlayout')

@section('header')
@endsection

@section('content')
<main>

    <!-- HERO -->
    <section class="hero" style="background:rgba(54, 54, 54, .5) url('{{ $location->image }}') no-repeat center center / cover;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8">
                    <h1>Appliance Repair {{ $location->title }}</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- ARTICLE -->
    <section class="article">
        <div class="container">
            <div class="row article-item">
                <div class="col-lg-6">
                    <img src="{{ asset($location->image_1) }}" alt="@if($location->image_1){{ $location->title }}@endif">
                </div>
                <div class="col-lg-6">
                    {!! $location->content_1 !!}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! $location->content_1_1 !!}
                </div>
            </div>


            <div class="row article-item">
                <div class="col-lg-6">
                    {!! $location->content_2 !!}
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset($location->image_2) }}" alt="@if($location->image_2){{ $location->title }}@endif">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! $location->content_2_1 !!}
                </div>
            </div>



            <div class="row article-item">
                <div class="col-lg-6">
                    <img src="{{ asset($location->image_3) }}" alt="@if($location->image_3){{ $location->title }}@endif">
                </div>
                <div class="col-lg-6">
                    {!! $location->content_3 !!}
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! $location->content_3_1 !!}
                </div>
            </div>




            <div class="row article-item">
                <div class="col-lg-6">
                    {!! $location->content_4 !!}
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset($location->image_4) }}" alt="@if($location->image_4){{ $location->title }}@endif">
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    {!! $location->content_4_1 !!}
                </div>
            </div>

        </div>
    </section>

    <!-- TESTIMONIALS -->
    <section class="testimonials">
        <div class="container">
            <h2 class="title">Los Angeles CA Appliance Service Customers Feedback</h2>
            <div class="row">
                <div class="col-lg-4">
                    <div class="testimonials-item">
                        <div class="headline">
                            <h6>Victor Rice</h6>
                            <img src="{{ asset('/assets/front/images/logo-facebook.png') }}" alt="facebook">
                        </div>
                        <img src="{{ asset('/assets/front/images/stars.svg') }}" alt="5 star rating">
                        <p>My dryer was giving me problems so I decided to give AnB Appliance Repair a try. They were friendly. They were willing to work around my schedule. They came within 24hrs. They fixed my dryer within an hour. I will
                            definitely call them again if I need another repair!</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item">
                        <div class="headline">
                            <h6>Carlos Mason</h6>
                            <img src="{{ asset('/assets/front/images/logo-google.png') }}" alt="google">
                        </div>
                        <img src="{{ asset('/assets/front/images/stars.svg') }}" alt="5 star rating">
                        <p>VERY responsive! I called the guys on Thursday afternoon for a dishwasher issue and they came by the next day to diagnose the problem. Turns out I needed a new motor, which the guys ordered, picked up on a Saturday morning,
                            and installed right away.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonials-item">
                        <div class="headline">
                            <h6>Marcus Stone</h6>
                            <img src="{{ asset('/assets/front/images/logo-yelp.png') }}" alt="yelp">
                        </div>
                        <img src="{{ asset('/assets/front/images/stars.svg') }}" alt="5 star rating">
                        <p>I had a hard time finding someone who would work on my stove be course it was quite old. The repairman arrived during the time they said he would, diagnosed the problem, and fixed it for a reasonable price. I will
                            definitely use them again! <br>Thank you!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>





    <!-- FORM -->
    <section class="appointment">
        <div class="container">
            <h2 class="title">Request Service</h2>
            <div class="row">
                <div class="col-lg-6">
                    <x-contact-form />
{{--                    <form class="order-form">--}}
{{--                        <legend>Book a Repair Appointment</legend>--}}
{{--                        <p>Personal Info<i>*</i></p>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="col-12 col-md-6 form-group">--}}
{{--                                <input type="text" class="form-control" placeholder="Name" required>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6 form-group">--}}
{{--                                <input type="email" class="form-control" placeholder="Email" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="col-12 col-md-6 form-group">--}}
{{--                                <input type="tell" class="form-control" placeholder="Phone" required>--}}
{{--                            </div>--}}
{{--                            <div class="col-12 col-md-6 form-group">--}}
{{--                                <input type="email" class="form-control" placeholder="Address" required>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p>Date & Time<i>*</i></p>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="col form-group">--}}
{{--                                <input class="form-control" type="date">--}}
{{--                            </div>--}}
{{--                            <div class="col form-group">--}}
{{--                                <input class="form-control" type="time">--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p>Service Type<i>*</i></p>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Refrigerator">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox1">Refrigerator</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Wine-Cooler">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox2">Wine-Cooler</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Ice-Maker">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox3">Ice-Maker</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Freezer">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox4">Freezer</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox8" value="Dishwasher">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox8">Dishwasher</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox5" value="Frabage Disposal">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox5">Garbage Disposal</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox6" value="Dryer">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox6">Dryer</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox7" value="Washer">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox7">Washer</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox9" value="Stove">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox9">Stove</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox10" value="Oven">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox10">Oven</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox12" value="Range">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox12">Range</label>--}}
{{--                            </div>--}}
{{--                            <div class="form-check form-check-inline">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox11" value="Microwave">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox11">Microwave</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <p>Description<i>*</i></p>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="col form-group">--}}
{{--                                <textarea class="form-control" placeholder="Brand and a brief description of an issue" rows="5"></textarea>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="form-row">--}}
{{--                            <div class="form-check form-check-inline agreement">--}}
{{--                                <input class="form-check-input" type="checkbox" id="inlineCheckbox13" value="">--}}
{{--                                <label class="form-check-label" for="inlineCheckbox13">I understand that the $69 service call will be applied towards the total repair price</label>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <button type="submit" class="btn btn-primary order-form-btn">Schedule My Appointment</button>--}}
{{--                    </form>--}}
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('assets/front/images/rating.webp') }}" alt="rating">
                    <h4>You can find us here</h4>
                    <iframe src="{{ $location->iframe }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCATIONS -->
    <section class="locations">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h3>Appliance Service {{ $location->title }} La covers all the following areas:</h3>
                    <p>
                        {{ $location->zip }}
                    </p>
                    <p>Amana Repair Service, LG Repair Service, Bosch Repair Service. Magic Chef Repair Service, Dacor Repair Service, Maytag Repair Service, DCS Repair Service, Samsung Repair Service, Fisher & Paykel Repair Service, Sub-Zero Repair Service, Frigidaire Repair Service, Thermador Repair Service, Hotpoint Repair Service, Viking Repair Service, Kenmore Repair Service, Whirlpool Repair Service, GE Appliances Repair Service, Wolf Repair Service, Jenn-Air Repair Service, Commercial Repair Service, KitchenAid Repair Service</p>
                    <p>Refrigerator Repair, Freezer Repair, Ice-Maker Repair, Wine Cooler Repair, Range Repair, Stove Repair, Oven Repair, Dryer Repair, Washer Repair, Dishwasher Repair</p>
                </div>
            </div>
        </div>
    </section>

</main>

@endsection



@section('footer')
@endsection
