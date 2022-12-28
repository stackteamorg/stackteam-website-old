<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('find_teams', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('title',50);
            $table->string('img',200);
            $table->longText('text');
            $table->enum('lang',['en','ar','fa','fr','ru']);
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
        Schema::dropIfExists('find_teams');
    }
};
