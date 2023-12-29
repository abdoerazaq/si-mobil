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
        Schema::table('pinjams', function (Blueprint $table) {
            $table->unsignedBigInteger('manajemens_id')->required()->after('tanggal_kembali');

            $table->foreign('manajemens_id')->references('id')->on('manajemens')->onDelete('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pinjams', function (Blueprint $table) {
            $table->dropForeign(['manajemens_id']);
            $table->dropColumn('manajemens_id');
        });
    }
};
