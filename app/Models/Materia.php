<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
    ];

    /**
    *  Las notas de una determinada materia
    **/
    public function notas() {

        return $this->hasMany(Nota::class, 'materia_id');

    }

}
