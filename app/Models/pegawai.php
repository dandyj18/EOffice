<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    protected $fillable = ['id', 'nik', 'no_ktp', 'nama_pegawai', 'npwp', 'leveljabatan_id', 'direktorat_id','devisi_id', 'departemen_id','seksi_id'];

    public function leveljabatan()
    {
        return $this->belongsTo(level_jabatan::class)->withDefault(['leveljabatan' => '']);
    }

    public function direktorat()
    {
        return $this->belongsTo(direktorat::class)->withDefault(['nama_direktorat' => '']);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class)->withDefault(['nama_departemen' => '']);
    }

    public function devisi()
    {
        return $this->belongsTo(Devisi::class)->withDefault(['nama_devisi' => '']);
    }

    public function seksi()
    {
        return $this->belongsTo(Seksi::class)->withDefault(['nama_seksi' => '']);
    }
}
