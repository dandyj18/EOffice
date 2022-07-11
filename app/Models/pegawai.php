<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    protected $fillable = ['id', 'nik', 'no_ktp', 'nama_pengawai', 'npwp', 'jabatan_id', 'direktorat_id', 'devisidepartement_id'];
}
