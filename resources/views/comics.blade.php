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
        </div>
    </section>
@endsection