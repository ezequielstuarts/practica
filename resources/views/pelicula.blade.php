@extends('layouts.app')
@section('title', 'DB:Movies: Pelicula '.$pelicula->title)
@section('content')

<div class="mt-5">
    <p class="title_movie">{{$pelicula->title}} ({{date('Y', strtotime($pelicula->release_date))}})</p>

    @if ($pelicula->rating)
        <p><b>Rating: </b><span class="badge badge-info"> {{$pelicula->rating}} </span></p>
    @endif

    @if ($pelicula->release_date)
        <p><b>Lamzamiento el: </b><span class="badge badge-info">{{date('d-m-Y', strtotime($pelicula->release_date))}} </span></p>
    @endif


    @if ($pelicula->awards)
        <p><b>Premios: </b><span class="badge badge-secondary"> {{$pelicula->awards}} </span></p>
    @endif
    
    @if ($pelicula->length)
        <p><b>Duración: </b><span class="badge badge-success"> {{$pelicula->length}} min </span></p>
    @endif

    @if ($pelicula->genero)
    <p><b>Género: </b><span class="badge badge-success"> {{$pelicula->genero->name}}</span></p>
    @endif
    
    @if ($pelicula->actores)
        <p><b>Reparto: </b></p>
        <ul>
            @foreach ($pelicula->actores as $actor)
            <li>{{$actor->first_name}} {{$actor->last_name}}</li>
            @endforeach
        </ul>
    @endif
    </div>

    <div class="row mt-5">
        <div class="col-3">
            @if($prev)
            <a href="/pelicula/{{$prev->id}}" class="btn btn-outline-success btn-block"> &#171; Anterior </a>
            @endif
        </div>
        <div class="col-3 text-right">
            @if($next)
            <a href="/pelicula/{{$next->id}}" class="btn btn-outline-success btn-block"> Siguiente &#187; </a>
            @endif
        </div>
    </div>


    
    <div class="float-right">
        <a href="/peliculas">
            <div class="btn btn-outline-secondary mt-5">Volver</div>
        </a>
    
        <a href="{{route('pelicula.edit', $pelicula->id)}}">
            <div class="btn btn-outline-info mt-5">Editar</div>
        </a>
    </div>


@endsection
