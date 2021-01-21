<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDeceasedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deceaseds', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->bigIncrements('user_id');
        $table->string('name');
        $table->string('gender')->nullable();
        $table->timestamp('dod')->nullable();
        $table->integer('block')->nullable();
        $table->integer('plot')->nullable();
        $table->integer('sub_plot')->nullable();
        $table->string('grave_type')->nullable();
        $table->string('grave_condition')->nullable();
        $table->string('status')->nullable();
        $table->string('special_requirement');
        $table->text('reason')->nullable();
        $table->string('plague_name')->nullable();
        $table->string('relation')->nullable();
        $table->bigInteger('deceaseable_id')->nullable();
        $table->string('deceaseable_type')->nullable();
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
        Schema::dropIfExists('deceaseds');
    }
}
