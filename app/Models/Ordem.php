<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ordem extends Model
{
    use HasFactory;

    public function responsavel(){
        return $this->belongsTo(Engenheiro::class, "engenheiro_id", "id");
    }

    public function comprovantes(){
        return $this->hasMany(ComprovanteOrdem::class);
    }
}
