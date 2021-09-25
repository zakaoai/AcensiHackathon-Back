<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardgamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_game', function (Blueprint $table) {
            $table->bigInteger('game_id')->unsigned();
            $table->bigInteger('card_id')->unsigned();
            $table->integer('priority')->unsigned();
        });

        Schema::table('card_game', function($table) {
            $table->foreign('game_id')->references('id')->on('games');
            $table->foreign('card_id')->references('id')->on('cards');
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cardgames');
    }
}
