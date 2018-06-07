<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeysMatches extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('matches', function(Blueprint $table)
        {        
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
        Schema::table('matches', function(Blueprint $table)
        { 
            $table->dropForeign('team_home_id');
            $table->dropForeign('team_alway_id');
            $table->dropForeign('stage_id');
        });
    }
}
