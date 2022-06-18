<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TachesPubliquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('taches_publique')->delete();
        DB::table('taches_publique')->insert([
            'description' => "rendre sur teams Rendu>renduEcommerce",
            'date_debut' => strtotime("18-06-2022 19:00:00"),
             'duree' => 10,
             'localisation' => 'T147',
            'titre' => 'Rendu site Ecommerce',
            'classe' => 'M50-2',
            'id_enseignant' => 55,
            'id_eleve' => null,
            'localisation' => null,
            'type' => 'devoir']);

            DB::table('taches_publique')->insert([
                'description' => "test théorique",
                'date_debut' => strtotime("19-06-2022 15:00:00"),
                 'duree' => 120,
                 'localisation' => '',
                'titre' => 'test ecommerce',
                'classe' => 'M50-3',
                'id_enseignant' => 55,
                'id_eleve' => null,
                'localisation' => 'T154',
                'type' => 'test']);

                DB::table('taches_publique')->insert([
                    'description' => "prendre des chips",
                    'date_debut' => strtotime("23-06-2022 08:30:00"),
                     'duree' => 240,
                     'localisation' => '',
                    'titre' => 'Apéro du matin',
                    'classe' => 'M50-3',
                    'id_enseignant' => 55,
                    'id_eleve' => null,
                    'localisation' => 'T154',
                    'type' => 'event']);
       /*  DB::table('taches_publique')->insert([
            'description' => "2 page A4 avec l'ensemble des élèves de la classe",
            'date_debut' => strtotime("20-07-2022 18:30:23"),
            'duree' => 240,
            'titre' => 'rendu trombinoscope',
            'id_enseignant' => 1,
            'id_eleve' => null,
            'classe' => 'M49-1',
            'localisation' => 'Cyberlearn',
            'type' => 'devoir']);



        DB::table('taches_publique')->insert([
                'description' => "tout documents autorisés",
                'date_debut' => strtotime("20-06-2022 18:30:23"),
                'duree' => 240,
                'titre' => "examen de prog",
                'localisation' => 'T147',
                'id_enseignant' => 2,
                'id_eleve' => null,
                'classe' => 'M49-2',
                'type' => 'examen']);
        
                DB::table('taches_publique')->insert([
                    'description' => "amenez votre nourriture",
                    'date_debut' => strtotime("20-05-2022 18:30:23"),
                     'duree' => 240,
                     'localisation' => 'T147',
                    'titre' => 'Repas canadien comem',
                    'classe' => 'M49-3',
                    'id_enseignant' => null,
                    'id_eleve' => 1,
                    'localisation' => 'Bord du Lac',
                    'type' => 'autre']); */

    }


    






}
