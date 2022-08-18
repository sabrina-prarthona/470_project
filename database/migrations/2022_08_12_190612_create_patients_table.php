<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nid');
            $table->string('email');
            $table->string('password');
            $table->string('name');
            $table->integer('age');
            $table->string('gender');
            $table->text('address');
            $table->string('contact_number');
            $table->string('occupation');
            $table->string('vaccination_status');
            $table->date('vaccination_date');
            $table->string('vescription');
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
        Schema::dropIfExists('patients');
    }
};
