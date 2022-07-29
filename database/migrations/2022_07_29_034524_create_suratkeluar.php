<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluar extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratkeluar', function (Blueprint $table) {
            $table->id();
            $table->integer('jenissurat_id');
            $table->integer('devisi_id');
            $table->integer('departemen_id');
            $table->string('perihal');
            $table->date('tanggal');
            $table->integer('pembuat_surat');
            $table->integer('pegawai');
            $table->integer('nama_penerima');
            $table->integer('kota');
            $table->text('alamat');
            $table->integer('kode_pos');
            $table->integer('email');
            $table->integer('no_telepon');
            $table->integer('nama_penerima');
            $table->integer('pegawai_id');


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
        Schema::dropIfExists('suratkeluar');
    }
}
