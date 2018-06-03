<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bets', function (Blueprint $table) {
            $table->increments('id');
            $table->double('score_team_home', 8, 2);
            $table->double('score_team_alway', 8, 2);
            $table->double('points', 8, 2);
            $table->int('match_id');
            $table->int('user_id');
            $table->int('ball_id');
            $table->timestamps();

            $table->foreign('match_id')->references('id')->on('matches');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('ball_id')->references('id')->on('balls');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bets');
    }
}
