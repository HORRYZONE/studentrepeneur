<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationTable extends Migration
{
    public function up()
    {
        Schema::create('registrations', function (Blueprint $table) {

            $table->id();
            $table->string('full_name');
            $table->string('matric_number');
            $table->string('gender');
            $table->string('address1');
            $table->string('address2');
            $table->string('country');
            $table->string('city');
            $table->string('region');
            $table->integer('postal_code');
            // Add columns for other form fields

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registrations');
    }
}