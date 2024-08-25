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
        Schema::table('app_akun', function (Blueprint $table) {
            $table->string('nama_kecamatan')->nullable()->after('id_kecamatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('app_akun', function (Blueprint $table) {
            $table->dropColumn('nama_kecamatan');
        });
    }
};
