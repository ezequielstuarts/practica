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

        <p><b>Actores:</b></p>
        <ul>
            @foreach ($pelicula->actores as $actor)
                <li>{{$actor->first_name}} {{$actor->last_name}}</li>
            @endforeach
        </ul>
    </div>
    <a href="/peliculas">
        <div class="btn btn-info mt-5">Volver</div>
    </a>
    
<a href="{{route('pelicula.edit', $pelicula->id)}}">
        <div class="btn btn-info mt-5">Editar</div>
    </a>


@endsection