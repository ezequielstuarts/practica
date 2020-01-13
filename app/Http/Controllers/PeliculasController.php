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
        $registro = Movie::where("id",$id)->first();
        $next = Movie::where('id', '>', $registro->id)->orderBy('id', 'asc')->first();
        $prev = Movie::where('id', '<', $registro->id)->orderBy('id', 'desc')->first();

        $pelicula = Movie::find($id);
        return view ("pelicula", ['pelicula' => $pelicula, 'registro' => $registro,'next' => $next,'prev' => $prev]);
    }

    public function edit($id)
    {
        $pelicula = Movie::find($id);
        $generos = Genre::All();
        $actores = Actor::All();
        $fecha = $pelicula->release_date;
        $fecha = date('Y-m-d',strtotime($pelicula->release_date));
        $pelicula->release_date = $fecha;
        return view ("editarPelicula", ['pelicula' => $pelicula, 'generos' => $generos, 'actores' => $actores]);
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
