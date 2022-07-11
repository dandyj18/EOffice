<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class level_jabatan extends Model
{
    use HasFactory;

    protected $table = "leveljabatan";

    protected $fillable = ['id', 'level_jabatan'];

    public function jabatan()
    {
        return $this->hasMany(jabatan::class);
    }

}
