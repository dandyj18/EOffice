<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenis_surat extends Model
{
    use HasFactory; 

    protected $table = "jenissurat";

    protected $fillable = ['id', 'kategori_id', 'nama_jenis', 'kode_jenis'];

    public function kategori()
    {
        return $this->belongsTo(kategori::class);
    }

}
