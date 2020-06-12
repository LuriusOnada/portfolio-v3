@extends('_include.template')
@section('meta_title')
Mes projets - Portfolio de Louis ARNAUD @endsection
@section('meta_desc')
Liste de guide et projets réaliser par ma personne. Je ne suis pas bon pour résumer, je m'excuse donc d'avance si vous n'aimez pas les pavés de textes. @endsection
@section('add_css')
<link rel="stylesheet" href="{{ asset('/css/project.css') }}">
@endsection

@section('content')
<section class="article_container">
<aside class="search">
	{{-- A rendre fonctionnel --}}
	<form method="get" accept-charset="utf-8">
		<label for="textual">Rechercher :</label>
		<input id="textual" type="text" name="recherche">
	</form>
</aside>
	@foreach($projects as $project)
	<a class="article-link" href="{{ route('project', ["url" => $project->url]) }}">
		<article>
			<h2 class="projet_title">{!!$project->title!!}</h2>	
			<p>{!!$project->resume!!}</p>
			<div class="foot">
				@foreach($project->tags as $tag)
				<span class="tag">{!!$tag->name!!}</span>
				@endforeach
			</div>
		</article>
	</a>
	@endforeach
</section>
@endsection
