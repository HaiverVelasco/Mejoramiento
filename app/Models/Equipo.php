<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class Equipo extends Model
{
    use HasFactory;

    public function presidente(){
     return $this->belongsTo('App\Models\Presidente');
    }

        public function jugador(){
            return $this->belongsTo('App\Models\Jugador');
        }

            public function partidos(){
                return $this->belongsToMany('App\Models\Partido');
            }

}
