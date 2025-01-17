<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('show',function (Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->string('short_description');
            $table->text('description');
            $table->string('directed_by');
            $table->string('collaboration');
            $table->string('img_url');
            $table->date('data_creation');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('show');
    }
};
