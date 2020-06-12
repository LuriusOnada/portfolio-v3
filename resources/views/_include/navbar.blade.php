<header>  
	<nav>
		@if(Request::url() <> route('index'))
		<a class="header_link @if(Request::url() <> route('projects_list')) two_head @endif" href="{{ route('index') }}">Accueil</a>
		@endif
		@if(Request::url() <> route('projects_list'))
		<a class="header_link @if(Request::url() <> route('index')) two_head @endif" href="{{ route('projects_list') }}">Projets</a>
		@endif
	</nav>   
</header>

