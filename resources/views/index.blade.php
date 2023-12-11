@extends('layouts.app')

@section('content')
    <section class="home-page" style="background-image: url({{ Vite::asset('resources/images/dc-logo-bg.png') }})">
        <div class="container">
            <h1 class="text-light text-center py-3">Home Page</h1>
        </div>
    </section>
@endsection