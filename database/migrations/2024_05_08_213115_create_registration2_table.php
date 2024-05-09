<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistration2Table extends Migration
{
    public function up()
    {
        Schema::create('registration2', function (Blueprint $table) {
            $table->id();
            $table->string('business_name');
            $table->text('about_business');
            $table->decimal('target_fund', 8, 2);
            $table->string('phone_number');
            $table->date('birth_date');
            $table->json('brands')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('registration2');
    }
}
