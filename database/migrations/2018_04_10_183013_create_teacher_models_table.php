<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tid');
            $table->text('tname');
            $table->text('tnid');
            $table->text('dob');
            $table->text('gender');
            $table->text('blood');
            $table->text('religion');
            $table->text('phone');
            $table->text('email');
            $table->text('address');
            $table->text('image');
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
        Schema::dropIfExists('teacher');
    }
}
