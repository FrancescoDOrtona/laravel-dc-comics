@extends('layouts.app')

@section('content')
    <section class="comics">       
        <div class="container">
            <div class="d-grid comics_structure">
                <div class="title-badge">
                    <h4>current series</h4>
                </div>
                @foreach ($comics as $comic)
                   <div class="comics_card">
                        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
                        <a href="{{ route('comics.show', $comic->id) }}">
                            <h5>{{ $comic->series }}</h5>
                        </a>                          
                    </div> 
                @endforeach
            </div>
            <div class="d-flex justify-content-center pb-3 ">
                {{-- <button class="bg-primary fw-bold text-light text-uppercase px-5 py-1 border border-0">load more</button> --}}
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item active" aria-current="page">
                            <a class="page-link" href="#">1</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">3</a>
                        </li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
                
            </div>
        </div>
    </section>
    <section class="buy-comics">
        <div class="container">
            <div class="buy-comics_structure">
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-digital-comics.png') }}" alt="">
                    <p>digital comics</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-merchandise.png') }}" alt="">
                    <p>dc merchandise</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-subscriptions.png') }}" alt="">
                    <p>subscription</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-comics-shop-locator.png') }}" alt="">
                    <p>comic shop locator</p>
                </div>
                <div class="buy-comics_card">
                    <img src="{{ Vite::asset('resources/images/buy-dc-power-visa.svg') }}" alt="">
                    <p>dc power visa</p>
                </div>
            </div>
        </div>
    </section>
@endsection