<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Engenheiro extends Model
{
    use HasFactory;

    public function ordens(){
        return $this->hasMany(Ordem::class);
    }

    public function comprovantes(){
        return $this->hasMany(ComprovanteRegistro::class);
    }
}
