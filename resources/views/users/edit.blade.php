@extends('layouts.admin')

@section('content')
<form method="POST" action="{{route('admin.users.update', $user->id)}}">
    @method('PATCH')
    @csrf
    <!--@if($errors->any())
    <div class="row justify-content-center"> 
        <div class="col-md-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{$errors->first()}}
            </div>
        </div>
    </div>
    @endif
    @if(session('success'))
        <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {{session()->get('success')}}
            </div>
        </div>
    </div>
    @endif-->
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