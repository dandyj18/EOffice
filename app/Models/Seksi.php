<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    use HasFactory;

    protected $table = "seksi";

    protected $fillable = ['id','direktorat_id','devisi_id','departemen_id','kode_seksi', 'nama_seksi'];

    public function direktorat()
    {
        return $this->belongsTo(direktorat::class);
    }

    public function devisi()
    {
        return $this->belongsTo(Devisi::class);
    }

    public function departemen()
    {
        return $this->belongsTo(departemen::class);
    }
}
