@extends('layouts.master')

@section('titulo', 'Home')

@section('content')
<h1 class="text-xl font-semibold text-gray-900 mt-9 dark:text-white">Bienvenid@s a la página de noticias aleatorias</h1> 

@foreach ($news as $item)

<figure class="relative bg-slate-50 rounded-lg p-6 dark:bg-slate-800 dark:highlight-white/5 max-w-sm">
	<img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none mx-auto" src="{{ $item->image }}" alt="" width="384" height="512">
	<div class="pt-6 md:p-8 text-center md:text-left space-y-4">
	  <blockquote>
		<a href="/noticia/{{ $item->id }}" alt="noticia de {{ $item->author }}">
		<p class="text-lg font-medium text-gray-900 dark:text-white">
			{{ $item->title }}
		</p>
		</a>
	  </blockquote>
	  <figcaption class="font-medium">
		<div class="text-sm text-gray-900 dark:text-white">
			{{ $item->author }}
		</div>
		<div class="text-sm text-gray-900 dark:text-white">
			{{ $item->pub_date }}
		</div>
	  </figcaption>
	</div>
  </figure> 
</a>
  
 @endforeach


@stop

