<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public $table = "actors";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = [
        'first_name', 'last_name', 'rating','favorite_movie_id', 'id', 'poster', 
    ];

    public function peliculaFavorita() {
        return $this->belongsTo(Movie::Class, 'favorite_movie_id');
    }
    
}
