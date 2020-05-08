@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
            @foreach ($adverts as $advert)
                <ul class="list-group mb-2">                    
                    <li class="list-group-item">
                        <a href="">{{ $advert->title }}</a>
                    </li>
                    <li class="list-group-item">
                        <span>{{ $advert->price }}</span>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('advertmore', $advert->id)}}">Подробнее</a>
                    </li>
                </ul>
            @endforeach   
        </div>
    </div>
    @if($adverts->total() > $adverts->count())
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{$adverts->links()}}
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection