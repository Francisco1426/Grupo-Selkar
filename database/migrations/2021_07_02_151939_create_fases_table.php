<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFasesTable extends Migration
{

    public function up()
    {
        Schema::create('fases', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('descripcion');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('fases');
    }
}
