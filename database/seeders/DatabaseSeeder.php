<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
            'libelle' => 'Analyser et concevoir la tâche',
            'cout' => 15,
            'ordre' => 0
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Développer et implémenter la tâche',
            'cout' => 15,
            'ordre' => 1
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Tester une tâche',
            'cout' => 15,
            'ordre' => 2
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Déployer et mettre en production',
            'cout' => 15,
            'ordre' => 3
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Concevoir la tâche',
            'cout' => 30,
            'ordre' => 0
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Design de la tâche',
            'cout' => 30,
            'ordre' => 1
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Développer la tâche',
            'cout' => 40,
            'ordre' => 2
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Tester une tâche',
            'cout' => 15,
            'ordre' => 3
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Déployer et mettre en production',
            'cout' => 5,
            'ordre' => 4
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Réunion pré-requis',
            'cout' => 20,
            'ordre' => 0
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Design de la tâche',
            'cout' => 20,
            'ordre' => 2
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Conception correctif',
            'cout' => 10,
            'ordre' => 4
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Développement correctif',
            'cout' => 25,
            'ordre' => 0
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Tester correctif',
            'cout' => 15,
            'ordre' => 2
        ]);
        DB::table('games')->insert([
            'libelle' => 'Tutoriel',
            'niveau' => '0',
            'nb_sprints' => 1
        ]);
        DB::table('games')->insert([
            'libelle' => 'Niveau 1',
            'niveau' => '1',
            'nb_sprints' => 2
        ]);
        DB::table('games')->insert([
            'libelle' => 'Niveau 2',
            'niveau' => '2',
            'nb_sprints' => 3
        ]);
        DB::table('games')->insert([
            'libelle' => 'Niveau 3',
            'niveau' => '3',
            'nb_sprints' => 4
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 1,
            'priority' => 1,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 2,
            'priority' => 2,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 3,
            'priority' => 3,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 4,
            'priority' => 4,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 2,
            'card_id' => 5,
            'priority' => 1,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 2,
            'card_id' => 6,
            'priority' => 2,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 2,
            'card_id' => 7,
            'priority' => 3,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 2,
            'card_id' => 8,
            'priority' => 4,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 2,
            'card_id' => 9,
            'priority' => 5,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 10,
            'priority' => 1,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 5,
            'priority' => 2,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 11,
            'priority' => 3,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 7,
            'priority' => 4,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 8,
            'priority' => 5,
            'sprint' => 3
        ]);
        DB::table('card_game')->insert([
            'game_id' => 3,
            'card_id' => 9,
            'priority' => 6,
            'sprint' => 3
        ]);

        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 10,
            'priority' => 1,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 5,
            'priority' => 2,
            'sprint' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 11,
            'priority' => 3,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 7,
            'priority' => 4,
            'sprint' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 8,
            'priority' => 5,
            'sprint' => 3
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 12,
            'priority' => 6,
            'sprint' => 3
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 13,
            'priority' => 7,
            'sprint' => 3
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 14,
            'priority' => 8,
            'sprint' => 4
        ]);
        DB::table('card_game')->insert([
            'game_id' => 4,
            'card_id' => 9,
            'priority' => 9,
            'sprint' => 4
        ]);
    }
}
