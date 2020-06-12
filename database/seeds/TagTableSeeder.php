<?php

use Illuminate\Database\Seeder;
use App\Models\Tag;

class TagTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            "Guide", 
            "Git",
            "Laravel",
            "Bootstrap",
            "ColdFusion", 
            "PHP", 
            "SQL", 
            "Projet", 
            "Alternance",
            "Symfony",
            "Stage",
        ];

        foreach($tags as $tag) {
            Tag::create(["name" => $tag]);
        }
    }
}
