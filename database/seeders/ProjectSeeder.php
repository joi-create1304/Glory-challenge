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
            'title' => ' Construction d\'un Complexe administratif',
            'slug' => 'Complexe-administratif',
            'category' => 'Gestion de projet',
            'status' => 'Terminé',
            'duration' => '12 mois',
            'description' => "Un projet de construction d'un complexe administratif moderne et fonctionnel, intégrant des bureaux, des salles de réunion et des espaces communs pour améliorer l'efficacité organisationnelle.",
            'cover_image' => asset('images/img1.jpg'),
        ]);

        Project::create([
            'title' => 'Stratégie de croissance PME',
            'slug' => 'Strategie-croissance-PME',
            'category' => 'Planification ',
            'status' => 'En cours',
            'duration' => '06 mois',
            'description' => "Un projet de construction d'une centrale solaire de 10 MW, visant à produire de l'énergie renouvelable et réduire l'empreinte carbone.",
            'cover_image' => asset('images/img2.jpg'),
        ]);

        Project::create([
            'title' => 'Optimisation des processus',
            'slug' => 'Optimisation-processus',
            'category' => 'Conseil ',
            'status' => 'Terminé',
            'duration' => '08 mois',
            'description' => "Un projet de modernisation numérique de l'infrastructure informatique, visant à améliorer l'efficacité et la sécurité des systèmes d'information.",
            'cover_image' => asset('images/img3.jpg'),
        ]);

        Project::create([
            'title' => 'Programme de formation en gestion de projet',
            'slug' => 'Programme-formation-gestion-projet',
            'category' => 'Formation',
            'status' => 'En cours',
            'duration' => '06 mois',
            'description' => "Un programme de formation comprehensive en gestion de projet, destiné à développer les compétences des professionnels dans la planification, l'exécution et le suivi des projets.",
            'cover_image' => asset('images/img4.jpg'),
        ]);
    }
}
