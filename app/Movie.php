<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = "movies";
    //public $primarykey = "id";
    //public $timestamps = "";
    public $guarded = ['title', 'rating', 'awards','genre_id', 'length', 'id'];

    public function genero() {
        return $this->belongsTo('App\Genero', 'genre_id');
    }
}
