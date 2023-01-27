<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    
    // Funzione di relazione
    public function post(){

        //La categoria ha molti record associati
        return $this->hasMany('App\Models\Post');
    }
}
