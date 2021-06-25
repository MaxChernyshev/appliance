<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ $location->seo_description ?? 'Our company «Appliance Repairmen» provides quality, all-inclusive, professional 24-hour overhaul. Repair of domestic and commercial appliances on the same day near you.' }}">
    <title>{{ $location->seo_title ?? 'Household appliance repair | Appliance repairs at your home | Certified small repair of appliances' }}</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    @yield('styles')
</head>
<body>

<!-- HEADER -->
<header>
    <nav class="navbar navbar-light navbar-expand-lg">
        <a class="navbar-brand" href="{{ route('homepage') }}">
            <img src="{{ asset('/assets/front/images/logo.svg') }}" alt="appliance repaimen logo">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('homepage') }}">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Locations
                    </a>

                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($locations as $location)
                            <a class="dropdown-item" href="{{ route('location', ['slug' => $location->slug]) }}">{{ $location->title }} Appliance Repair</a>
                        @endforeach
                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @foreach($services as $service)
                        <a class="dropdown-item" href="{{ route('service', ['slug' => $service->slug]) }}">{{ $service->title }} Appliance Repair</a>
                        @endforeach
                    </div>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="{{ route('brand') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Brands
                    </a>
                    <div class="dropdown-menu custom-overflow" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Amana Appliance Repair Service
                        </a>
                        <div class="dropdown-menu custom-overflow" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Amana Dishwasher Repair Los Angeles</a>
                        </div>
                    </div>
                </li>


                {{--                <li class="nav-item dropdown">--}}
                {{--                    <a class="nav-link" href="{{ route('brand') }}">Brands</a>--}}
                {{--                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--                        <a class="dropdown-item dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                {{--                            Amana Appliance Repair Service--}}
                {{--                        </a>--}}
                {{--                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">--}}
                {{--                            <a class="dropdown-item" href="#">Amana Dishwasher Repair Los Angeles</a>--}}
                {{--                        </div>--}}
                {{--                    </div>--}}
                {{--                </li>--}}
                <a href="#" class="btn btn-outline-primary navbar-book-inline" style="display: none;" type="button">Book a Service</a>
            </ul>
        </div>
        <div>
            <a class="navbar-phone" href="tel:(855) 399-9888">(855) 399-9888</a>
            <a href="#" class="btn btn-outline-primary navbar-book" type="button">Book a Service</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
