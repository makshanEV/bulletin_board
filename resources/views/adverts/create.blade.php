@extends('welcome')
@section('content')
@if($advert->exists)
    <form method="POST" action="{{route('myadverts.update', $advert->id)}}">
@method('PATCH')
@else
    <form method="POST" action="{{route('myadverts.store')}}">
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
                    <label for="titleAdvert">Заголовок</label>
                    <input name="title" type="text" class="form-control" id="titleAdvert" value="{{$advert->title}}">
                </div>
                <div class="form-group">
                    <label for="slugAdvert">Слаг</label>
                    <input name="slug" type="text" class="form-control" id="slugAdvert" value="{{$advert->slug}}">
                </div>
                <div class="form-group">
                    <label for="fulltextAdvert">Текст объявления</label>
                    <textarea name="full_text" type="text" class="form-control" id="fulltextAdvert">{{$advert->full_text}}</textarea> 
                </div>
                <div class="form-group">
                    <label for="categoryAdvert">Категория</label>
                    <select name="category_id" id="categoryAdvert">
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="priceAdvert">Цена</label>
                    <input name="price" type="text" class="form-control" id="priceAdvert" value="{{$advert->price}}">
                </div>
                <div class="form-group">
                    <label for="phoneNumber">Номер телефона</label>
                    <input name="phone_number" type="text" class="form-control" id="phoneNumber" value="{{$advert->phone_number}}">
                </div>
                <button type="submit" class="btn btn-primary">Сохранить</button>
            </div>
        </div>
    </div>
</form>
@endsection