@extends('_include.template')
@section('meta_title')
{!! $project->title !!} - Portolio de Louis ARNAUD @endsection
@section('meta_desc')
{!! $project->resume !!}@endsection
@section('add_css')
<link rel="stylesheet" href="{{ asset('/css/project.css') }}">
@endsection

@section('content')
<section class="article_container">
<article class="expand">
	<h1 class="projet_title">{!! $project->title !!}</h1>
    <h4>{!! $project->resume !!}</h4>
	<p>{!! $project->content !!}</p>
	<p>Merci d'avoir lu ces lignes et, qui que vous soyez, passez une bonne journée.<br>Cordialement, Louis Jean ARNAUD.</p>
	<div class="foot">
		@foreach($project->tags as $tag)
		<span class="tag">{!!$tag->name!!}</span>
		@endforeach
	</div>
</article>
</section>
@endsection
