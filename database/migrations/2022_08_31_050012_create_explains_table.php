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
        Schema::create('explains', function (Blueprint $table) {
            $table->id();
            $table->string('name',32);
            $table->string('title',32);
            $table->longText('content');
            $table->text('quotation')->nullable();
            $table->string('quotation_name',32)->nullable();
            $table->string('quotation_role',32)->nullable();
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
        Schema::dropIfExists('explains');
    }
};
