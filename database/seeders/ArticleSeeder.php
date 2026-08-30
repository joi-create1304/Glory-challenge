<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::create([
            'title' => "Les clés d'une gestion de projet réussie",
            'slug' => 'les-cles-d-une-gestion-de-projet-reussie',
            'content' => "La gestion de projet est un exercice d'équilibre entre rigueur méthodologique et capacité d'adaptation. Trop de structure tue l'agilité, pas assez ouvre la porte au chaos.\n\nTout commence par une définition claire des objectifs. Un projet sans objectif mesurable est un projet sans boussole : l'équipe avance, mais personne ne sait vraiment vers quoi. Prendre le temps de cadrer précisément le \"pourquoi\" avant le \"comment\" évite bien des dérives en cours de route.\n\nVient ensuite la planification. Un calendrier réaliste vaut mieux qu'un calendrier optimiste : mieux vaut annoncer une échéance tenable que promettre l'impossible et devoir se justifier plus tard. Chaque jalon doit être identifiable, daté, et responsabilisé auprès d'une personne précise.\n\nEnfin, la communication reste le facteur le plus sous-estimé. Un point d'étape hebdomadaire, même bref, permet de détecter les blocages avant qu'ils ne deviennent des crises. La gestion proactive des risques n'est pas une option : c'est ce qui distingue un projet maîtrisé d'un projet subi.",
            'excerpt' => "Découvrez les méthodes et outils essentiels pour piloter vos projets avec efficacité.",
            'cover_image' => asset('images/blog1.jpg'),
            'published_at' => now()->subDays(12),
        ]);

        Article::create([
            'title' => 'Comment atteindre vos objectifs plus vite',
            'slug' => 'comment-atteindre-vos-objectifs-plus-vite',
            'content' => "Aller plus vite ne veut pas dire brûler les étapes — cela signifie éliminer ce qui ralentit inutilement. La première source de lenteur, dans la plupart des organisations, ce sont des objectifs mal définis dès le départ.\n\nDéfinir un objectif clairement, c'est pouvoir répondre en une phrase à la question : \"comment saura-t-on que c'est réussi ?\". Sans cette réponse, l'équipe navigue à vue, révise sans cesse sa direction, et perd un temps précieux en allers-retours.\n\nLa deuxième clé, c'est le découpage. Un objectif ambitieux découpé en tâches réalisables sur une à deux semaines devient concret, mesurable, et surtout motivant : chaque petite victoire nourrit la suivante.\n\nEnfin, la motivation ne se décrète pas, elle s'entretient. Célébrer les étapes intermédiaires, donner de la visibilité sur les progrès réalisés, et ajuster la charge de travail avant l'épuisement sont autant de leviers concrets pour maintenir le cap sur la durée.",
            'excerpt' => "Stratégies pratiques pour améliorer la performance et la productivité de vos équipes.",
            'cover_image' => asset('images/blog2.jpg'),
            'published_at' => now()->subDays(16),
        ]);

        Article::create([
            'title' => 'Le partenariat gagnant pour des projets durables',
            'slug' => 'le-partenariat-gagnant-pour-des-projets-durables',
            'content' => "Un projet durable ne se construit jamais seul. Il repose sur un réseau de partenaires — clients, fournisseurs, collectivités, équipes internes — dont l'alignement conditionne directement la réussite à long terme.\n\nLe premier principe d'un partenariat solide, c'est la transparence. Partager honnêtement les contraintes, les risques et les attentes dès le départ évite les malentendus coûteux qui apparaissent souvent trop tard dans le cycle de vie d'un projet.\n\nLe second principe, c'est l'engagement réciproque. Un partenariat déséquilibré, où une seule partie porte l'effort, s'essouffle inévitablement. Les collaborations qui durent sont celles où chaque partie prenante retire une valeur claire de son implication.\n\nEnfin, la durabilité elle-même — environnementale, sociale, économique — ne devrait plus être une option en fin de projet, mais un critère intégré dès la phase de conception. C'est cette anticipation qui distingue un projet ponctuel d'une transformation qui laisse une trace positive durable.",
            'excerpt' => "Pourquoi la collaboration est la clé du succès pour des projets durables et responsables.",
            'cover_image' => asset('images/blog3.jpg'),
            'published_at' => now()->subDays(20),
        ]);
    }
}
