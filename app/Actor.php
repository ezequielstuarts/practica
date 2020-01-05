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
        return $this->belongsTo("App\Movie", 'favorite_movie_id');
    }
    
    public function peliculas() {
        return $this->belongsToMany("App\Movie", "actor_movie", "actor_id", "movie_id");
    }
}
