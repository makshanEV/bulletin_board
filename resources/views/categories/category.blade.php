@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{route('admin.categories.create')}}">Добавить категорию</a>
            <ul class="list-group">
            @foreach ($items as $item)
                <li class="list-group-item">
                    <a href="{{route('admin.categories.edit', $item->id)}}">{{ $item->title }}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection