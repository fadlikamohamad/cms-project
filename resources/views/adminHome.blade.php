@extends('layouts.user')
   
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
    <form action="/admin/cari" method="GET">
        <input type="text" name="cari" placeholder="Cari Judul .." value="{{ old('cari') }}">
        <input type="submit" value="CARI">
    </form>
    <div style="float: right;"><a href="/artikel/tambah" class="btn btn-primary">Tambah Artikel Baru</a></div>
    <br><br>
    <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Thumbnail</th>
                            <th>Title</th>
                            <th>Excerpt</th>
                            <!-- <th>Content</th> -->
                            <th>Status</th>
                            <th>Author</th>
                            <th>OPSI</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; ?>
                        @foreach($articles as $a)
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><img width="150px" src="{{ url('/thumbnail/'.$a->thumbnail) }}"></td>
                            <td>{{$a->title}}</td>
                            <td>{{$a->excerpt}}</td>
                            <!-- <td>{{$a->content}}</td> -->
                            <td>{{$a->status}}</td>
                            <td>{{$a->author}}</td>
                            <td>
                                <a href="/detail/{{$a->id}}" class="btn btn-primary">Lihat</a>
                                <a href="/artikel/edit/{{ $a->id }}" class="btn btn-warning">Edit</a>
        <a href="/artikel/hapus/{{ $a->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus Artikel ini ?')">Hapus</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
</div>
<br> 
<div class="justify-content-center d-flex">{{ $articles->links() }}</div>
@endsection