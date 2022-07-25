<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePegawaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id();
            $table->biginteger('nik');
            $table->biginteger('no_ktp');
            $table->string('nama_pegawai');
            $table->biginteger('npwp');
            $table->integer('leveljabatan_id');
            $table->integer('direktorat_id');
            $table->integer('devisi_id')->nullable();
            $table->integer('departemen_id')->nullable();
            $table->integer('seksi_id')->nullable();
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
        Schema::dropIfExists('pegawai');
    }
}
