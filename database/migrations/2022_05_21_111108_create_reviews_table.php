
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
        Schema::create('reviews', function (Blueprint $table) {
			$table->increments('id');
			$table->longText('review');
			$table->integer('star');
            $table->integer('patient_id')->unsigned();
            $table->bigInteger('doctor_ssn')->unsigned();
            $table->foreign('patient_id')
                  ->references('id')
                  ->on('patients')
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
        Schema::table('reviews', function (Blueprint $table) {
            //
        });
    }
};
