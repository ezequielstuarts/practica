<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

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



    public function create()
    {
        
    }

    public function store(Request $request)
    {
        
        
        $peliculaNueva = new Movie();
        
        $peliculaNueva->title = $request["title"];
        $peliculaNueva->rating = $request["rating"];
        $peliculaNueva->awards = $request["awards"];
        $peliculaNueva->genre_id = $request["genre_id"];
        $peliculaNueva->length = $request["length"];
        $peliculaNueva->release_date = $request["release_date"];
        
        $peliculaNueva->save();
        return redirect('/peliculas');
    }

    
    public function show($id)
    {
        $pelicula = Movie::find($id);
        return view ("pelicula", ['pelicula' => $pelicula]);
    }

    
    public function edit($id)
    {
        $pelicula = Movie::find($id);
        return view('editarPelicula', ['pelicula' => $pelicula] );
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
