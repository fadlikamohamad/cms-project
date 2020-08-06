@extends('layouts.user')
   
@section('content')
<br>
<div class="justify-content-center d-flex">
    <div class="card" style="max-width: 540px;">
        @foreach($articles as $a)
        <div class="row no-gutters">
            <div class="col-md-4">
                <a href="{{ url('/thumbnail/'.$a->thumbnail) }}"><img src="{{ url('/thumbnail/'.$a->thumbnail) }}" class="card-img" alt="..."></a>
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><b>{{$a->title}}</b></h5>
                    <p class="card-text"><i>"{{$a->excerpt}}"</i></p>
                    <p class="card-text">Content : {{$a->content}}</p>
                    <p class="card-text">Author : {{$a->author}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection