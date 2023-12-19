@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1 class="py-2">Edit Comic</h1>

        <form action="" method="POST">
            @csrf
            @method('PUT')
            @include('partials.form2')
        </form>
    </div>
    
@endsection