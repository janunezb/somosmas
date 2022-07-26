<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('titulo')->nullable();
            $table->string('cuerpo')->nullable();
            $table->string('imagen')->nullable();
            $table->string('adjunto')->nullable();
            $table->string('orden')->nullable();
            // $table->date('fecha')->nullable();
            $table->string('estado');
            $table->string('categoria_id');
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
        Schema::dropIfExists('contents');
    }
}
