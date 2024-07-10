<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Faskes extends Model
{
    use HasFactory;

    protected $table = 'faskes';

    //mendefinisikan kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'nama_pengelola',
        'alamat',
        'website',
        'email',
        'kabkota_id',
        'rating',
        'latitude',
        'longitude',
        'jenis_faskes_id',
        'kategori_id',
    ];

    //menghubungkan model faskes dengan model kabkota
    public function kabkota()
    {
        return $this->belongsTo(Kabkota::class);
    }
    //menghubungkan model faskes dengan model jenisfaskes
    public function jenis_faskes()
    {
        return $this->belongsTo(JenisFaskes::class);
    }
    //menghubungkan model faskes dengan model kategori
    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
