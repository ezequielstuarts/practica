<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = "movies";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['title', 'rating', 'awards','genre_id', 'length', 'id', "release_date"];

    public function genero() {
        return $this->belongsTo("App\Genre", 'genre_id');
    }

    public function actores() {
        return $this->belongsToMany("App\Actor", "actor_movie", "movie_id", "actor_id");
    }

    public function cover() {
        return $this->hasOne('App\Cover', 'id');
    }

    public function info() {
        return $this->hasOne('App\InfoMovie', 'id');
    }

}
