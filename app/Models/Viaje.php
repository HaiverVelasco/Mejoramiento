<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Viaje extends Model
{
    use HasFactory;
    public function viajero(){
        return $this->belongsTo('App\Models\Viajero');
    }
        public function destino(){
            return $this->belongsTo('App\Models\Destino');
        }
            public function origen(){
                return $this->belongsTo('App\Models\Origen');
            }
}
