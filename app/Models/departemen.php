<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $table = "devisidepartement";

    protected $fillable = ['id', 'kode_departemen', 'direktorat_id'];

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
