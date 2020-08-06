@extends('layouts.app')
   
@section('content')
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:5px;
    }
</style>
<div class="container">
    <p>Cari Judul Artikel :</p>
    <form action="/home/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Judul .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
    <br>    
    <!-- <div class="card-deck">
        @foreach($articles as $a)
        <div class="card">
            <img width="100px" height="300px" src="{{ url('/thumbnail/'.$a->thumbnail) }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{$a->title}}</h5>
                <p class="card-text">{{$a->excerpt}}</p>
                <a href="/detail/{{$a->id}}" class="btn btn-primary">Lihat</a>
            </div>
        </div>
        @endforeach
    </div> -->
    <div class="row">
        @foreach($articles as $a)
        <div class="col-md-4 col-sm-12 mb-3">
            <div class="card">
                <img width="100px" height="300px" src="{{ url('/thumbnail/'.$a->thumbnail) }}" class="card-img-top" alt="...">

                <div class="card-body">
                    <div class="card-title"><h4>{{$a->title}}</h4></div>
                    <p class="card-text">{{$a->excerpt}}</p>
                    <a href="/detail/{{$a->id}}" class="btn btn-primary">Lihat</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

</div>
<br> 
<div class="justify-content-center d-flex">{{ $articles->links() }}</div>
@endsection