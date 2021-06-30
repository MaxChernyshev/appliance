@extends('front.layouts.locationlayout')

@section('header')
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/service.css') }}" media="screen" defer>
@endsection
@section('content')
    <main>

        <!-- HERO -->
        <section class="hero" style="background:rgba(54, 54, 54, .5) url('{{ asset($service->image) }}') no-repeat center center / cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h1>{{ $service->title }} Repair Los Angeles Ca</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE -->
        <section class="article">
            <div class="container">

                <div class="row article-item">
                    <div class="col-lg-6">
                        <img src="{{ asset($service->image_1) }}" alt="@if($service->image_1){{ $service->title }}@endif">
                    </div>
                    <div class="col-lg-6">
                        {!! $service->content_1 !!}
                    </div>
                </div>
                <div class="row article-item">
                    <div class="col-12">
                        {!! $service->content_1_1 !!}
                    </div>
                </div>

                <div class="row article-item">
                    <div class="col-lg-6">
                        <h2 class="title">Los Angeles Ca {{ $service->title }} Repair</h2>
                        {!! $service->content_2 !!}
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset($service->image_2) }}" alt="@if($service->image_2){{ $service->title }}@endif">
                    </div>
                </div>
                <div class="row article-item">
                    <div class="col-12">
                        {!! $service->content_2_1 !!}
                    </div>
                </div>



                <div class="row article-item">
                    <div class="col-lg-6">
                        <img src="{{ asset($service->image_3) }}" alt="@if($service->image_3){{ $service->title }}@endif">
                    </div>
                    <div class="col-lg-6">
                        {!! $service->content_3 !!}
                    </div>
                </div>
                <div class="row article-item">
                    <div class="col-12">
                        {!! $service->content_3_1 !!}
                    </div>
                </div>

                <div class="row article-item">
                    <div class="col-lg-6">
                        <h2 class="title">Los Angeles Ca {{ $service->title }} Repair</h2>
                        {!! $service->content_4 !!}
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset($service->image_4) }}" alt="@if($service->image_4){{ $service->title }}@endif">
                    </div>
                </div>
                <div class="row article-item">
                    <div class="col-12">
                        {!! $service->content_4_1 !!}
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
                            <img src="{{ asset('/assets/front/images/stars.sv') }}'" alt="5 star rating">
                            <p>VERY responsive! I called the guys on Thursday afternoon for a dishwasher issue and they came by the next day to diagnose the problem. Turns out I needed a new motor, which the guys ordered, picked up on a Saturday
                                morning, and installed right away.</p>
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
        <section class="appointment" id="book">
            <div class="container">
                <h2 class="title">Request Service</h2>
                <div class="row">
                    <div class="col-lg-6">

                        <x-contact-form />

                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/front/images/rating.webp') }}" alt="rating">
                        <h4>You can find us here</h4>
                        <iframe src="{{ $service->iframe }}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOCATIONS -->
        <section class="locations">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3>{{ $service->title }} Service Los Angeles CA covers all the following areas:</h3>
                        <p>
                            {{ $service->zip }}
                        </p>
                        <h3>Our {{ $service->title }} Repair Service is also available in the following cities:</h3>
                        <p>Agoura Hills Ca, Alhambra Ca, Altadena Ca, Arcadia Ca, Arleta Ca, Artesia Ca, Baldwin Village Ca, Bel Air Ca, Bell Canyon Ca, Beverly Glen Ca, Beverly Grove Ca, Beverly Hills Ca, Beverlywood Ca, Brentwood Ca, Burbank Ca,
                            Calabasas Ca, California Heights Ca, Canoga Park Ca, Central LA Ca, Century City Ca, Cerritos Ca, Chatsworth Ca, Chinatown Ca, Cornell Ca, Crenshaw Ca, Crescenta Highlands Ca, Culver City Ca, Cypress Park Ca, Del Aire Ca,
                            Downtown Ca, Eagle Rock Ca, East Hollywood Ca, Echo Park Ca, El Porto Ca, El Segundo Ca, Encino Ca, Gardena Ca, Glassell Park Ca, Glendale Ca, Granada Hills Ca, Harbor Ca, Hawthorne Ca, Hermosa Beach Ca, Hidden Hills Ca,
                            Highland Park Ca, Hollywood Ca, Inglewood Ca, La Cañada Flintridge Ca, Ladera Heights Ca, Lake Balboa Ca, Lake View Terrace Ca, Lakewood Ca, Lakewood Village Ca, Lawndale Ca, Leimert Park Ca, Leisure World Ca, Lennox Ca,
                            Little Armenia Ca, Lomita Ca, Long Beach Ca, Los Angeles Ca, Los Feliz Ca, Manhattan Beach Ca, Mar Vista Ca, Marina Del Rey Ca, Mid City Ca, Mid-Wilshire Ca, North Hills Ca, North Hollywood Ca, North Redondo Ca, Northeast
                            LA Ca, Northridge Ca, Oak Park Ca, Ocean Park Ca, Old Town Torrance Ca, Pacific Palisades Ca, Pacoima Ca, Palms Ca, Panorama City Ca, Park Mesa Heights Ca, Pasadena Ca, Playa Del Rey Ca, Porter Ranch Ca, Rancho Palos
                            Verdes Ca, Redondo Beach Ca, Reseda Ca, Rolling Hills Estates Ca, Rosemead Ca, San Fernando Ca, San Marino Ca, San Pedro Ca, Santa Monica Ca, Saratoga Hills Ca, Shadow Hills Ca, Sherman Oaks Ca, Sierra Madre Ca, Signal
                            Hill Ca, Silver Lake Ca, Simi Valley Ca, South Los Angeles Ca, South Park Ca, South Pasadena Ca, Studio City Ca, Sun Valley Ca, Sunland Ca, Sylmar Ca, Tarzana Ca, Thousand Oaks Ca, Toluca Lake Ca, Torrance Ca, Tujunga Ca,
                            Universal City Ca, Valley Glen Ca, Valley Village Ca, Van Nuys Ca, Venice Ca, Vermont Harbor Ca, View Park - Windsor Hills Ca, Walteria Ca, West Athens Ca, West Hills Ca, West Hollywood Ca, West Los Angeles Ca, Westwood
                            Ca, Wilmington Ca, Winnetka Ca</p>
                    </div>
                </div>
            </div>
        </section>
    </main>


@endsection



@section('footer')
@endsection
