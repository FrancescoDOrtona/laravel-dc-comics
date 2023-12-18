@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-2">Crea un Nuovo Fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            @include('partials.form')
        </form>
    </div>
    
@endsection