@extends('layouts.user')
   
@section('content')
<div class="container">
    <div class="card mt-5">
                <div class="card-header text-center">
                    <strong>TAMBAH ARTIKEL</strong>
                </div>
                <div class="card-body">
                    <a href="/admin/home" class="btn btn-primary">Kembali</a>
                    <br/>
                    <br/>
                    
                    <form method="post" action="/artikel/store" enctype="multipart/form-data">

                        {{ csrf_field() }}

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Title ..">

                            @if($errors->has('title'))
                                <div class="text-danger">
                                    {{ $errors->first('title')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Excerpt</label>
                            <input type="text" name="excerpt" class="form-control" placeholder="Excerpt ..">

                            @if($errors->has('excerpt'))
                                <div class="text-danger">
                                    {{ $errors->first('excerpt')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Author</label>
                            <input type="text" name="author" class="form-control" placeholder="Author ..">

                            @if($errors->has('author'))
                                <div class="text-danger">
                                    {{ $errors->first('author')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Content</label>
                            <textarea name="content" class="form-control" placeholder="Content .."></textarea>

                             @if($errors->has('content'))
                                <div class="text-danger">
                                    {{ $errors->first('content')}}
                                </div>
                            @endif

                        </div>

                        <div class="form-group">
                            <label>Thumbnail</label><br/>
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