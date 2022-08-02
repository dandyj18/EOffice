<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSuratkeluarTable extends Migration
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
            $table->integer('perihal');
            $table->integer('tanggal_surat');
            $table->integer('user_id');
            $table->integer('jabatan_id');
            $table->integer('nama_instansi');
            $table->integer('kota');
            $table->integer('alamat');
            $table->integer('kode_pos');
            $table->integer('email_instansi');
            $table->integer('nama_penerima');
            $table->integer('nomor_telepon');
            $table->integer('pemeriksa_1');
            $table->integer('pemeriksa_2');
            $table->integer('file_surat');
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
