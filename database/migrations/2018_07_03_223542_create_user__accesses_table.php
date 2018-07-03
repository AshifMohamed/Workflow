<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAccessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user__accesses', function (Blueprint $table) {
            $table->increments('user_access_id')->primary();
            $table->unsignedInteger('request_id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('department');
            $table->string('designation');
            $table->string('working_hours');
            $table->string('email');
            $table->string('nic');
            $table->string('gender');
            $table->string('ciso');
            $table->string('display_name');
            $table->string('logon_id');
            $table->timestamps();
        });

        Schema::table('user__accesses', function (Blueprint $table) {
            $table->foreign('request_id')->references('request_id')->on('requests');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user__accesses');
    }
}
