<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function getNews(Request $request)
    {
        $page = $request->query('page', 1);
        $perPage = 10;
        $offset = ($page - 1) * $perPage;

        $news = News::select('id', 'title', 'content', 'pub_date', 'image', 'author')
            ->orderBy('pub_date', 'desc')
            ->offset($offset)
            ->limit($perPage)
            ->get();

        return response()->json($news);
    }

    public function getNewsById($id)
    {
        $news = News::findOrFail($id);

        return response()->json($news);
    }

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
