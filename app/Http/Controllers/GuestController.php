<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class GuestController extends Controller
{
    public function portfolio()
    {
        $articles = Article::where('status', 'published')->get();

        return view('tempo', ['articles' => $articles]);
    }
}
