<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcessRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('process__requests', function (Blueprint $table) {
            $table->increments('request_id');
            $table->string('request_type');
            $table->boolean('hod_request')->default(FALSE);
            $table->boolean('hr_request')->default(FALSE);
            $table->boolean('ciso_request')->default(FALSE);
            $table->boolean('it_request')->default(FALSE);
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
        Schema::dropIfExists('process__requests');
    }
}
