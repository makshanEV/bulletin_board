@extends('layouts.admin')

@section('content')
@if($user->exists)
    <form method="POST" action="{{route('admin.users.update', $user->id)}}">
@method('PATCH')
@else
    <form method="POST" action="{{route('admin.users.store')}}">
@endif
    @csrf
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="nameUser">Имя</label>
                    <input name="name" type="text" class="form-control" id="nameUser" value="{{$user->name}}">
                </div>
                <div class="form-group">
                    <label for="surnameUser">Фамилия</label>
                    <input name="surname" type="text" class="form-control" id="surnameUser" value="{{$user->surname}}">
                </div>
                <div class="form-group">
                    <label for="emailUser">E-mail</label>
                    <input name="email" type="text" class="form-control" id="emailUser" value="{{$user->email}}">
                </div>
                <div class="form-group">
                    <label for="passwordUser">Пароль</label>
                    <input name="password" type="password" class="form-control" id="passwordUser" value="{{$user->password}}">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</form>
@endsection