<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class departemen extends Model
{
    use HasFactory;

    protected $table = "departemen";

    protected $fillable = ['id','direktorat_id','devisi_id','kode_departemen','nama_departemen'];

    public function direktorat()
    {
        return $this->belongsTo(direktorat::class);
    }

    public function devisi()
    {
        return $this->belongsTo(Devisi::class);
    }

    public function seksi()
    {
        return $this->hasMany(Seksi::class);
    }
}
