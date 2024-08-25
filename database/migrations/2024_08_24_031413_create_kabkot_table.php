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
        Schema::create('kabkot', function (Blueprint $table) {
            $table->id('id_kabkot')->nullable();
            $table->unsignedBigInteger('id_provinsi')->nullable();
            $table->string('nama_kabkot')->nullable();
            $table->timestamps();

            // Tambahkan foreign key constraint untuk id_provinsi
            $table->foreign('id_provinsi')->references('id_provinsi')->on('provinsi')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kabkot');
    }
};

