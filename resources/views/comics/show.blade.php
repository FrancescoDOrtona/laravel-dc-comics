@extends('layouts.app')

@section('content')
    <section>
        <div class="container">
            <div class="row">               
                <div class="col-3">
                    <img src="{{ $comic->thumb }}" width="300" alt="{{ $comic->title }}">
                </div>
                <div class="col-6">
                    <h1>{{ $comic->title }}</h1>                   
                    <p>{{ $comic->description }}</p>
                    <p>Prezzo: {{ $comic->price }}</p>
                    <p>Serie: {{ $comic->series }}</p>
                </div>                
            </div>
        </div>
    </section>
@endsection