<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Movie;
use App\Genre;
use App\Actor;


class PeliculasController extends Controller
{
    public function index()
    {
        $peliculas = Movie::paginate(15);
        return view ("peliculas", ['peliculas' => $peliculas]);
    }


    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view ("pelicula", ['pelicula' => $pelicula]);
    }

    public function edit($id)
    {
        $pelicula = Movie::find($id);
        $generos = Genre::All();
        $actores = Actor::All();
        $fecha = $pelicula->release_date;
        $fecha = date('d-m-Y',strtotime($pelicula->release_date));
        $pelicula->release_date = $fecha;
        return view ("editarPelicula", ['pelicula' => $pelicula, 'generos' => $generos, 'actores' => $actores]);
    }

    public function update(Request $request, $id)
    {

            $pelicula = Movie::find($id);

            $diff["movie_id"] = $request->movie_id;


            // $mysql_date = $request["release_date"];

            // $mysql_date = Carbon::createFromTimestamp(time())->format('Y-m-d H:i:s');

            // $diff["release_date"] = $mysql_date;

            // $diff = array_diff($request->toArray(), $pelicula->toArray());
            // dd("request", $mysql_date, "carbon", $diff["release_date"]);

            // $pelicula->update($diff);
            return redirect()->route('peliculas')->with('mensaje', 'Pelicula Actualizada '.$pelicula->title);

    }
}
