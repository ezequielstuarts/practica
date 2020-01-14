<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActorProfile extends Model
{
    public $table = "actor_profile";
    //public $primarykey = "id";
    //public $timestamps = "";
    protected $fillable = ['actor_id', 'url_profile'];

}
