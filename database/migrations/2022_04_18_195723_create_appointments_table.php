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
        Schema::create('appointments', function (Blueprint $table) {
            $table->increments('id');
            $table->time('time');
            $table->string('day');
			$table->string('hall');
			$table->bigInteger('doctor_ssn')->unsigned();
            $table->boolean('patient_status');
            $table->boolean('doctor_status');
			   $table->foreign('doctor_ssn')
                  ->references('ssn')
                  ->on('doctors')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');

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
        Schema::dropIfExists('appointments');
    }
};