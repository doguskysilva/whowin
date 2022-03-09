<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->uuid('public_id');
            $table->foreignId('season_id');
            $table->dateTimeTz('start_at');
            $table->dateTimeTz('finished_at')->nullable();
            $table->boolean('is_tied')->nullable();
            $table->unsignedBigInteger('team_winner')->nullable();
            $table->unsignedBigInteger('team_home');
            $table->unsignedBigInteger('team_visitor');
            $table->integer('score_home')->nullable();
            $table->integer('score_visitor')->nullable();
            $table->text('description')->nullable();
            $table->json('metadata')->nullable();
            $table->timestamps();

            $table->foreign('team_winner')->references('id')->on('teams');
            $table->foreign('team_home')->references('id')->on('teams');
            $table->foreign('team_visitor')->references('id')->on('teams');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
};
