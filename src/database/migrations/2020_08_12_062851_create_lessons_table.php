<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('student_id');
            $table->integer('teacher_id');
            $table->string('schedule_datetime');
            $table->string('schedule_date');
            $table->string('schedule_time');
            $table->string('units');
            $table->string('teacher_login')->default('On-going');
            $table->string('teacher_logout')->default('On-going');
            $table->string('student_login')->default('On-going');
            $table->string('student_logout')->default('On-going');
            $table->integer('teacher_status')->default('0');
            $table->integer('student_status')->default('0');
            $table->string('is_delete')->default('0');
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
        Schema::dropIfExists('salary');
    }
}
