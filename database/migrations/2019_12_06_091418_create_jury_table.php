<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('juryTeam', function (Blueprint $table) {
            $table->bigIncrements('juryTeamId')->unsigned();
            $table->bigInteger('userRoleId')->unsigned();
            $table->bigInteger('userId');
            $table->string('juryTeamName');
            $table->foreign('userRoleId')->references('userRoleId')->on('userrole');
            $table->foreign('userId')->references('id')->on('users');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('juryTeam');
    }
}
