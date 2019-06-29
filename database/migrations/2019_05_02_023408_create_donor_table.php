<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bd_donor', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('district');
            $table->string('state');
            $table->integer('phnumber');
            $table->string('bloodgroup');
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
        Schema::dropIfExists('bd_donor');
    }
}
