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
        Schema::create('doctors', function (Blueprint $table) {
            $table->bigIncrements('ssn');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('phone')->unique();
            $table->date('birth_date');
            $table->float('rating');
            $table->string('img')->nullable();
            $table->string('speciality');
           
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('doctors');
    }
};
