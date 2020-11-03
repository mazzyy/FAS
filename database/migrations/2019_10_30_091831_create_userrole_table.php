<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserroleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrole', function (Blueprint $table) {
            $table->bigIncrements('userRoleId');
            $table->string('UserRoleName');
            $table->bigInteger('capabilityId')->unsigned();
            $table->foreign('capabilityId')->references('capabilityId')->on('usercapability');

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
        Schema::dropIfExists('userrole');
    }
}
