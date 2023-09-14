<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create21312069Uts2Table extends Migration
{
    public function up()
    {
        Schema::create('21312069_uts2', function (Blueprint $table) {
            $table->id();
            $table->string('uts2_f1');
            $table->string('uts2_f2');
            $table->string('uts2_f3');
            $table->string('uts2_f4');
            $table->unsignedBigInteger('id_uts1');
            $table->unsignedBigInteger('id_uts2');
            $table->timestamps();

            $table->foreign('id_uts1')->references('id')->on('npm_uts1');
            $table->foreign('id_uts2')->references('id')->on('21312069_uts2');
        });
    }

    public function down()
    {
        Schema::dropIfExists('21312069_uts2');
    }
}
