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
				"J'utilise cet outil de versionnage sur la quasi-totalité de mes projets. Et si vous aussi souhaitez savoir comment l'utiliser, voici un petit guide.", 
				"<p>J'ai utilisé Git sur presque tous mes projets. Notamment pour faire des dépôts en ligne sur GitHub et GitLab.<br>Dans un premier temps, il faut bien penser, peu importe le site de dépôts, à générer une clé SSH sur son serveur.</p><p><code>ssh-keygen -t rsa -b 4096 -C \"adresse mail\"</code></p><p>Il y aura par la suite la possibilité d'ajouter (ou non si on laisse vide) un mot de passe pour utiliser la clé. Vous n'aurez alors plus qu'à suivre l'emplacement indiqué pour récupérer la clé publique et l'ajouter sur le service que vous utiliserez.<br>Une fois cela fait, il vous suffira d'effectuer, dans le dossier que vous souhaitez envoyez à travers un dépôt git :</p><p><code> git init <br> git add . </code></p><p>Ensuite, si vous souhaitez faire un message nécessitant l'ouverture d'un traitement de texte, nano sur Linux par exemple, afin de détailler le nom du commit sur la première ligne, puis des informations complémentaires, il faudra faire :</p><p><code> git commit -a </code></p><p>Si en revanche vous préférez n'envoyez qu'un titre simple, ce qui n'est pas la meilleure pratique, vous pourrez utiliser :</p><p><code> git commit -m \"Votre titre et message de description\"</code></p><p>Puis : </p><p><code> git remote add origin https://github.com/\"Pseudonyme sur service\"/\"Nom du dépot\".git <br> git push -u origin master </code></p><hr><p>Maintenant que notre projet est accessible en ligne, si on veut le récupérer sur une autre machine, il suffira d'effectuer cette commande :</p><p><code>git clone \"Liens vers le dépôt\"</code></p><hr><p>On a à présent notre dépôt et nous souhaitons développer une nouvelle fonctionnalité sans impacté directement tout le projet. Pour ce faire il suffit de passer par des \"branches\".<br>Une branche étant une copie du dépôt à partir du moment où on l'a créé et permettant ainsi de travailler sur une base que l'on sait saine et ceux sans risquer d'annuler une modification faite par un pairs sur le projet.<br>Pour en créer une il suffit de lancer cette commande :</p><p><code>git checkout -b \"Nom de la branche\"</code></p><p>Le travail par branche ce fait souvent d'une manière à avoir \"master\", la branche sur laquelle on pose l'hébergement, dans le cas d'un site, \"main\" ou \"dev\", qui elle est la version en cours de développement et sur laquelle on place nos nouvelles branches pour ajouter des fonctionnalités.<br>De part cette structuration, l'envoie des modifications diffères. En effet, il faudra entrer ces commandes :</p><p>Ces lignes-là ne change pas :<br><code>git add .<br>git commit -a</code><br>En revanche, ici, il faudra ajouter un élément : <br><code>git push \"Nom de la branche\"</code></p><hr><p>Imaginons maintenant que l'on souhaite mettre en production notre branche \"GestionUtilisateur\" en production.<br>Pour ce faire il faudra faire en sorte qu'aucun conflit ne soit détecté.<br><br>Ainsi, dans un premier temps, nous allons aller sur la branche \"main et récupéré la dernière version\".</p><p><code>git checkout main<br>git pull</code></p><p>Si cette branche à des conflits, il faudra les résoudre et penser a les envoyez avec un <code>git push</code>. Puis, du moment que \"main\" n'a pas d'erreur il faudra alors réaliser ces commandes :</p><p><code>git checkout GestionUtilisateur<br>git merge main</code></p><p>Nous avons ici fait en sorte d'envoyer les informations de la version de \"main\" que nous possédions sur la branche et pouvons donc vérifier si des conflits ce déclare. Si aucun ne se présente ou que, comme indiqué plus haut, vous les avez corrigé et envoyé sur le dépôts distant, alors vous pourrez faire l'inverse, comme suis :</p><p><code>git checkout main<br>git merge GestionUtilisateur</code></p><p>Vous n'aurez alors plus qu'à effectuer les mêmes manipulations pour envoyer sur la production en évitant que tous nouveau conflit n'arrive. Bien entendu, il est conseillé de vérifier qu'aucun nouveau commit n'ai été envoyé avant de faire un merge.</p><p>Il y a sans doute des fonctions que je n'ai pas indiqués et expliqués, comme <span class='tooltip'><code>git reset --HEAD</code>. <span class='tooltiptext'>Permet de redéfinir le dernier commit pris en compte et donc effacé tous ceux envoyé après</span></span> qui sont beaucoup plus occassionnels ou dont je n'ai tous simplement jamais eu besoin jusqu'à là. Il se pourrait aussi que j'ai fait des oublies.</p>",
				["Guide", "Git"],
			],
			[
				"evolutions-portfolio",
				"Les évolutions de mon portfolio",
				"Au fil des années, et surtout de mes études, mon portfolio a été refait deux fois. Si vous souhaitez voir et comprendre comment j'en suis arrivé à ma version actuelle c'est ici.",
				"<p>Mon premier portfolio avait été réalisé lors de mon année de terminal en ISN, à Simone Weil.<br>Je n'avais alors pas réellement de connaissance dans les langages de programmation, le site était donc une page unique, avec 10 boutons gérés en JQuery (code très simple, que j'utilise encore parfois, et qui permet uniquement d'enlever ou mettre une classe CSS).</p><p>Le site, mis sur un hébergeur gratuit, est en ligne sur cette adresse : <a href=\"http://cv-louis-jean-arnaud.fr.nf/\" target=\"_blank\" rel=\"nofollow\">cv-louis-jean-arnaud.fr.nf</a>.<br>Vous pourrez également voir le \"code\" de ce site sur ce <a href=\"https://github.com/LuriusOnada/portfolio-BTS1\" target=\"_blank\" rel=\"nofollow\">github</a>.<br>Toutes les informations contenues dessus sont très datées et je ne l'avais jamais réellement fait référencé. Je le laisse en ligne également par oubli du mot de passe, chose peu glorieuse mais véridique, l'ayant fait durant des années où je comprenais encore mal la sécurité informatique et l'importance de ces mots de passe.</p><p>Au cas où vous ne souhaitiez pas allez le voir, voici la \"<span class=\"tooltip\">page<span class=\"tooltiptext\">Le segment du fichier n'étant pas caché par défaut</span></span>\" d'accueil :</p><img src=".asset('/images/portfolio-accueil-v1.png')." class=\"img-limit\"><hr><p>Nous arrivons ensuite à mes années BTS, plus précisément à ma deuxième et dernière année puisque la réalisation d'un portfolio nous y avait donnés. Après cela est peut-être aussi un oubli de ma part.<br>Nous n'avions eu, dans tous les cas, qu'un temps assez court, pour le réaliser en parallèle de nos cours.</p><p>J'étais, et cela pourra se remarquer sur la capture de l'écran d'accueil, sur un thème Bootstrap en ayant improvisé une barre de navigation, qui malheureusement rend mal sur tous les supports.<br>Pour le côté purement code, j'avais migré d'une simple page \"tout en un\" pour un site fait avec Laravel, framework dont j'avais appris le fonctionnement en grande partie grâce à un camarade et amis, mais également en ayant fait des séances d'apprentissage entre étudiants, afin que l'on puisse avoir de réel retour et conseil autre que des remarques désobligeantes d'un de nos deux professeurs.</p><p>J'avais pour ce site visé l'exploration des fonctionnalités de la librairie \"Eloquent\" intégré à Laravel et permettant de piloter la base de données depuis le code, de sa création, aux requêtes, en passant par les relations. De ce fait, j'avais forcé des tables pivots en ajoutant une gestion de tag mais également des commentaires et donc dût ajouter une interface de connexion et gestion des membres.</p><p>Pour les personnes intéressées à voir le code, le dépôt sur Gitlab est accessible <a href=\"https://gitlab.com/Lurius/cv-lurius/\" target=\"_blank\" rel=\"nofollow\">ici</a>. Et sinon, voici la capture d'écran de la page d'accueil :</p><img src=".asset('/images/portfolio-accueil-v2.png')." class=\"img-limit\"><p>Ainsi que la liste des projets :</p><img src=".asset('/images/portfolio-projet-v2.png')." class=\"img-limit\"><hr><p>Et nous voilà donc à ce troisième portfolio, celui que vous voyez actuellement.<br>Pour faire simple, plusieurs de nos cours demandait de réaliser une maquette ou un portfolio et bien que mon ancien ne me déplaisait pas j'ai essayé le plus possible d'en faire un qui serait dans un premier temps plus simple, mais aussi un peu plus élégant que mon ancien.<br>Après, je ne suis toujours pas réellement bon pour réaliser, d'après moi, de beaux visuels.</p><p>J'avais, au début du projet, envie de faire qu'une refonte graphique. Mais j'en suis venu à la réflexion que mon système de connexion et commentaire était au final un peu en trop et rapprochait mon portfolio d'un blog. Il l'est certes toujours, avec ma manière de rédiger mes projets, mais un peu moins poussé.</p><p>Ce site a également été réalisé en Laravel, seulement j'ai fait en sorte de réduire le code au minimum. Si j'ai le temps, mais surtout l'envie, je changerais peut-être cette ligne précisant que je l'ai refait en PHP brut.<br>Dans tous les cas j'imagine que cette fois, je ne vous ferais pas l'affront de vous montrer une capture de la page d'accueil. Cependant, si vous souhaitez allez voir le dépôt github est <a href=\"https://github.com/LuriusOnada/portfolio-v3\" target=\"_blank\" rel=\"nofollow\">ici</a>.</p>",
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
