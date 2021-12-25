<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_d_admins', function (Blueprint $table) {
            $table->bigIncrements('id_m_d_admins');
            $table->bigInteger('id_m_admins');
            $table->bigInteger('ktp_m_d_admins');
            $table->bigInteger('nomor_m_d_admins')->nullable();
            $table->text('alamat_m_d_admins')->nullable();
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
        Schema::dropIfExists('m_d_admins');
    }
}
