<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requests', function (Blueprint $table) {
            $table->increments('request_id')->primary();
            $table->string('request_type');
            $table->boolean('hod_request')->default(FALSE);
            $table->boolean('hr_request')->default(FALSE);
            $table->boolean('ciso_request')->default(FALSE);
            $table->boolean('it_request')->default(False);
            $table->string('request_status');    
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
        Schema::dropIfExists('requests');
    }
}
