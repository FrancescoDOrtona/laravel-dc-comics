@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">               
                <div class="col-4">
                    <img src="{{ $comic->thumb }}" width="300" alt="{{ $comic->title }}">
                </div>
                <div class="col-8">
                    <h1 class="pb-4">{{ $comic->title }}</h1>                   
                    <p>{{ $comic->description }}</p>
                    <p>Prezzo: {{ $comic->price }} &dollar;</p>
                    <p>Serie: {{ $comic->series }}</p>
                    <p>Data di vendita: {{ $comic->sale_date }}</p>
                    <p>Tipo di fumetto: {{ $comic->type }}</p>
                </div>                
            </div>
        </div>
    </section>
@endsection