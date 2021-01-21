<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClaimantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claimants', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('claimant_name');
            $table->string('passport_no');
            $table->string('contact_no');
            $table->string('email');
            $table->string('gender')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('street')->nullable();
            $table->string('block')->nullable();
            $table->string('level')->nullable();
            $table->string('unit')->nullable();
            $table->string('salutation')->nullable();
            $table->text('remark')->nullable();
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
        Schema::dropIfExists('claimants');
    }
}
