@extends('layouts.master')

@section('titulo', 'Detalle de noticia')



@section('content')
<div class="relative max-w-sm text-center border-solid border-2">
<h1 class="mt-6 text-xl font-semibold text-gray-900 dark:text-white">{{ $news->title }}</h1>
<div class="text-sm pt-4 text-gray-900 dark:text-white">
	{{ $news->author }}
</div>
<div class="text-sm text-gray-900 dark:text-white">
	{{ $news->pub_date }}
</div>
<img class="w-24 h-24 md:w-48 pt-6 md:h-auto md:rounded-none mx-auto" src="{{ $news->image }}" alt="" width="384" height="512">
<p class="text-lg font-medium pt-6 max-w-sm text-gray-900 dark:text-white">
	{{ $news->content }}
</p>
</div>
@stop