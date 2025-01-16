<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('event', function (Blueprint $table) {
            $table->increments('id');
            $table->string('place');
            $table->date('data');
            $table->time('hour');
            $table->integer('show_id')->unsigned();
            $table->foreign('show_id')->references('id')->on('show');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event');
    }
};
