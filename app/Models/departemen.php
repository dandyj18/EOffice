<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $table = "departement";

    protected $fillable = ['id','direktorat_id','devisi_id','kode_departemen','nama_departemen'];

    public function direktorat()
    {
        return $this->belongsto(direktorat::class);
    }

    public function jabatan()
    {
        return $this->hasMany(jabatan::class);
    }

    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}
