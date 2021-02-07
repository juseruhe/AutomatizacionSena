<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipo_Programa extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'modalidades';
    protected $fillable = [
        'nombre'
    ];
}
