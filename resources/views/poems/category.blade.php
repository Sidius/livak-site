@extends('layouts.layout')

@section('title', $title ?? null)

@section('menu_links')
    <a href="{{ route('home') }}" class="nav-item nav-link active">Главная</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">О себе</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">Образование, интересы &amp; опыт</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">Поэтическая страничка</a>
@endsection

@section('content')

    @if(isset($poem_category) && count($poem_category->poems))
        <!-- Blog Start -->
        <div class="container-fluid pt-5" id="poems">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Poems</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{{ $title ?? null }}</h1>
                </div>

                <div class="row">
                    @foreach($poem_category->poems as $poem)
                        <div class="col-lg-4 mb-5">
                            <h5 class="font-weight-medium mb-4">{{ $poem->title }}</h5>
                            <a class="btn btn-sm btn-outline-primary py-2"
                               href="{{ route('poems.show', ['slug' => $poem->slug]) }}">
                                Подробнее...
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endif

    @if(isset($poem_categories) && isset($poems) && (count($poem_categories) || count($poems)))
        <!-- Blog Start -->
        <div class="container-fluid pt-5" id="poems">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Poems</h1>
                    <h1 class="position-absolute text-uppercase text-primary">Поэтическая страничка</h1>
                </div>

                <div class="row">
                    @foreach($poem_categories as $poem_category)
                        <div class="col-lg-4 mb-5">
                            <h5 class="font-weight-medium mb-4">{{ $poem_category->title }}</h5>
                            <a class="btn btn-sm btn-outline-primary py-2"
                               href="{{ route('poems.category', ['slug' => $poem_category->slug]) }}">
                                Подробнее...
                            </a>
                        </div>
                    @endforeach

                    @foreach($poems as $poem)
                        <div class="col-lg-4 mb-5">
                            <h5 class="font-weight-medium mb-4">{{ $poem->title }}</h5>
                            <a class="btn btn-sm btn-outline-primary py-2"
                               href="{{ route('poems.show', ['slug' => $poem->slug]) }}">
                                Подробнее...
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Blog End -->
    @endif

@endsection
