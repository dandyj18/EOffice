<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Devisi extends Model
{
    use HasFactory;
    
    protected $table = "devisi";

    protected $fillable = ['id','direktorat_id','kode_devisi','nama_devisi'];
}
