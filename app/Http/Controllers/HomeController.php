<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //$articles = Article::where('status', 'published')->get()->paginate(3);
        $articles = DB::table('articles')->where('status', 'published')->paginate(3);
        
        return view('selling', ['articles' => $articles]);
    }

    public function adminHome()
    {
        $articles = DB::table('articles')->paginate(5);
        
        return view('adminHome', ['articles' => $articles]);
    }

    public function detail($id)
    {
        $articles = Article::where('id', $id)->get();

        return view('detail', ['articles' => $articles]);
    }

    public function cari(Request $request) {

        $cari = $request->cari;

        $articles = DB::table('articles')->where('title', 'like', "%".$cari."%")->paginate(3);

        return view('home', ['articles' => $articles]);        
    }

    public function adminCari(Request $request) {

        $cari = $request->cari;

        $articles = DB::table('articles')->where('title', 'like', "%".$cari."%")->paginate(10);

        return view('adminHome', ['articles' => $articles]);        
    }

    // public function portfolio()
    // {
    //     $articles = Article::where('status', 'published')->get();

    //     return view('tempo', ['articles' => $articles]);
    // }
}
