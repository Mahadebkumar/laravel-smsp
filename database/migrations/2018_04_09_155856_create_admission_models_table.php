<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sname');
            $table->text('sbname');
            $table->text('class');
            $table->text('year');
            $table->text('fname');
            $table->text('mname');
            $table->text('foccupation');
            $table->text('moccupation');
            $table->text('income');
            $table->text('gnid', 17);
            $table->text('gender');
            $table->text('dob');
            $table->text('blood');
            $table->text('religion');
            $table->text('phone', 15);
            $table->text('gname');
            $table->text('preschool');
            $table->text('status');
            $table->text('preaddress');
            $table->text('peraddress');
            $table->text('image');
            $table->text('quotas');
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
        Schema::dropIfExists('admission');
    }
}
