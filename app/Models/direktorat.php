<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direktorat extends Model
{
    use HasFactory;

    protected $table = "direktorat";

    protected $fillable = ['id', 'kode_direktorat', 'nama_direaktorat'];

    public function jabatan()
    {
        return $this->hasMany(jabatan::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }
}
