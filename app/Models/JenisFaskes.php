<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisFaskes extends Model
{
    use HasFactory;

    protected $table = 'jenisfaskes';

    protected $fillable = ['nama'];

    public function jenisfaskes(){
        return $this->hasMany(Faskes::class);
    }
}
