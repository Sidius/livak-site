@extends('admin.layouts.layout')

@section('title') {{ $title ?? null }} @endsection

@section('content')
    <!-- Content Header (Page header) -->
    @include('admin.layouts.page-header')

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">{{ $title ?? null }}</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ route('admin.poems.store') }}" method="post">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="title">Название</label>
                                    <input type="text" name="title"
                                           class="form-control @error('title') is-invalid @enderror"
                                           id="title" placeholder="Название" value="{{ old('title') }}">
                                </div>

                                <div class="form-group">
                                    <label for="text">Текст</label>
                                    <textarea id="text"
                                              name="text"
                                              class="form-control @error('text') is-invalid @enderror"
                                              rows="7" placeholder="Контент...">{{ old('text') }}</textarea>
                                </div>

                                @isset($poem_categories)
                                    <div class="form-group">
                                        <label for="poem_category_id">Категория поэмы</label>
                                        <select id="poem_category_id"
                                                name="poem_category_id"
                                                class="form-control">
                                            <option value="">Выбор категории</option>
                                            @foreach($poem_categories as $k => $v)
                                                <option value="{{ $k }}" @if($k == old('poem_category_id')) selected @endif>{{ $v }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                @endisset
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Сохранить</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
                <!--/.col (left) -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
