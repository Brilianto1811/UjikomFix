<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddWnaToAppAkunTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('app_akun', function (Blueprint $table) {
            $table->string('wna')->nullable()->after('kewarganegaraan_akun');
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
            $table->dropColumn('wna');
        });
    }
}
