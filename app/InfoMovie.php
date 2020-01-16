<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InfoMovie extends Model
{
    public $table = "info_movie";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['movie_id', 'info_movie'];
}
