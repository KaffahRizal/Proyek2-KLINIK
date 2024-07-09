<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KabKota extends Model
{
    use HasFactory;

    protected $table = 'kabkota';

    protected $fillable = ['nama', 'latitude', 'longitude', 'provinsi_id'];

    public function provinsi(){
        return $this->belongsTo(Provinsi::class);
    }
}
