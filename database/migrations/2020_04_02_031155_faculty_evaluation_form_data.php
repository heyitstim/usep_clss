<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class FacultyEvaluationFormData extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_evaluation_form_data', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->smallInteger('faculty_id')->references('id')
            ->on('faculty');
            $table->smallInteger('student_id')->references('id')
            ->on('user');
            $table->smallInteger('choice_id_1')->nullable();
            $table->smallInteger('choice_id_2')->nullable();
            $table->smallInteger('choice_id_3')->nullable();
            $table->smallInteger('choice_id_4')->nullable();
            $table->smallInteger('choice_id_5')->nullable();
            $table->smallInteger('choice_id_6')->nullable();
            $table->smallInteger('choice_id_7')->nullable();
            $table->smallInteger('choice_id_8')->nullable();
            $table->smallInteger('choice_id_9')->nullable();
            $table->smallInteger('choice_id_10')->nullable();
            $table->smallInteger('choice_id_11')->nullable();
            $table->smallInteger('choice_id_12')->nullable();
            $table->smallInteger('choice_id_13')->nullable();
            $table->smallInteger('choice_id_14')->nullable();
            $table->smallInteger('choice_id_15')->nullable();
            $table->smallInteger('choice_id_16')->nullable();
            $table->smallInteger('choice_id_17')->nullable();
            $table->smallInteger('choice_id_18')->nullable();
            $table->smallInteger('choice_id_19')->nullable();
            $table->smallInteger('choice_id_20')->nullable();
            $table->softDeletesTz();
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
        //
    }
}
