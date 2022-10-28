<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('youtube_model', function (Blueprint $table) {
            $table->id();
            $table->string('title')-> default('Default Video title');
            $table->string('description')->default('Default Description');
            $table->string('author')->default('unknown author');
            $table->string('link')->nullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('youtube_model');
    }
};
