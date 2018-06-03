<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matches', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('team_home_score', 8,2);
            $table->decimal('team_alway_score', 8,2);
            $table->datetime('date_match');
            $table->int('team_home_id');
            $table->int('team_alway_id');
            $table->int('stage_id');
            $table->timestamps();

            $table->foreign('team_home_id')->references('id')->on('teams');
            $table->foreign('team_alway_id')->references('id')->on('teams');
            $table->foreign('stage_id')->references('id')->on('stages');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matches');
    }
}
