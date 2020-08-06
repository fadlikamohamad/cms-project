@extends('layouts.user')
   
@section('content')
<div class="container">
    <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>EDIT ARTIKEL</strong>
                </div>
                <div class="card-body">
                    <a href="/admin/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/artikel/update/{{ $article->id }}" enctype="multipart/form-data">

                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title .." value="{{ $article->title }}">

                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" placeholder="Excerpt .." value="{{ $article->excerpt }}">

                            @if($errors->has('excerpt'))
                                <div class="text-danger">
                                    {{ $errors->first('excerpt')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Author .." value="{{ $article->author }}">

                            @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" placeholder="Content ..">{{ $article->content }}</textarea>

                             @if($errors->has('content'))
                                <div class="text-danger">
                                    {{ $errors->first('content')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Thumbnail</label><br/>
                            <img width="150px" src="{{ url('/thumbnail/'.$article->thumbnail) }}">
                            <br><br>
                            <input type="file" name="thumbnail">
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="publish" class="btn btn-success" value="Publish">
                            <input type="submit" name="draft" class="btn btn-success" value="Draft">
                        </div>

                    </form>

                </div>
            </div>
</div>
@endsection