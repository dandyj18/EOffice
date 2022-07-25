<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seksi extends Model
{
    use HasFactory;

    protected $table = "seksi";

    protected $fillable = ['id','direktorat_id','devisi_id','departemen_id','kode_seksi', 'nama_seksi']; 
}
