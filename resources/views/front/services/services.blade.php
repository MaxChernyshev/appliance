@extends('front.layouts.locationlayout')

@section('header')
@endsection

@section('content')
    <main>

        <!-- HERO -->
        <section class="hero" style="background:rgba(54, 54, 54, .5) url('/assets/front/images/hero-image.webp') no-repeat center center / cover;">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <h1>Locations we work in</h1>
                    </div>
                </div>
            </div>
        </section>

        <!-- ARTICLE -->
        <section class="article">
            <div class="container">
                <div class="row article-item">
                    <div class="col-lg-4 article-item-list">

                        @foreach($locations as $location)

                            <a href="{{ route('location', ['slug' => $location->slug]) }}">{{ $location->title }} Appliance Repair</a>

                        @endforeach

                    </div>

                </div>
            </div>
        </section>
    </main>



@endsection



@section('footer')
@endsection
