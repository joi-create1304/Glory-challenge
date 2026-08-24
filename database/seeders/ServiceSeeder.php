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
            'title' => 'Étude & faisabilité',
            'slug' => 'etude-faisabilite',
            'icon' => '🔍',
            'description' => "Nous analysons la viabilité de vos idées pour de meilleures décisions.",
            'order' => 1,
        ]);

        Service::create([
            'title' => 'Planification',
            'slug' => 'planification',
            'icon' => '🗺️',
            'description' => "Stratégie, ressources et plan d'action clairs dès le départ.",
            'order' => 2,
        ]);

        Service::create([
            'title' => 'Gestion de projet',
            'slug' => 'gestion-de-projet',
            'icon' => '📋',
            'description' => 'Pilotage rigoureux des délais, budgets et objectifs fixés.',
            'order' => 3,
        ]);
    }
}
