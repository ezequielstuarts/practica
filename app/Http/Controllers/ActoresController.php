<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
use App\Movie;
class ActoresController extends Controller
{
    public function index()
    {
        $actores = Actor::orderBy('first_name', 'ASC')->paginate(15);;
        return view ("actores", ['actores' => $actores]);
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
        return redirect('/actores');
    }


    public function show($id)
    {
        $actor = Actor::find($id);
        return view ("actor", ['actor' => $actor]);
    }

    public function search(Request $req)
    {
        $input = $req->all();
        $nombre = $input["nombre"];
        $actor = Actor::where('first_name', 'like', '%' . $nombre . '%')->orWhere ('last_name', 'like', '%' . $nombre . '%')->get();
        return view ("buscar", ['actor' => $actor] );
    }

    public function edit($id)
    {
        $actor = Actor::find($id);
        $peliculas = Movie::all();
        return view('editar', ['actor' => $actor, 'peliculas' => $peliculas] );
    }


    public function update(Request $request, $id)
    {
        $actor = Actor::find($id);
        $diff = array_diff($request->toArray(), $actor->toArray());
        $basename = basename($request->file("poster")->store("public"));
        if ($request->has('poster')) {
            $diff["poster"] = $basename;
        }
        $actor->update($diff);
        return redirect()->route('actor', ['actor' => $actor])->with('mensaje', 'Actor Actualizado');
    }

    public function destroy(Request $formulario)
    {
        $id = $formulario['id'];
        $actor = Actor::find($id);
        $actor->delete();
        return redirect('/actores');
    }
}
