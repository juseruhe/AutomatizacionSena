<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Ficha;

class Estado extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';
    protected $table = 'estados';
    protected $fillable = [
        'nombre'
    ];


    public function fichas(){
        return $this->hasMany(Ficha::class,'id');
    }



}
