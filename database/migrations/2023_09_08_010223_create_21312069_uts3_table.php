<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Create21312069Uts3Table extends Migration
{
    public function up()
    {
        Schema::create('21312069_uts3', function (Blueprint $table) {
            $table->id();
            $table->string('uts3_f1');
            $table->string('uts3_f2');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('21312069_uts3');
    }
}
