<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class noticia extends Controller
{
    //
    public function index()
    {
        $news = News::orderBy('id', 'desc')->take(5)->get();
        return view('home', ['news' => $news]);
    }
}
