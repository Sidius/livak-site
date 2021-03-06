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
            @isset($poems)
                <div class="card-body">
                    <a href="{{ route('admin.poems.create') }}" class="btn btn-primary mb-3">Добавить поэму</a>
{{--                    @if($poem_categories->count())--}}
                    @if(count($poems))
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover text-wrap">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Наименование</th>
                                    <th>Slug</th>
                                    <th>Views</th>
                                    <th>Category</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($poems as $poem)
                                        <tr>
                                            <td>{{ $poem->id }}</td>
                                            <td>{{ $poem->title }}</td>
                                            <td>{{ $poem->slug }}</td>
                                            <td>{{ $poem->views }}</td>
                                            <td>{{ $poem->poemCategory ? $poem->poemCategory->title : 'Нет категории' }}</td>
                                            <td>
                                                <a href="{{ route('admin.poems.edit', ['poem' => $poem->id]) }}" class="btn btn-info btn-sm float-left mr-1">
                                                    <i class="fas fa-pencil-alt"></i>
                                                </a>
                                                <form action="{{ route('admin.poems.destroy', ['poem' => $poem->id]) }}" method="post" class="float-left">
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
                        <p>Поэм нет...</p>
                    @endif
                </div>

                <div class="card-footer clearfix">
                    {{ $poems->onEachSide(1)->links('vendor.pagination.my-pagination') }}
                </div>
            @endisset
        </div>
        <!-- /.card -->

    </section>
    <!-- /.content -->
@endsection
