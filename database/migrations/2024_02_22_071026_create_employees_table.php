<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->date('DoB')->nullable();
            $table->string('Type')->nullable();
            $table->string('Email')->nullable();
            $table->bigInteger('Phone')->nullable(); 
            $table->integer('password')->nullable(); 
            $table->string('Addrees')->nullable(); 
            $table->string('Gander')->nullable(); 
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
        Schema::dropIfExists('employees');
    }
}
