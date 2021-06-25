@extends('front.layouts.layout')

@section('header')
@endsection
@section('styles')
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}" media="screen" defer>
@endsection
@section('content')
    <main>

        <!-- HERO -->
        <section class="main-hero">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p>Welcome to 5 Star Rated!</p>
                        <h1>Appliance Repair Los Angeles CA</h1>
                        <ul class="hero-list">
                            <li class="hero-item">
                                Honest and Affordable Repair Pricing
                            </li>
                            <li class="hero-item">
                                Expert, Certified Technicians
                            </li>
                            <li class="hero-item">
                                Cash, Checks and Credit Card Payments
                            </li>
                            <li class="hero-item">
                                Service for All Major Brands
                            </li>
                            <li class="hero-item">
                                24/7 Customer Service Support
                            </li>
                            <li class="hero-item">
                                On-Site Same / Next Day Service
                            </li>
                            <li class="hero-item">
                                100% Satisfaction Rate
                            </li>
                        </ul>
                        <p>We’re open 7am – 8pm all week long to find time for everyone.</p>
                        <p>Call and Get Your Refrigerator, Washer, Dryer, Stove, Microwave or any other Appliance Repair Today.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- OFFERS -->
        <section class="offers">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-6">
                        <div class="offers-item">
                            <h3>FREE SERVICE CALL</h3>
                            <h6>WITH COMPLETED REPAIR</h6>
                            <h2>CALL NOW</h2>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6">
                        <div class="offers-item">
                            <h3>$25 OFF LABOR</h3>
                            <h6>WITH ANY APPLIANCE REPAIR SERVICES</h6>
                            <h2>CALL NOW</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section class="services">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-9 services-info">
                        <h2 class="title">Appliance Repair Service</h2>
                        <hr>
                        <p>At Appliance Repairmen we know that you worked hard in order to make your life easier with the help of different appliances. And it’s our job to keep them running. You don’t have to throw appliances away simply because they are not working as they usually do. There is no repair job, even the toughest one, our professional repairman cannot handle. Whenever you face a broken appliance, you are just one phone call away from getting it fixed and running smoothly as new again!</p>
                        <hr>
                        <h4>Our services include all types of minor or major repairs for all brands and models</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/refrigerator.svg') }}" alt="refrigerator">
                        <p>Refrigerator Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/wine-cooler.svg') }}" alt="wine-cooler">
                        <p>Wine Cooler Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/ice-maker.svg') }}" alt="ice-maker">
                        <p>Ice-Maker <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/freezer.svg') }}" alt="freezer">
                        <p>Freezer <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/garbage-disposal.svg') }}" alt="garbage-disposal">
                        <p>Garbage Disposal Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/dryer.svg') }}" alt="dryer">
                        <p>Dryer <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/washer.svg') }}" alt="washer">
                        <p>Washer <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/dishwasher.svg') }}" alt="dishwasher">
                        <p>Dishwasher Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/stove.svg') }}" alt="stove">
                        <p>Stove <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/oven.svg') }}" alt="oven">
                        <p>Oven <br> Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/microwave.svg') }}" alt="microwave">
                        <p>Microwave Repair</p>
                    </div>
                    <div class="col-6 col-md-3 col-lg-2 services-item">
                        <img src="{{ asset('/assets/front/images/services/range.svg') }}" alt="range">
                        <p>Range <br> Repair</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ABOUT -->
        <section class="about">
            <div class="container">
                <h2 class="title">Services Provided by Appliance Repair in Los Angeles CA</h2>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Refrigerator Repair Los Angeles CA</h4>
                        <p>If your refrigerator is no longer keeping its cool and is on the very verge of spoiling the food and eatables then Los Angeles Appliance Repair California is there for you to serve the purpose. Our local refrigerator repair technicians will get your refrigerator back to its functioning state quite proficiently and meticulously without you having to lose your cool. Their skilled hands will release you from the hassle of having to deal with the malfunctioned fridge. So if your refrigerator ever breakdown know that we offer same-day refrigerator repair at low costs. Some of the common signs of a problematic refrigerator are; fridge making constant noises, not cooling the food properly, over freezing the stuff inside, fridge leaking from a certain point, worn-out thermostat. For refrigerator repair for these or any other issue contact Los Angeles Appliance Repair in California, and we will immediately send a technician right away. For refrigerator repair we offer: same-day service, parts replacement, troubleshooting, temperature maintenance, etc.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-1.webp') }}" alt="refrigerator repair service">
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-2.webp') }}" alt="freezer repair service">
                    </div>
                    <div class="col-lg-6">
                        <h4>Freezer Repair Los Angeles CA</h4>
                        <p>Freezer is undoubtedly a great convenience which prevents food from spoiling and saves you time and money. Freezers are manufactured to last, and you can expect to get somewhere from 10 to 20 years out of your precious appliance. But if your freezer is no longer freezing as it supposed to then that shouldn't concern you, just ask for quick help from Los Angeles Appliance Repair in California. We are always ready to take your concerns as ours. Signs that you require a freezer repair service include: there's a frost builds-up inside, water leaking from the freezer, freezer stops running, the temperature is too warm, freezer making noises, etc. We know that our work is time-critical, as food can spoil quickly that’s why we strive to answer your call quickly and our technicians will arrive on time at your place to diagnose and fix your freezer. If you see any of these signs or some other signs feel free to contact us. We've been in the refrigeration business for a long time and are well versed in all types of repairs at Freezer Repair Los Angeles Ca.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Oven Repair Los Angeles CA</h4>
                        <p>If you have guests due and want to serve them with some scrumptiously baked items but your oven isn’t doing you the favor or if your child loves pizza but you aren’t able to bake due to malfunctioned safety valve then fret not! Because we are here to help you treat your loved ones with amazing items by offering oven repair services. You just have to call us and our oven repair servicemen will be there in the next few minutes to repair the failed heating system or restore the faulty igniter or even replace the defective thermostat. Our professional technicians know the drill and can detect the problem in split seconds. Their highest level of professionalism, fairness, and integrity is what keeps us moving smoothly and makes us rank among the top repairers in town. We serve ovens of all brands and models and can tackle any sort of issues with them. So do not hesitate and give us a call right now to get your oven working again as soon as possible with the help of Range Repair Los Angeles Ca friendly, reliable, and professional technicians.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-3.webp') }}" alt="oven repair service">
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-4.webp') }}" alt="dishwasher repair service">
                    </div>
                    <div class="col-lg-6">
                        <h4>Dishwasher Repair Los Angeles CA</h4>
                        <p>Who likes cleaning dirty dishes all day long? Dishwasher for that matter is a true blessing saving our precious time. It gives one immense satisfaction that after a long tiring day one doesn’t have to hand wash the dishes rather a dishwasher is there to serve the very purpose. But what if the dishwasher fails to start properly or produces an abnormal odor or starts leaking or water does not drain and remains at the bottom or worse yet doesn't start to begin with? The answer lies with us, just call us right away and our team of friendly and professional technicians will immediately reach your doorstep to give you dishwasher repair services.  They will have a detailed inspection and then will restore your dishwasher to perfect working condition thereafter. Our dishwasher repair services are so on point that you will feel as if though it has never been serviced before. You don't want to take any chances on your dishwasher because it is such an important feature of the kitchen. So book your appointment with us to get the best Dishwasher Repair Los Angeles Ca service.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Microwave Repair Los Angeles CA</h4>
                        <p>Microwaves are an essential part of our busy lives. Repairing a microwave can seem to be an expensive and time-consuming task, particularly if you live in Los Angeles. Our microwave repair technicians at Microwave Repair Los Angeles Ca are capable of diagnosing a wide variety of problems and provide the finest microwave repair service in Los Angeles. But you don't have to be concerned with your budget being jeopardized by a faulty microwave. We aim to do our utmost to keep the cost of repairing such appliances to a minimum. Is your microwave giving you a tough time by not heating the food properly? Or is the display not working properly? Or worse yet it has stopped working altogether? Worry not! We have you covered. In any case, we will send certified local repairmen the same day to diagnose microwave repair issues and have them sorted proficiently. Our technicians will not only check, detect and repair the appliance but will also provide you advice on how to maintain your microwave. So pick your phone and schedule your appointment for the best microwave service.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-5.webp') }}" alt="microwave repair service">
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-6.webp') }}" alt="dryer repair service">
                    </div>
                    <div class="col-lg-6">
                        <h4>Dryer Repair Los Angeles CA</h4>
                        <p>Dryer is an absolutely great invention that has eased the lives of people. With it, one doesn’t have to wait for long hours of air drying the clothes. But what if your dryer has stopped drying clothes altogether? Or takes longer than usual to dry the clothes? Whatever the issue might be Los Angeles Appliance Repair in California is here for your dryer repair services. Our trained specialists can do the dryer repairs regardless of the model or make of it. Signs that you require a dryer repair service include: the dryer is noisy, does not start, does not provide enough heat, the timer does not advance, takes longer than usual to dry, does not shut off, extremely hotter than usual, etc. All these problems our Los Angeles Ca Dryer Repair crew will resolve for you. We understand how vital your dryer is to you, and we want to assist you in keeping it in good working order at all times. We want to be the one you can count on anytime you need assistance in repairing your appliance. We are a team you can rely on for any of your appliance needs. Call us now!</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Washer Repair Los Angeles CA</h4>
                        <p>Washer is a daily household appliance that has eased up lives. As a result, it is essential to keep your washer in decent working order to avoid sudden breakdowns. We appreciate how important your washer is to you, and we want to help you keep it in good working condition at all times. Washer Repair Los Angeles Ca wants to be the company you can call if you need help fixing your appliances. Is your washer out of order and needs a quick fix? We offer washer repair service in Los Angeles California at an affordable price. And not only that, but we also provide preventative maintenance. Maintenance increases the efficiency of the appliance and saves you from purchasing a new and expensive washer. Our team is well-equipped and fully trained to settle matters for you. Signs that you require a washer repair service include too noisy machine, water leaking from the machine when in use, less to no spinning cycles, etc. Worry not call us and get the repair done. Get in touch with Los Angeles Ca Washer Repair today for availing of our amazing services!</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-7.webp') }}" alt="washer repair service">
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-8.webp') }}" alt="range repair service">
                    </div>
                    <div class="col-lg-6">
                        <h4>Range Repair Los Angeles CA</h4>
                        <p>Is your range not working properly? Is your range not shutting off properly? Whatever range issue you're facing, Range Repair in Los Angeles CA is here to help you. A damaged range is dangerous by all means but replacement is not the only solution. Get instant help from our range repair service, where our technicians will detect the root cause and get it fixed right away. Los Angeles Ca Appliance Repair’s certified local specialists will diagnose and repair the problem in no time. Range Repair Los Angeles Ca has the skills you can rely on for all range fixes. Our specialists can identify your range's specific needs and then rapidly and efficiently address the issue. Our specialists are working on servicing electric and gas range with a wide range of brands, so we can help you regardless of the kind of range you have! We have been serving the Los Angeles area for a long time and are proud to be ranked among the top repair providers. Contact us to get professional help at an affordable price on the same day! Our service is no doubt the most favored in Los Angeles both by industrial and residential consumers.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Ice Maker Repair Los Angeles CA</h4>
                        <p>There are times you just want your drinks cold – not your normal kind of cold but you want some ice cubes in the mix. Oh! What joy it is. The place of ice-makers in a home or business area cannot be undermined and forgotten easily; it sure does have a special place in our hearts. Do you own a bar? Are you a fan of cold drinks at home with your friends? Your ice-maker will surely come in handy at times like this. We offer supreme quality ice maker repair services to make sure that your machine produces hygienic, clean ice without any disruption. For that reason, we go to extreme ends in making sure that your appliance is working properly without any slight chances of malfunction. Signs that you require ice maker repair service includes leaks in the machine, extremely noisy when in use, unpleasant-tasting ice, reduced output, tips on keeping the ice machine clean, always turn off the water supply and then the machine itself, keep the machine clean at all times, rinse off the parts of the machine regularly, let the machine dry before restarting the machine, etc. Call Los Angeles Ca Ice-Maker Repair right away and get your appliance restored back to its working condition.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-9.webp') }}" alt="ice maker repair service">
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-10.webp') }}" alt="stove repair service">
                    </div>
                    <div class="col-lg-6">
                        <h4>Stove Repair Los Angeles CA</h4>
                        <p>Maintaining your house appliances can be a huge difficulty. Your stove is one of the numerous regularly employed tools in your house. Outside of the special cleaning, your stove typically does not demand comprehensive maintenance. Because of that, it can be difficult to determine exactly if you require to request stove servicing. We offer high-quality, reliable stove repair services to our clients. We assure our customers that they will give the best stove repair technicians to provide the best care for their appliances. If your stove is not functioning properly and needs an in-depth check-up then our team is here to inspect, diagnose and fix the problem areas instantly. Stove Repair Los Angeles Ca service can help with all significant household and industrial appliances. No concern how little or large the problem is, our professional technicians will diagnose it and repair it correctly. Because of our experience in this matter, we can quickly and efficiently find and fix a problem. It is important to make repairs by licensed assistance without suspension. We can provide all your appliance repair requirements.</p>
                    </div>
                </div>
                <div class="row about-item">
                    <div class="col-lg-6">
                        <h4>Wine Cooler Repair Los Angeles CA</h4>
                        <p>Is there anything more pleasurable other than a chilled bottle of drink?  You desire to unwind your stress with a bottle of expensive wine after a hard day at the office, but your wine cooler isn't functioning effectively? Chilling wine to an otptimum temperature is what a wine cooler should do. Our experienced technicians from Wine Cooler Repair Los Angeles Ca will arrive and repair the bad effects of your wine cooler. A broken wine cooler can ruin your mood to the point of frustration. But we save you from that frustration and offer wine cooler repair at affordable rates. You will get prompt assistance and the best repair. Wine Cooler Repair Los Angeles Ca has based its reputation on delivering exceptional customer support, dependability and confidence. Client satisfaction is our top priority at Wine Cooler Repair Los Angeles Ca, and we appreciate the chance to assist them. It is our ambition to investigate and execute the most efficient policies and strategies to make certain that quality service is done on time. For our top-notch services just give us a call, and we will be there in no time at all.</p>
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('/assets/front/images/service-11.webp') }}" alt="wine cooler repair service">
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
                            <p>My dryer was giving me problems so I decided to give AnB Appliance Repair a try. They were friendly.  They were willing to work around my schedule.  They came within 24hrs.  They fixed my dryer within an hour. I will definitely call them again if I need another repair!</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonials-item">
                            <div class="headline">
                                <h6>Carlos Mason</h6>
                                <img src="{{ asset('/assets/front/images/logo-google.png') }}" alt="google">
                            </div>
                            <img src="{{ asset('/assets/front/images/stars.svg') }}" alt="5 star rating">
                            <p>VERY responsive!  I called the guys on Thursday afternoon for a dishwasher issue and they came by the next day to diagnose the problem.  Turns out I needed a new motor, which the guys ordered, picked up on a Saturday morning, and installed right away.</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="testimonials-item">
                            <div class="headline">
                                <h6>Marcus Stone</h6>
                                <img src="{{ asset('/assets/front/images/logo-yelp.png') }}" alt="yelp">
                            </div>
                            <img src="{{ asset('/assets/front/images/stars.svg') }}" alt="5 star rating">
                            <p>I had a hard time finding someone who would work on my stove be course it was quite old. The repairman arrived during the time they said he would, diagnosed the problem, and fixed it for a reasonable price. I will definitely use them again! <br>Thank you!</p>
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
                    </div>
                    <div class="col-lg-6">
                        <img src="{{ asset('assets/front/images/rating.webp') }}" alt="rating">
                        <h4>You can find us here</h4>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d848945.0887342315!2d-118.8595572!3d33.7815461!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80dd2ad30164cd31%3A0x837d28d6cfbd392a!2sLos%20Angeles%20County%2C%20CA%2C%20USA!5e0!3m2!1sen!2sua!4v1622566823047!5m2!1sen!2sua" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </section>

        <!-- LOCATIONS -->
        <section class="locations">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h3>Appliance Service Los Angeles CA covers all the following areas:</h3>
                        <p>90002, 90003, 90004, 90005, 90006, 90007, 90008, 90005, 90010, 90011, 90012, 90013, 90014, 90015, 90016, 90017, 90018, 90019, 90020, 90021, 90022, 90023, 90024, 90025, 90026, 90027, 90028, 90029, 90030, 90031, 90032, 90033, 90034, 90035, 90036, 90037, 90038, 90039, 90040, 90041, 90042, 90043, 90044, 90045, 90046, 90047, 90048, 90049, 90090, 90051, 90052, 90053, 90054, 90055, 90056, 90057, 90058, 90059, 90060, ZIP Code 90061, 90062, 90063, 90064, 90065, 90066, 90067, 90068, 90069, 90070, 90071, 90072, 90073, 90074, 90075, 90076, 90077, 90078, 90079, 90080, 90081, 90082, 90083, 90084, 90086, 90087, 90088, 90089, 90090, 90091, 90093, 90094, 90095, 90096, 90099, 90134, 90189, 90230</p>
                        <h4>Our Appliance Repair Service is also available in the following cities:</h4>
                        <p>Agoura Hills Ca, Alhambra Ca, Altadena Ca, Arcadia Ca, Arleta Ca, Artesia Ca, Baldwin Village Ca, Bel Air Ca, Bell Canyon Ca, Beverly Glen Ca, Beverly Grove Ca, Beverly Hills Ca, Beverlywood Ca, Brentwood Ca, Burbank Ca, Calabasas Ca, California Heights Ca, Canoga Park Ca, Central LA Ca, Century City Ca, Cerritos Ca, Chatsworth Ca, Chinatown Ca, Cornell Ca, Crenshaw Ca, Crescenta Highlands Ca, Culver City Ca, Cypress Park Ca, Del Aire Ca, Downtown Ca, Eagle Rock Ca, East Hollywood Ca, Echo Park Ca, El Porto Ca, El Segundo Ca, Encino Ca, Gardena Ca, Glassell Park Ca, Glendale Ca, Granada Hills Ca, Harbor Ca, Hawthorne Ca, Hermosa Beach Ca, Hidden Hills Ca, Highland Park Ca, Hollywood Ca, Inglewood Ca, La Cañada Flintridge Ca, Ladera Heights Ca, Lake Balboa Ca, Lake View Terrace Ca, Lakewood Ca, Lakewood Village Ca, Lawndale Ca, Leimert Park Ca, Leisure World Ca, Lennox Ca, Little Armenia Ca, Lomita Ca, Long Beach Ca, Los Angeles Ca, Los Feliz Ca, Manhattan Beach Ca, Mar Vista Ca, Marina Del Rey Ca, Mid City Ca, Mid-Wilshire Ca, North Hills Ca, North Hollywood Ca, North Redondo Ca, Northeast LA Ca, Northridge Ca, Oak Park Ca, Ocean Park Ca, Old Town Torrance Ca, Pacific Palisades Ca, Pacoima Ca, Palms Ca, Panorama City Ca, Park Mesa Heights Ca, Pasadena Ca, Playa Del Rey Ca, Porter Ranch Ca, Rancho Palos Verdes Ca, Redondo Beach Ca, Reseda Ca, Rolling Hills Estates Ca, Rosemead Ca, San Fernando Ca, San Marino Ca, San Pedro Ca, Santa Monica Ca, Saratoga Hills Ca, Shadow Hills Ca, Sherman Oaks Ca, Sierra Madre Ca, Signal Hill Ca, Silver Lake Ca, Simi Valley Ca, South Los Angeles Ca, South Park Ca, South Pasadena Ca, Studio City Ca, Sun Valley Ca, Sunland Ca, Sylmar Ca, Tarzana Ca, Thousand Oaks Ca, Toluca Lake Ca, Torrance Ca, Tujunga Ca, Universal City Ca, Valley Glen Ca, Valley Village Ca, Van Nuys Ca, Venice Ca, Vermont Harbor Ca, View Park - Windsor Hills Ca, Walteria Ca, West Athens Ca, West Hills Ca, West Hollywood Ca, West Los Angeles Ca, Westwood Ca, Wilmington Ca, Winnetka Ca</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- ADVANTAGES -->
        <section class="advantages">
            <div class="container">
                <h2 class="title">Certified, affordable and honest service</h2>
                <p class="subtitle">We are here when you need us to service both your residential and comercial properties.</p>
                <div class="row">
                    <div class="col-lg-4 advantages-item">
                        <img src="{{ asset('/assets/front/images/advantages/pricing.svg') }}" alt="pricing">
                        <p>At Appliance Repairmen Service we are always straight and honest with every customer. This is especially true when it comes to payment and pricing. Our company understands that many families need to stick to a budget. Keeping that in mind, we do our best to deliver the most affordable while still high-quality service for all clients.</p>
                    </div>
                    <div class="col-lg-4 advantages-item">
                        <img src="{{ asset('/assets/front/images/advantages/medal.svg') }}" alt="quality">
                        <p>Appliance Repairmen Service technicians are knowledgeable and highly-skilled in repairing all major appliances. It doesn’t matter whether it is a brand-new Viking refrigerator or an old microwave. The company experts can handle it all. They can always find a way to fix the problem and make appliances run again.</p>
                    </div>
                    <div class="col-lg-4 advantages-item">
                        <img src="{{ asset('/assets/front/images/advantages/like.svg') }}" alt="like">
                        <p>Appliance Repairmen technicians work with customers and their property in mind. This means they work neatly and professionally to make sure that no other items or parts of the house get damaged during the repair. They work respectfully and leave no messes at home or in the office after their job is done.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection



@section('footer')
@endsection
