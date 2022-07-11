<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    
    protected $table = "kategori";

    protected $fillable = ['id', 'no_kategori', 'nama_kategori'];

    public function jenissurat()
    {
        return $this->hasMany(jenis_surat::class);
    }

}
