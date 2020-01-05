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

    public function indexfav(){
        $peliculas = Movie::all();
        return view ("agregarActor", ['peliculas' => $peliculas]);
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
        return view ("editarPelicula", ['pelicula' => $pelicula, 'generos' => $generos]);
    }

    public function update(Request $request, $id)
    {

            $pelicula = Movie::find($id);
            $diff = array_diff($request->toArray(), $pelicula->toArray());
            
            
            
            $pelicula->update($diff);
            return redirect()->route('peliculas')->with('mensaje', 'Pelicula Actualizada '.$pelicula->title);

    }
}
