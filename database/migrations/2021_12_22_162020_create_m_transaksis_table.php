<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_transaksis', function (Blueprint $table) {
            $table->bigIncrements('id_m_transaksis');
            $table->bigInteger('id_m_users');
            $table->bigInteger('id_m_motors');
            $table->bigInteger('jumlah_transaksi');
            $table->bigInteger('total_harga_transaksi');
            $table->bigInteger('id_m_admins');
            $table->bigInteger('tanggal_transaksi');
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
        Schema::dropIfExists('m_transaksis');
    }
}
