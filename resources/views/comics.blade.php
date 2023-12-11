@extends('layouts.app')

@section('content')
    <section class="comics">
        <div class="container">
            <div class="d-grid comics_structure">
                @foreach ($comics as $comic)
                   <div class="comics_card">
                        <img src="{{ $comic['thumb'] }}" alt="">
                        <h5>{{ $comic['series'] }}</h5>
                    </div> 
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-3 ">
                <button class="bg-primary fw-bold text-light text-uppercase px-5 py-1 border border-0">load more</button>
            </div>
        </div>
    </section>
    <section class="buy-comics">
        <div class="container">
            <div class="buy-comics_structure">
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <p>digital comics</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <p>dc merchandise</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                    <p>subscription</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <p>comic shop locator</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                    <p>dc power visa</p>
                </div>
            </div>
        </div>
    </section>
@endsection