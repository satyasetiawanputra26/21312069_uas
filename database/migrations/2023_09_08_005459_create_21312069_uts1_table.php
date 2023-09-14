<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNpmUts1Table extends Migration
{
    public function up()
    {
        Schema::create('npm_uts1', function (Blueprint $table) {
            $table->id();
            $table->string('uts1_f1');
            $table->string('uts2_f2');
            $table->string('uts3_f3');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('npm_uts1');
    }
}
