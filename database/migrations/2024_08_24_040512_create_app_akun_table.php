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
        Schema::create('app_akun', function (Blueprint $table) {
            $table->id('id_akun');
            $table->string('uid_akun')->unique()->notNullable();
            $table->string('nama_akun')->nullable();
            $table->string('password')->nullable();
            $table->string('alamatktp_akun')->nullable();
            $table->string('alamatdomisili_akun')->nullable();
            $table->unsignedBigInteger('idkecamatan_akun')->nullable();
            $table->unsignedBigInteger('idkabupaten_akun')->nullable();
            $table->unsignedBigInteger('idprovinsi_akun')->nullable();
            $table->unsignedBigInteger('nomortelepon_akun')->nullable();
            $table->unsignedBigInteger('nomorhp_akun')->nullable();
            $table->string('email_akun')->unique()->nullable();
            $table->string('kewarganegaraan_akun')->nullable();
            $table->string('tanggallahir_akun')->nullable();
            $table->string('tempatlahir_akun')->nullable();
            $table->unsignedBigInteger('provinsilahir_akun')->nullable();
            $table->unsignedBigInteger('kabkotlahir_akun')->nullable();
            $table->string('luarlahir_akun')->nullable();
            $table->string('jk_akun')->nullable();
            $table->string('statusnikah_akun')->nullable();
            $table->string('file_akun')->nullable();
            $table->integer('status_akun')->nullable();
            $table->integer('status_daftar')->nullable();
            $table->unsignedBigInteger('idagama_akun')->nullable();

            // Foreign key constraints
            $table->foreign('idkecamatan_akun')->references('id_kecamatan')->on('kecamatan');
            $table->foreign('idkabupaten_akun')->references('id_kabkot')->on('kabkot');
            $table->foreign('idprovinsi_akun')->references('id_provinsi')->on('provinsi');
            $table->foreign('provinsilahir_akun')->references('id_provinsi')->on('provinsi');
            $table->foreign('kabkotlahir_akun')->references('id_kabkot')->on('kabkot');
            $table->foreign('idagama_akun')->references('id_agama')->on('agama');

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
        Schema::dropIfExists('app_akun');
    }
};

