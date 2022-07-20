<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jabatan extends Model
{
    use HasFactory;

    protected $table = "jabatan";

    protected $fillable = ['id', 'leveljabatan_id', 'direktorat_id', 'devisidepartement_id', 'kode_jabatan', 'jabatan'];

    public function leveljabatan()
    {
        return $this->belongsTo(level_jabatan::class);
    }

    public function direktorat()
    {
        return $this->belongsTo(direktorat::class);
    }

    public function devisidepartement()
    {
        return $this->belongsTo(departemen::class);
    }

    public function pegawai()
    {
        return $this->hasMany(pegawai::class);
    }
}
