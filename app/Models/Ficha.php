<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Jornada;

use App\Models\Programa;

use App\Models\Estado;

class Ficha extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'fichas';
    protected $fillable = [
    'ficha_caracterizacion','programa_id','jornada_id','estado_id'
    ];


    public function jornada(){

        return $this->belongsTo(Jornada::class,'jornada_id');
        
        }

        public function programa(){
            return $this->belongsTo(Programa::class,'programa_id');
        }

        public function estado(){

            return $this->belongsTo(Estado::class,'estado_id');
        }
    
}
