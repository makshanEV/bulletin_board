@extends('layouts.admin')

@section('content')
@if($item->exists)
    <form method="POST" action="{{route('admin.categories.update', $item->id)}}">
@method('PATCH')
@else
    <form method="POST" action="{{route('admin.categories.store')}}">
@endif
    @csrf
    @if($errors->any())
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
    @endif
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="titleCat">Наименование</label>
                    <input name="title" type="text" class="form-control" id="titleCat" value="{{$item->title}}">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</form>

@endsection