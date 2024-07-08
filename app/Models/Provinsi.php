<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;
    protected $table = 'provinsi';

    protected $fillable = ['nama', 'ibukota', 'latitude', 'longitude'];

    public function kabkota(){
        return $this->hasMany(KabKota::class);
    }
}
