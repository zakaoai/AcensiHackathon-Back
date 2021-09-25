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
            'libelle' => 'Concevoir une tâche',
            'cout' => 1,
            'ordre' => 0
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Développer une tâche',
            'cout' => 1,
            'ordre' => 1
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Tester une tâche',
            'cout' => 1,
            'ordre' => 2
        ]);
        DB::table('cards')->insert([
            'libelle' => 'Mettre en production',
            'cout' => 1,
            'ordre' => 3
        ]);
        DB::table('games')->insert([
            'libelle' => 'Tutoriel',
            'niveau' => '0'
        ]);
        DB::table('games')->insert([
            'libelle' => 'Niveau 1',
            'niveau' => '1'
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 1
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 2
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 3
        ]);
        DB::table('card_game')->insert([
            'game_id' => 1,
            'card_id' => 4
        ]);
    }
}
