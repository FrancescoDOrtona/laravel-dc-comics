@extends('layouts.app')

@section('content')
    <section class="py-5">
        <div class="container">
            @if(session('success'))
                <div class="alert alert-success text-center">
                    {{ session('success') }}
                </div>
            @endif
            <div class="row">               
                <div class="col-4">
                    <img src="{{ $comic->thumb }}" width="300" alt="{{ $comic->title }}">
                </div>
                <div class="col-8">
                    <h1 class="pb-4">{{ $comic->title }}</h1>                   
                    <p>{!! $comic->description !!}</p>
                    <p><span class="fw-bold">Prezzo:</span> {{ $comic->price }} &dollar;</p>
                    <p><span class="fw-bold">Serie:</span> {{ $comic->series }}</p>
                    <p><span class="fw-bold">Data di vendita:</span> {{ $comic->sale_date }}</p>
                    <p><span class="fw-bold">Tipo di fumetto:</span> {{ $comic->type }}</p>
                    <div>
                        <a href="{{ route('comics.edit',$comic) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="delete" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure to delete this comic?')">Delete</button>
                        </form>
                    </div>
                </div>                
            </div>
        </div>
    </section>
@endsection