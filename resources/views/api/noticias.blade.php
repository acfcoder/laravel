@extends('layouts.master')

@section('titulo', 'JSON de noticias')
<h1>hello</h1>

@section('content')
	<pre><code>{{ json_encode($news, JSON_PRETTY_PRINT) }}</code></pre>
@stop
