@extends('layouts.layout')

@section('title', $title ?? null)

@section('menu_links')
    <a href="{{ route('home') }}" class="nav-item nav-link active">Главная</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">О себе</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">Образование, интересы &amp; опыт</a>
    <a href="{{ route('home') }}" class="nav-item nav-link">Поэтическая страничка</a>
@endsection

@section('content')

    @isset($poem)
        <!-- About Start -->
        <div class="container-fluid py-5" id="about">
            <div class="container">
                <div class="position-relative d-flex align-items-center justify-content-center">
                    <h1 class="display-1 text-uppercase text-white" style="-webkit-text-stroke: 1px #dee2e6;">Poem</h1>
                    <h1 class="position-absolute text-uppercase text-primary">{{ $poem->title }}</h1>
                </div>
                {{--            <div class="row align-items-center">--}}
                <div class="row">
                    <div class="col-lg">
                        {!! $poem->text !!}
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->
    @endisset
@endsection
