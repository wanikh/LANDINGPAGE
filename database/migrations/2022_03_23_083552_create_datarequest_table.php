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
        Schema::create('laravel9', function (Blueprint $table) {
            $table->id();
            $table->String('nama_lengkap');
            $table->bigInteger('no_whatsapp');
            $table->text('deskripsi');
            $table->text('permasalahan');
            $table->text('harapan');
            $table->integer('estimasi_budget');
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
        Schema::dropIfExists('request');
    }
};
