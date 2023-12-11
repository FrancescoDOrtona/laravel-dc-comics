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
@endsection