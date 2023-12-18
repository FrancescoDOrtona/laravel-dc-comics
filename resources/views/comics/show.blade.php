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
                    <p><span class="fw-bold">Prezzo:</span> {{ $comic->price }} &dollar;</p>
                    <p><span class="fw-bold">Serie:</span> {{ $comic->series }}</p>
                    <p><span class="fw-bold">Data di vendita:</span> {{ $comic->sale_date }}</p>
                    <p><span class="fw-bold">Tipo di fumetto:</span> {{ $comic->type }}</p>
                </div>                
            </div>
        </div>
    </section>
@endsection