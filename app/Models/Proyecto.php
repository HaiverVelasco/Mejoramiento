<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proyecto extends Model
{
    use HasFactory;

    public function colaboradors(){
        return $this->belongsToMany('App\Models\Colaborador');
    }
        public function cliente(){
            return $this->belongsTo('App\Models\Cliente');
        }
}
