@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <a class="btn btn-primary" href="{{route('admin.users.create')}}">Добавить нового пользователя</a>
            <ul class="list-group">
                <li class="list-group-item">
                    <span>Имя</span>
                </li>
            @foreach ($users as $user)
                <li class="list-group-item">
                    <a href="{{route('admin.users.edit', $user->id)}}">{{ $user->name }}</a>
                </li>
            @endforeach
            </ul>
        </div>
        <div class="col-md-6">
            <ul class="list-group">
                <li class="list-group-item">
                    <span>Фамилия</span>
                </li>
            @foreach ($users as $user)
                <li class="list-group-item">
                    <a href="{{route('admin.users.edit', $user->id)}}">{{ $user->surname }}</a>
                </li>
            @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection