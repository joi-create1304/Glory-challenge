<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => 'Complexe administratif',
            'slug' => 'Complexe-administratif',
            'category' => 'Bâtiment',
            'status' => 'Terminé',
            'duration' => '12 mois',
            'description' => "Un projet de construction d'un complexe administratif moderne et fonctionnel, intégrant des bureaux, des salles de réunion et des espaces communs pour améliorer l'efficacité organisationnelle.",
            // 'cover_image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        ]);

        Project::create([
            'title' => 'Projet Solaire 10MW',
            'slug' => 'Projet-Solaire-10MW',
            'category' => 'Énergie',
            'status' => 'En cours',
            'duration' => '06 mois',
            'description' => "Un projet de construction d'une centrale solaire de 10 MW, visant à produire de l'énergie renouvelable et réduire l'empreinte carbone.",
            // 'cover_image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        ]);

        Project::create([
            'title' => 'Plateforme scolaire',
            'slug' => 'Plateforme-scolaire',
            'category' => 'IT & digital',
            'status' => 'Terminé',
            'duration' => '08 mois',
            'description' => "Un projet de modernisation numérique de l'infrastructure informatique, visant à améliorer l'efficacité et la sécurité des systèmes d'information.",
            // 'cover_image' => 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1170&q=80',
        ]);
    }
}
