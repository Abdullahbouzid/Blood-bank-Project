<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->id();
            $table->string('nameVisitor');
            $table->date('DOB_Visitor');
            $table->string('Adds_Visitor');
            $table->integer('Ph_Visitor');
            $table->string('TOB_Visitor');
            $table->string('Gender_Visitor');
            $table->date('DOD_Visitor');
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
        Schema::dropIfExists('donations');
    }
}
