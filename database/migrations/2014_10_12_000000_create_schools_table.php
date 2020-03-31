<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->default('Stream-School');
            $table->string('established')->default('');
            $table->text('about');
            $table->string('medium');//bn,en
            $table->integer('code')->unique();
            $table->string('theme');
            $table->string('school_level')->nullable();
            $table->string('campus_name')->nullable();
            $table->string('email')->nullable();
            $table->string('fano')->nullable();
            $table->string('fno')->nullable();
            $table->string('city')->nullable();
            $table->string('address')->nullable();
            $table->string('land_line')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
