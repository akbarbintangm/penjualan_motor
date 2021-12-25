<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_motors', function (Blueprint $table) {
            $table->bigIncrements('id_m_motors');
            $table->string('nama_m_motors');
            $table->string('brand_m_motors')->nullable();
            $table->string('tipe_m_motors')->nullable();
            $table->text('foto_m_motors');
            $table->bigInteger('harga_m_motors');
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
        Schema::dropIfExists('m_motors');
    }
}
