<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'category_id'

    ];

    // Funzione di relazione
    public function category(){

        return $this->belongsTo('App\Models\Category');
    }
}
