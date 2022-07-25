<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    protected $fillable = ['id', 'nik', 'no_ktp', 'nama_pegawai', 'npwp', 'leveljabatan_id', 'direktorat_id','devisi_id', 'departement_id','seksi_id'];

    public function jabatan()
    {
        return $this->belongsTo(jabatan::class)->withDefault(['jabatan' => 'None']);
    }

    public function direktorat()
    {
        return $this->belongsTo(direktorat::class)->withDefault(['nama_direktorat' => 'None']);
    }

    public function devisidepartement()
    {
        return $this->belongsTo(departemen::class)->withDefault(['kode_departemen' => 'None']);
    }
}
