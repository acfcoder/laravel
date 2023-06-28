<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'asc')->take(5)->get();
        return view('home', ['news' => $news]);
    }

    public function mostrar($id)
    {
        $news = News::findOrFail($id);
        return view('noticia', ['news' => $news]);
    }
}
