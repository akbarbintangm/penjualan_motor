<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMDMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_d_motors', function (Blueprint $table) {
            $table->bigIncrements('id_m_d_motors');
            $table->bigInteger('id_m_motors');
            $table->string('warna_m_d_motors');
            $table->string('varian_abs_m_d_motors')->nullable();
            $table->string('transmisi_m_d_motors')->nullable();
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
        Schema::dropIfExists('m_d_motors');
    }
}
