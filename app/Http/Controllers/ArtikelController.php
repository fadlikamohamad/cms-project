<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class ArtikelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function tambah()
    {
    	return view('artikel_tambah');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'excerpt' => 'required',
    		'author' => 'required',
    		'thumbnail' => 	'required|file|image|mimes:jpeg,png,jpg|max:2048',
    	]);

    	$thumbnail = $request->file('thumbnail');

    	$nama_file = time()."_".$thumbnail->getClientOriginalName();
    	$tujuan = 'thumbnail';
    	$thumbnail->move($tujuan, $nama_file);

    	if ($request->publish != null) {
    		$status = "published";
    	} else {
    		$status = "drafted";
    	}

    	Article::create([
    		'thumbnail' => $nama_file,
    		'title' => $request->title,
    		'excerpt' => $request->excerpt,
    		'content' => $request->content,
    		'status' => $status,
    		'author' => $request->author,
    	]);

    	return redirect('admin/home');
    }

    public function edit($id)
    {
    	$article = Article::find($id);

    	return view('artikel_edit', ['article' => $article]);
    }

    public function update($id, Request $request)
    {
    	$this->validate($request, [
    		'title' => 'required',
    		'excerpt' => 'required',
    		'author' => 'required',
    		//'thumbnail' => 	'required|file|image|mimes:jpeg,png,jpg|max:2048',
    	]);

    	$thumbnail = $request->file('thumbnail');

        if ($thumbnail != null) {
        	$nama_file = time()."_".$thumbnail->getClientOriginalName();
        	$tujuan = 'thumbnail';
        	$thumbnail->move($tujuan, $nama_file);
        }

    	if ($request->publish != null) {
    		$status = "published";
    	} else {
    		$status = "drafted";
    	}

    	$article = Article::find($id);
    	$article->title = $request->title;
    	$article->excerpt = $request->excerpt;
    	$article->author = $request->author;
    	$article->content = $request->content;
    	$article->status = $status;
        if($thumbnail != null)
    	   $article->thumbnail = $nama_file;
    	$article->save();

    	return redirect('admin/home');
    }

    public function hapus($id)
    {
    	$article = Article::find($id);
    	$article->delete();

    	return redirect('admin/home');
    }

    public function portfolio()
    {
        $articles = Article::where('status', 'published')->get();

        return view('tempo', ['articles' => $articles]);
    }
}
