<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('objectors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('objector_name');
            $table->string(('passport_no'));
            $table->string('contact_no');
            $table->string('email');
            $table->string('gender')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('block')->nullable();
            $table->string('street')->nullable();
            $table->string('level')->nullable();
            $table->string('unit')->nullable();
            $table->string('salutation')->nullable();
            $table->string('status')->nullable();
            $table->bigInteger('mail_addresses_id')->nullable();
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
        Schema::dropIfExists('objectors');
    }
}
