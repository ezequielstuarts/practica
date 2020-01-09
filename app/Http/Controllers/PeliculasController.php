<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;


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
        $fecha = $pelicula->release_date;
        $fecha = date('d-m-Y',strtotime($pelicula->release_date));
        $pelicula->release_date = $fecha;
        return view ("editarPelicula", ['pelicula' => $pelicula, 'generos' => $generos]);
    }

    public function update(Request $request, $id)
    {

            $pelicula = Movie::find($id);
            $diff["movie_id"] = $request->movie_id;
            $diff = array_diff($request->toArray(), $pelicula->toArray());
            $pelicula->update($diff);
            return redirect()->route('peliculas')->with('mensaje', 'Pelicula Actualizada '.$pelicula->title);

    }
}
