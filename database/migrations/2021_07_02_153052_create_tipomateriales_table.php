<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipomaterialesTable extends Migration
{

    public function up()
    {
        Schema::create('tipomateriales', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('tipomateriales');
    }
}
