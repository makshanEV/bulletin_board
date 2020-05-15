@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"> 
            <a class="btn btn-primary" href="{{route('myadverts.create')}}">Добавить объявление</a>
            @foreach ($adverts as $advert)
                <ul class="list-group mb-2">                    
                    <li class="list-group-item">
                        <span>{{ $advert->title }}</span>
                    </li>
                    <li class="list-group-item">
                        <span>{{ $advert->price }}</span>
                    </li>
                    <li class="list-group-item">
                        <a class="btn btn-warning" href="{{route('myadverts.edit', $advert->id)}}" role="button">Редактировать</a>
                        <a class="btn btn-danger" href="{{route('myadverts.destroy', $advert->id)}}" role="button">Удалить</a>
                    </li>
                </ul>
            @endforeach   
        </div>
    </div>
</div>
@endsection