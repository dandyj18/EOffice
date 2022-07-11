<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $table = "devisidepartement";

    protected $fillable = ['id', 'kode_departemen', 'direktorat_id'];

    public function jabatan()
    {
        return $this->hasMany(jabatan::class);
    }

    public function direktorat()
    {
        return $this->hasMany(direktorat::class);
    }
}
