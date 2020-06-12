<?php

use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectTableSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$projects = [
			[ 
				"presentation-outil-git", 
				"Présentation de l'outil Git", 
				"J'ai eu utilisé cette outil de versionning sur la quasi-totalité de mes projets. Et si vous aussi souhaiter savoir comment l'utiliser, voici un petit guide.", 
				"<p>Avec presque tous mes projets j'ai eu utilisé Git. Notamment pour faire des dépôts en ligne sur GitHub et GitLab.<br>Dans un premier temps, il faut bien penser, peut importe le site de dépôts, à générer une clé SSH sur son serveur.</p><p><code>ssh-keygen -t rsa -b 4096 -C \"adresse mail\"</code></p><p>Il y aura par la suite la possibilité d'ajouter (ou non si on laisse vide) un mot de passe pour utilisé la clé. Vous n'aurez alors plus qu'à suivre l'emplacement indiqué pour récupérer la clé public et l'ajouter sur le services que vous utiliserez.<br>Une fois cela fait, il vous suffira d'effectuer, dans le dossier que vous souhaitez envoyez à travers un dépôt git :</p><p><code> git init <br> git add . </code></p><p>Ensuite, si vous souhaitez faire un message nécessitant l'ouverture d'un traitement de texte, nano sur Linux par exemple, afin de détaillé le nom du commit sur la première ligne, puis des informations complémentaire, il faudra faire :</p><p><code> git commit -a </code></p><p>Si en revanche vous préférez n'envoyez qu'un titre simple, ce qui n'est pas la meilleur pratique, vous pourrez utilisez :</p><p><code> git commit -m \"Votre titre et message de description\"</code></p><p>Puis : </p><p><code> git remote add origin https://github.com/\"Pseudonyme sur service\"/\"Nom du dépot\".git <br> git push -u origin master </code></p><hr><p>Maintenant que notre projet est accessible en ligne, si on veut le récupérer sur une autre machine, il suffira d'effectuer cette commande :</p><p><code>git clone \"Liens vers le dépôt\"</code></p><hr><p>On a à présent notre dépôt et nous souhaitont développer une nouvelle fonctionnalité sans impacté directement tous le projet. Pour ce faire il suffit de passer par des \"branches\".<br>Une branche étant une copie du dépôt à partir du moment où on la créé et permettant ainsi de travaillé sur une base que l'on sait saine et ceux sans risquer d'annuler une modification faite par un pairs sur le projets.<br>Pour en créer une il suffit de lancer cette commande :</p><p><code>git checkout -b \"Nom de la branche\"</code></p><p>Le travail par branche ce fait souvent d'une manière à avoir \"master\", la branche sur laquelle on pose l'hébergement, dans le cas d'un site, \"main\" ou \"dev\", qui elle est la version en cours de développement et sur laquelle on place nos nouvelles branches pour ajouter des fonctionnalités.<br>De part cette structuration, l'envoie des modifications différent. En effet, il faudra entrer ces commandes :</p><p>Ces lignes là ne change pas :<br><code>git add .<br>git commit -a</code><br>En revanche ici, il faudra ajouter un élément : <br><code>git push \"Nom de la branche\"</code></p><hr><p>Imaginons maintenant que l'on souhaite mettre en production notre branche \"GestionUtilisateur\" en production.<br>Pour ce faire il faudra faire en sorte qu'aucun conflit ne soit détecté.<br><br>Ainsi, dans un premier temps, nous allons allez sur la branche \"main et récupéré la dernière version\"</p><p><code>git checkout main<br>git pull</code></p><p>Si cette branche à des conflits, il faudra les résoudre et pensez à les envoyez avec un <code>git push</code>. Puis, du moment que \"main\" n'a pas d'erreur il faudra alors réalisez ces commandes :</p><p><code>git checkout GestionUtilisateur<br>git merge main</code></p><p>Nous avons ici fait en sorte d'envoyer les informations de la version de \"main\" que nous possédions sur la branche et pouvons donc vérifié si des conflits ce déclare. Si aucun ne se présent ou que comme indiqué plus haut vous les avez corriger et envoyer sur le dépôts distant, alors vous pourrez faire l'inverse, comme suis :</p><p><code>git checkout main<br>git merge GestionUtilisateur</code></p><p>Vous n'aurez alors plus qu'à effectuer les mêmes manipulations pour envoyer sur la production en évitant que tous nouveau conflit n'arrive. Bien entendu, il est conseillé de vérifier qu'aucun nouveau commit n'ai été envoyé avant de faire un merge.</p><p>Il y a sans doute des fonctions que je n'est pas indiqué et expliqué, comme <span class='tooltip'><code>git reset --HEAD</code><span class='tooltiptext'>Permet de redéfinir le dernier commit pris en compte et donc effacé tous ceux envoyé après</span></span> qui sont beaucoup plus occassionnel ou dont je n'ai tous simplement jamais eu besoin jusqu'à là. Il se peut aussi que j'ai fait des oublis.</p>",
				["Guide", "Git"],
			],
			[
				"evolutions-portfolio",
				"Les évolutions de mon portfolio",
				"Au fil des années, et surtout de mes études, mon portfolio à eu été refait 2 fois. Si vous souhaiter voir et comprendre comment j'en suis arrivé à ma v3 actuel c'est ici",
				"<h2>Pas encore écrit</h2>",
				["Laravel", "SQL", "Projet", "Bootstrap"],
			],
			/*[
				"alternance-cdandlp",
				"Mon année d'alternance chez CDandLP",
				"J'ai été et je suis encore salarié de CDandLP, célèbre plateforme internationale pour la mise en relation de vendeur de CD et vinyle. Voici ce dont je peux parler.",
				"<h2>En attente de retour au bureau, afin de savoir ce dont j'aurais le droit de parler</h2>",
				["ColdFusion", "PHP", "SQL", "Bootstrap", "Projet", "Alternance"]
			],*/
			[
				"gemah-outil-dsden-inspection-academique",
				"GEMAH, outils de gestion pour la DSDEN de l'Inspection Académique",
				"J'ai, durant mes années BTS, été, avec deux camarades, 2 fois à l'inspection académique dans le cadre de maintenance et refonte globale de l'outil GEMAH.",
				"<h2>Pas encore écrit</h2>",
				["Symfony", "Laravel", "PHP", "SQL", "Bootstrap", "Projet", "Stage"]
			],
			/*[
				"schema-entite-association",
				"Le Schéma Entité/Association",
				"",
				"<h2>Pas encore écrit</h2>",
				["Guide"]
			],
			[
				"presentation-langage-sql",
				"Présentation du langage SQL",
				"",
				"<h2>Pas encore écrit</h2>",
				["Guide", "SQL"]
			], */
			[
				"presentation-framework-laravel",
				"Présentation du framework Laravel",
				"Laravel est le framework PHP que j'ai le plus utilisé. Pour même dire vrai j'ai plus appris à utilisé Laravel que PHP. Mais si vous aussi vous souhaitez voir des bases, c'est ici.",
				"<h2>Pas encore écrit</h2>",
				["Guide", "Laravel"]
			],
			/*[
				"ptut-chemin-lola",
				"Projet PTUT, le chemin de lola",
				"Le Chemin de Lola est une association visant à informaté sur l'AVC infantile. Durant mon année ATII j'ai réalisé un site durant un travail de groupe, le projet tutoré, où ptut.",
				"<h2>Pas encore écrit, le site n'étant pas encore en ligne</h2>",
				["Laravel", "Projet"] // Ajoutez tag -> Chaos/Foutoir si je veux à terme réellement décrire gestion 
			],*/
			/*
			[
				"annee-atii-iut",
				"Mon année licence professionnel ATII à l'IUT de Saint-Etienne",
				"<h2>Pas encore écrit</h2>",
				"<h2>Pas encore écrit</h2>",
				["Projet"]
			],
			[
				"annee-bts-sio",
				"Mes années aux BTS SIO du Lycée Simone Weil",
				"",
				"",
			],
			[
				"annee-bac-s-isn",
				"Mon année Bac S, en spécialité ISN",
				"",
				"",
			], */
		];

		foreach ($projects as $project) {
			$p = Project::create([
				'url' => $project[0],
				'title' => $project[1],
				'resume' => $project[2],
				'content' => $project[3],
			]);

			$p->tags()->sync($project[4]);
		}
	}
}
