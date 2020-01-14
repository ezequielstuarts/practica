<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;
use App\ActorMovie;
use App\ActorProfile;


class ActoresController extends Controller
{
    public function index()
    {
        $actores = Actor::orderBy('first_name', 'ASC')->paginate(15);;
        return view ("actores", ['actores' => $actores]);
    }

    public function create() {
        $peliculas = Movie::all();
        return view ("agregarActor", ['peliculas' => $peliculas]);
    }

    public function store(Request $request)
    {
        $reglas = [
            "first_name" => "required|string",
            "last_name" => "required",
            "rating" => "required|numeric|min:0|max:10",
            //"favorite_movie_id" => "required"
        ];

        $mensajes = [
            "string" => "El campo :attribute debe ser un nombre.",
            "required" => "El campo :attribute es necesario.",
            "numeric" => "El :attribute dene ser numerico."
        ];

        $this->validate($request, $reglas, $mensajes);

        $actorNuevo = new Actor();

        $actorNuevo->first_name = $request["first_name"];
        $actorNuevo->last_name = $request["last_name"];
        $actorNuevo->rating = $request["rating"];
        $actorNuevo->favorite_movie_id = $request["pelicula_favorita"];
        $actorNuevo->save();

        $actores = Actor::all();
        $lastId = $actores->last()->id;

        $pelisActuadas = $request["peliculasActuadas"];
        for ($i = 0; $i < count($pelisActuadas); $i++)
        {
            $actor_movie = new ActorMovie();
            $actor_movie->movie_id = $pelisActuadas[$i];
            $actor_movie->actor_id = $lastId;
            $actor_movie->save();
        }

        $img_profile = new ActorProfile();
        $img_profile->actor_id = $lastId;
        $img_profile->url_profile = $request["url"];
        $img_profile->save();

        return redirect()->route('actor', [$lastId]);

    }


    public function show($id)
    {

        $registro = Actor::where("id",$id) ->first();
        $next = Actor::where('id', '>', $registro->id) ->orderBy('id', 'asc')->first();
        $prev = Actor::where('id', '<', $registro->id) ->orderBy('id', 'desc')->first();

        $actor = Actor::find($id);
        return view ("actor", ['actor' => $actor, 'registro' => $registro,'next' => $next,'prev' => $prev]);
    }

    public function search(Request $req)
    {
        $input = $req->all();
        $nombre = $input["nombre"];
        $actor = Actor::where('first_name', 'like', '%' . $nombre . '%')->orWhere ('last_name', 'like', '%' . $nombre . '%')->get();
        return view ("buscar", ['actor' => $actor] );
    }


}
