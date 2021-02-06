<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ficha extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'fichas';
    protected $fillable = [
        'jornada','nombre','id_ficha_de_caracterizacion','programa_de_formacion','estado'
    ];

}
