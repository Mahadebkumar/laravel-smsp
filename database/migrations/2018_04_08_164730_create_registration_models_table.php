<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistrationModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registration', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sname');
            $table->text('sbname');
            $table->integer('sid');
            $table->text('roll', 6);
            $table->text('reg', 10);
            $table->text('class');
            $table->text('section');
            $table->text('session');
            $table->text('fname');
            $table->text('mname');
            $table->text('gnid', 17);
            $table->text('gender');
            $table->text('dob');
            $table->text('blood');
            $table->text('religion');
            $table->text('phone', 15);
            $table->text('gname');
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
        Schema::dropIfExists('registration');
    }
}
