<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('heroes', function (Blueprint $table) {
            $table->bigIncrements('Id');
            $table->timestamps();
            $table->string('name');
            $table->integer('hp');
            $table->integer('atq');
            $table->integer('def');
            $table->integer('luck');
            $table->integer('conins');
            $table->integer('xp');           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('heroes');
    }
}
