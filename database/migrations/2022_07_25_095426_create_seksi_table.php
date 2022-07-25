<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seksi', function (Blueprint $table) {
            $table->id();
            $table->integer('direktorat_id');
            $table->integer('devisi_id');
            $table->integer('departemen_id');
            $table->integer('kode_seksi');
            $table->string('nama_string');
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
        Schema::dropIfExists('seksi');
    }
}
