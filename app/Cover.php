<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cover extends Model
{
    public $table = "covers";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['url_small', 'url_big', 'movie_id'];

}
