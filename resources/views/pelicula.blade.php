@extends('layouts.app')
@section('content')
<div class="mt-5">
    <h1>Película</h1>
           <h4>{{$pelicula->title}}</h4>

        <p><b>Rating:</b>
            <span class="badge badge-info"> {{$pelicula->rating}} </span>
        </p>
        <p><b>Premios:</b>
            <span class="badge badge-secondary"> {{$pelicula->awards}} </span>
        </p>
        <p><b>Duración:</b>
            <span class="badge badge-success"> {{$pelicula->length}} min </span>
        </p>
        <p><b>Género:</b>
            <span class="badge badge-success"> {{$pelicula->genero->name}} </span>
        </p>
        {{-- <p><span> Actores: {{$pelicula->actores->first_name}} </span></p> --}}
    </div>
    <a href="/peliculas">
        <div class="btn btn-info mt-5">Volver</div>
    </a>


@endsection