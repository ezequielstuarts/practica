@extends('layouts.app')
@section('content')
<div class="mt-5">
    <h1>Película</h1>
           <h4>{{$pelicula->title}}</h4>

        <p><b>Rating:</b>
            <span class="badge badge-info"> {{$pelicula->rating}} </span>
        <b>Premios:</b>
            <span class="badge badge-secondary"> {{$pelicula->awards}} </span>
        <b>Duración:</b>
            <span class="badge badge-success"> {{$pelicula->length}} min </span>
        </p>
        <a href="edit/{{$pelicula->id}}">Editar</a>
    </div>
    <a href="/peliculas">
        <div class="btn btn-info mt-5">Volver</div>
    </a>


@endsection