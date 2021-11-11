<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class BloqueoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bloqueo', function (Blueprint $table) {
            $table->id()->unique()->autoIncrement();
            //$table->increment('id');
            $table->string('nombre',50);
            $table->string('edad',15);
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bloqueo');
    }
}

