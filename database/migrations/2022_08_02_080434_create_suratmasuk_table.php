<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratmasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suratmasuk', function (Blueprint $table) {
            $table->id();
            $table->integer('jenissurat_id');
            $table->integer('perihal');
            $table->integer('tanggal_surat');
            $table->integer('tujuan');
            $table->integer('pegawai');
            $table->string('filesurat');
            $table->integer('nama_pengirim');
            $table->integer('nomor_surat');
            $table->integer('tanggal_masuk');
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
        Schema::dropIfExists('suratmasuk');
    }
}
