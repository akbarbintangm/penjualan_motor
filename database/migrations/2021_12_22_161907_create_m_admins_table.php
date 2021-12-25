<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAdminsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_admins', function (Blueprint $table) {
            $table->bigIncrements('id_m_admins');
            $table->string('nama_m_admins');
            $table->string('username_m_admins')->nullable();
            $table->string('email_m_admins')->unique();
            $table->string('password_m_admins');
            $table->text('profile_m_admins')->nullable();
            $table->integer('role_m_admins')->nullable();
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
        Schema::dropIfExists('m_admins');
    }
}
