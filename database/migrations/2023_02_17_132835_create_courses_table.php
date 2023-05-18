<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->string('course_catg');
            $table->string('course_duration');
            $table->integer('live_session_day');
            $table->integer('fee_days_2');
            $table->integer('fee_days_3');
            $table->integer('fee_days_4');
            $table->integer('fee_days_5');
            $table->string('course_banner_1');
            $table->string('course_banner_2');
            $table->text('course_summry');
            $table->text('course_reqments');
            $table->integer('course_assgn_teacher');
            $table->string('course_teacher_role');
            $table->text('course_teacher_intro');
            $table->string('course_teacher_img1');
            $table->string('course_teacher_img2');
            $table->integer('course_status')->default(0);

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
        Schema::dropIfExists('courses');
    }
}
