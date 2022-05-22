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
        Schema::create('appointment_doctor', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
			$table->boolean('aoopintment_status');
            $table->integer('patient_id')->unsigned();
            $table->integer('appointment_id')->unsigned();
            $table->bigInteger('doctor_ssn')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('appointment_id')
                  ->references('id')
                  ->on('appointments')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
        Schema::dropIfExists('appointment_doctor');
    }
};
