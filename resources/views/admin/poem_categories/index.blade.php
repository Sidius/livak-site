@extends('admin.layouts.layout')

@section('title') {{ $title ?? null }} @endsection

@section('content')
    <!-- Content Header (Page header) -->
    @include('admin.layouts.page-header')

    <!-- Main content -->
    <section class="content">

        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">{{ $title ?? null }}</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>
            @isset($poem_categories)
                <div class="card-body">
                    <a href="{{ route('admin.poem_categories.create') }}" class="btn btn-primary mb-3">Добавить категорию поэмы</a>
{{--                    @if($poem_categories->count())--}}
                    @if(count($poem_categories))
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-wrap">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Наименование</th>
                                    <th>Slug</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($poem_categories as $poem_category)
                                        <tr>
                                            <td>{{ $poem_category->id }}</td>
                                            <td>{{ $poem_category->title }}</td>
                                            <td>{{ $poem_category->slug }}</td>
                                            <td>
                                                <a href="{{ route('admin.poem_categories.edit', ['poem_category' => $poem_category->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('admin.poem_categories.destroy', ['poem_category' => $poem_category->id]) }}" method="post" class="float-left">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                            onclick="return confirm('Подтвердите удаление')">
                                                        <i class="fas fa-trash-alt"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    @else
                        <p>Категорий поэм нет...</p>
                    @endif
                </div>

                <div class="card-footer clearfix">
                    {{ $poem_categories->links('vendor.pagination.my-pagination') }}
                </div>
            @endisset
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
