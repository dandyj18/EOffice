<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class direktorat extends Model
{
    use HasFactory;

    protected $table = "direktorat";

    protected $fillable = ['id', 'kode_direktorat', 'nama_direktorat'];

    public function departemen()
    {
        return $this->hasMany(departemen::class);
    }

    public function devisi()
    {
        return $this->hasMany(Devisi::class);
    }

    public function seksi()
    {
        return $this->hasMany(Seksi::class);
    }
}
