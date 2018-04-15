<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAttendencModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendenc', function (Blueprint $table) {
            $table->increments('id');
            $table->text('sid');
            $table->text('roll');
            $table->text('class');
            $table->text('section');
            $table->text('date');
            $table->text('in_time');
            $table->text('out_time');
            $table->text('status');
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
        Schema::dropIfExists('attendenc');
    }
}
