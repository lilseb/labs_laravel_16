<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "texte_client" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client" => "01.jpg",
                "nom_client" => "Seb Lasante",
                "job_client" => "CEO Company",
                "created_at" => now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "Luffy D.Monkey",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "Levi Ackerman",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "Roronoa Zoro",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "Sanji ",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "Tanjiro ",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ]
        ]);
    }
}
