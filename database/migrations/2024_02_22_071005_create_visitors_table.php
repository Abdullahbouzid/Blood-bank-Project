<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVisitorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->string('Name')->nullable();
            $table->date('DoB') ->nullable(); 
            $table->string('Email')->nullable(); 
            $table->bigInteger('Phone')->nullable(); 
            $table->integer('Password')->nullable();
            $table->string('Addrees')->nullable();
            $table->string('Gander')->nullable();
            // type of blood form the Visitor
            $table->string('Typeofblood')->nullable();
            
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
        Schema::dropIfExists('visitors');
    }
}
