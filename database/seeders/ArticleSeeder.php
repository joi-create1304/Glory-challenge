<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'content' => "La gestion de projet est un processus complexe qui nécessite une planification minutieuse, une communication efficace et une capacité à s'adapter aux changements. Pour réussir un projet, il est essentiel de définir des objectifs clairs, d'établir un calendrier réaliste et de mobiliser les ressources nécessaires. La collaboration entre les membres de l'équipe et la gestion proactive des risques sont également des facteurs clés pour assurer le succès d'un projet.",
            // 'cover_image' => 'article1.jpg',
            'excerpt' => "Les clés d'une gestion de projet réussie",
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Comment atteindre vos objectifs plus vite ',
            'slug' => 'comment-atteindre-vos-objectifs-plus-vite',
            'content' => "Pour atteindre vos objectifs plus rapidement, il est important de les définir clairement, de les diviser en tâches réalisables et de maintenir une motivation constante.",
            // 'cover_image' => 'article2.jpg',
            'excerpt' => "Comment atteindre vos objectifs plus vite ",
            'published_at' => now(),
        ]);

        Article::create([
            'title' => 'Le partenariat gagnant pour des projets durables',
            'slug' => 'le-partenariat-gagnant-pour-des-projets-durables',
            'content' => "Le partenariat efficace est un pilier essentiel pour la réussite de projets durables. En collaborant avec des parties prenantes engagées, il est possible de créer des solutions innovantes et respectueuses de l'environnement.",
            // 'cover_image' => 'article3.jpg',
            'excerpt' => "Le partenariat gagnant pour des projets durables",
            'published_at' => now(),
        ]);
    }
}
