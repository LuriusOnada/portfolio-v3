<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // On entre les tags
        $this->call(TagTableSeeder::class);

        // Puis on entre un projet, suivi d'une liste avec nom des tags à rechercher dans bdd
        $this->call(ProjectTableSeeder::class);

        // Autre possibilité si nécessaire : créé un modèle pour pivot et seeder.
    }
}
