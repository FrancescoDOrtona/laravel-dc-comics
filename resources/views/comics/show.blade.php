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
                    <p><span class="fw-bold">Price:</span> {{ $comic->price }} &dollar;</p>
                    <p><span class="fw-bold">Comic:</span> {{ $comic->series }}</p>
                    <p><span class="fw-bold">Sale date:</span> {{ $comic->sale_date }}</p>
                    <p><span class="fw-bold">Comic type:</span> {{ $comic->type }}</p>
                    <div class="pt-3">
                        <a href="{{ route('comics.edit',$comic) }}" class="btn btn-primary btn-sm me-1">Edit</a>
                        <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Delete
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="staticBackdropLabel">DELETE COMIC</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete this Comic?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
@endsection