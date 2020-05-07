@extends('welcome')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">           
                <ul class="list-group mb-2">                    
                    <li class="list-group-item">
                        <span>{{ $advert->title }}</span>
                    </li>
                    <li class="list-group-item">
                        <span>{{ $advert->full_text }}</span>
                    </li>
                    <li class="list-group-item">
                        <span>{{ $advert->price }}</span>
                    </li>
                    <li class="list-group-item">
                        <span>{{ $advert->phone_number }}</span>
                    </li>
                </ul>  
        </div>
    </div>
</div>
@endsection