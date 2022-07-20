<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    protected $fillable = ['id', 'nik', 'no_ktp', 'nama_pegawai', 'npwp', 'jabatan_id', 'direktorat_id', 'devisidepartement_id'];

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
