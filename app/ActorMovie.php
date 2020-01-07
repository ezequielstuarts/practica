<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorMovie extends Model
{
    public $table = "actor_movie";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['actor_id', 'movie_id', "created_at", "updated_at"];
}
