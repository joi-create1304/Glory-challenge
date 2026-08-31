<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'title' => 'Gestion de projets',
            'slug' => 'gestion-de-projets',
            'icon' => 'folder2-open',
            'description' => 'Nous pilotons vos projets avec rigueur, de la planification à la livraison.',
            'points' => ['Planification', 'Coordination', 'Suivi & contrôle'],
            'order' => 1,
        ]);

        Service::create([
            'title' => 'Planification stratégique',
            'slug' => 'planification-strategique',
            'icon' => 'graph-up',
            'description' => 'Des stratégies claires pour une croissance durable.',
            'points' => ['Analyse & diagnostic', 'Définition des objectifs', 'Feuille de route stratégique'],
            'order' => 2,
        ]);

        Service::create([
            'title' => 'Conseil et accompagnement',
            'slug' => 'conseil-et-accompagnement',
            'icon' => 'people-fill',
            'description' => 'Un partenaire de confiance pour vos décisions clés.',
            'points' => ['Optimisation des processus', 'Résolution de problèmes', 'Accompagnement personnalisé'],
            'order' => 3,
        ]);

        Service::create([
            'title' => 'Formation professionnelle',
            'slug' => 'formation-professionnelle',
            'icon' => 'mortarboard',
            'description' => 'Montez en compétences pour mieux performer.',
            'points' => ['Formations pratiques', 'Développement des talents', 'Certification interne'],
            'order' => 4,
        ]);
    }
}
