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
        Schema::create('cooperation_requests', function (Blueprint $table) {
            $table->id();
            $table->string('fullname',50);
            $table->string('phone_number',15);
            $table->text('detail');
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
        Schema::dropIfExists('cooperation_requests');
    }
};
