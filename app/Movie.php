<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $table = "movies";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['title', 'rating', 'awards','genre_id', 'length', 'id'];

    public function genero() {
        return $this->belongsTo(Genre::Class, 'genre_id');
    }

}
