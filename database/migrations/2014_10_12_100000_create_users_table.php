<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password')->nullable();
            $table->string('role')->nullable();
            $table->tinyInteger('active')->nullable();
            $table->integer('school_id')->nullable();
            $table->integer('code')->nullable();//school code Auto generated
            $table->integer('student_code')->unique()->nullable();//Auto generated
            $table->string('gender')->default('')->nullable();
            $table->string('blood_group')->default('')->nullable();
            $table->string('nationality')->default('')->nullable();
            $table->string('phone_number')->unique()->default('')->nullable();
            $table->string('address')->default('')->nullable();
            $table->text('about')->default('')->nullable();
            $table->string('pic_path')->default('')->nullable();
            $table->tinyInteger('verified')->nullable();
            $table->integer('section_id')->unsigned()->nullable();
            // added column
            $table->integer('age')->nullable();
            $table->string('d_year')->nullable();
            $table->string('d_month')->nullable();
            $table->string('d_day')->nullable();
            $table->string('class')->nullable();
            $table->string('session')->nullable();
            $table->string('year')->nullable();
            $table->string('mailing_address')->nullable();
            $table->string('father_name')->nullable();
            $table->string('father_cnic_no')->nullable();
            $table->string('occupation')->nullable();
            $table->string('f_address')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('mother_cnic_no')->nullable();
            $table->string('mother_occupation')->nullable();
            $table->string('m_address')->nullable();
            $table->string('guardian_name')->nullable();
            $table->string('guardian_cnic_no')->nullable();
            $table->string('guardian_occupation')->nullable();
            $table->string('g_address')->nullable();
            $table->string('relation')->nullable();
            $table->integer('checklist_one')->default(0)->nullable();
            $table->integer('checklist_two')->default(0)->nullable();
            $table->integer('checklist_three')->default(0)->nullable();
            $table->integer('office_one')->default(0)->nullable();
            $table->integer('office_two')->default(0)->nullable();
            $table->integer('office_three')->default(0)->nullable();
            $table->date('admission_test_date')->nullable();
            $table->time('admission_test_time')->nullable();
            $table->time('interview_time')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
