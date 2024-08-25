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
        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id('id_kecamatan')->nullable();
            $table->unsignedBigInteger('id_kabkot')->nullable();
            $table->string('nama_kecamatan')->nullable();
            $table->timestamps();

            // Tambahkan foreign key constraint untuk id_kabkot
            $table->foreign('id_kabkot')->references('id_kabkot')->on('kabkot')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kecamatan');
    }
};

