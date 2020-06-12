@extends('_include.template')
@section('meta_title')
Portfolio de Louis ARNAUD @endsection
@section('meta_desc')
Bienvenue sur mon portfolio. Je suis Louis (Jean) ARNAUD, homme Stéphanois de 21 ans. Je suis actuellement un étudiant dans la Licence Professionnelle ATII. @endsection
@section('add_css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('content')
<section class="welcome">
	<h1>Portfolio de Louis Jean ARNAUD</h1>
	<!-- Mettre logo pour voir présentation -->
	<span></span>
</section>
<section class="story">
	<h2>Présentation</h2>
	<div>
		<!-- Avatar -->
		<img class="avatar bigger" src="{{ asset('/images/lja.png') }}" alt="Photo de Louis Jean ARNAUD">
		<!-- Description personnel -->
		<p>Bienvenue sur mon portfolio. Je suis Louis (Jean) ARNAUD, homme Stéphanois de 21 ans. Je suis actuellement un étudiant dans la <a class="tooltip" href="{{route('project', ["url" => "annee-atii-iut"])}}">Licence Professionnelle ATII <span class="tooltiptext">Animateur des Technologies de l'Information et de l'Internet</span> de l'IUT de Saint Etienne</a> et en <a href="{{route('project', ["url" => "alternance-cdandlp"])}}">alternance dans la société CDandLP</a>, une plateforme web internationale dans la mise en relations et vente de CD et Vinyle.</p>
		<p>Je suis issue d'un <a class="tooltip" href="{{route('project', ["url" => "annee-bts-sio"])}}">BTS SIO <span class="tooltiptext">Brevet de Technicien Supérieur dans les Services Informatique aux Organisation</span></a>, ayant effectués ces <a href="{{route('project', ["url" => "gemah-outil-dsden-inspection-academique"])}}">stages à l'Inspection Académique de Saint-Etienne dans le service de la <span class="tooltip">DSDEN<span class="tooltiptext">Direction Services Départementaux Éducation Nationale</span></span> dans le secteur de la <span class="tooltip">MDPH<span class="tooltiptext">Maison Départementale des Personnes Handicapées</span></span> sur l'application <span class="tooltip">GEMAH<span class="tooltiptext">GEstion de prêt de MAtériel aux enfants en situation de Handicap</span></span></a>et d'un <a class="tooltip" href="{{route('project', ["url" => "annee-bac-s-isn"])}}">Bac S spécialité ISN <span class="tooltiptext">Bac Scientifique spécialité Informatique et science du numérique</span></a> au lycée Simone Weil.</p>
		<p>J'ai une formation et expérience bien plus poussé dans le développement de site ou application web Back-end, notamment en PHP (Majoritairement avec le Framework Laravel, mais sait travail en PHP brut. J'ai également déjà eu travail sur du Symfony) pour le langage de développement et MariaDB - SQL pour la gestion des données. Bien qu'ayant des connaissances en Front-end, et des notions de SEO (référencement), le droit Informatique, l'utilisation d'outil Adobe pour des réalisations graphiques ainsi que des bases de management.</p>
		<p>Je suis une personne très attachée au "fait main" en matière de réalisation web et donc n'est pas cherché à apprendre plus que cela sur les divers CMS sur le marché.</p>
		<p>J'ai des passions diverses et éparses allant de l'informatique à la littérature en passant par la psychologie et les jeux vidéo.<br>Je me définis comme une personne franche, étant près à prendre la parole sur des sujets divers. Mais je ne suis pas souvent celui qui initie la prise de parole.</p>
		<p>J'ai une tendance à être parfois pointilleux sur des détails que je n'arrive pas à comprendre, afin d'être sûr de la marche à suivre. Je suis donc près à questionner un interlocuteur si je l'hésite nécessaire.<br>Je sais cependant me recadrer si la situation l'exige et suis capable d'accorder ma confiance vis-à-vis de choix pris en moment critique ou de crise.</p>
		<p>Je ne me considère également pas être une personne avec des facilités d'apprentissage, bien que n'ayant pas encore eu beaucoup d'expérience pour le savoir. Je sais cependant être téméraires et volontaire pour y parvenir.<br>J'ai, malgré une dépréciation de mes compétences me laissant penser que je suis lent, d'après divers retours un rythme de travail plus que correct et une qualité équivalente.</p>
		<p>Enfin, un léger perfectionnisme, non aidez par mon côté curieux, me pousse à parfois avoir besoin de questionner certaines bases ou fonctions comprissent dans les constructions (maquettes, schémas, codes, ...) auprès des personnes pouvant m'aider dans ce cadre. Je suis cependant capable de me recadrer si la situation n'est pas propice, d'après moi.</p>
		<p>J'ai réalisé ce <a href="{{route('project', ["url" => "evolutions-portfolio"])}}">portfolio</a> (qui est en soit, ma troisième version) dans le cadre de la licence ATII.</p>
		<p><a id="skill" class="opener">Compétences V</a></p>
		<div id="skillbox" class="hide">
			<p>
				<h3>Langage de développement :</h3>
				<ul class="no-point">
					<li>PHP - en brut et avec Framework : Laravel / Symfony</li>
					<li>JavaScript (les bases) - en brut et avec Framework : JQuery</li>
					<li>Java (les bases) -  en brut</li>
					<li>Python (les bases) - en brut</li>
				</ul>
			</p>

			<p>
				<h3>Langage de gestion des données :</h3>
				<ul class="no-point">
					<li>SQL - MariaDB/MySQL</li>
				</ul>
			</p>

			<p>
				<h3>OS :</h3>
				<ul class="no-point">
					<li>Windows (Interface de développement et logiciel divers)</li>
					<li>Linux (Hébergement en local ou en ligne des sites) - Serveur : Nginx et Apache</li>
				</ul>
			</p>

			<p>
				<h3>Autres connaissances utiles :</h3>
				<ul class="no-point">
					<li>Connaissance des schémas Entité-Assocation et des formes normales (jusqu'à la 3°)</li>
					<li>Connaissance HTML5/CSS - En brut et avec Framework : Boostrap/Foundation</li>
					<li>Connaissance des Googles Web Fonts</li>
					<li>Connaissance de Git et des dépôt en ligne sur Github (LuriusOnada) et GitLab (Lurius)</li>
					<li>Connaissance des bases en Bash</li>
					<li>Quelques notions en Angular et TypeScript</li>
				</ul>
			</p>
		</div>
	</div>
</section>
@endsection
