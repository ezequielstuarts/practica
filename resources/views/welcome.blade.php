@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="titulos">
        <p>Peliculas con mejor Rating
        <span> <a href="/peliculas">Ver Mas</a></span></p>
    </div>
    <div class="card-columns">
        @forelse ($peliculas as $pelicula)

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="pelicula/{{$pelicula->id}}">
                        {{$pelicula->title}}
                    </a>
                </h5>
                    <span> Rating: {{$pelicula->rating}} </span>
                    <p> Ultima Acualización: {{$pelicula->update_at}} </p>
            </div>
        </div>
        @empty
        <h2>No hay Peliculas</h2>
        @endforelse
    </div>
    <div class="titulos">
        <p>Ultimos Actores
        <span> <a href="/actores">Ver Mas</a></span></p>
    </div>
        <div class="card-columns">
            @forelse ($actores as $actor)
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="pelicula/{{$actor->id}}">
                            {{$actor->first_name}} {{$actor->last_name}}
                        </a>
                    </h5>
                        <span> Rating: {{$pelicula->rating}} </span>
                </div>
            </div>
            @empty
            <h2>No hay Actores</h2>
            @endforelse
        </div>

        <div class="titulos">
            <p>Ultimos Generos
                <span> <a href="/generos">Ver Mas</a></span></p>
        </div>
            <div class="card-columns">
                @forelse ($generos as $genero)
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="pelicula/{{$actor->id}}">
                                {{$genero->name}}
                            </a>
                        </h5>
                    </div>
                </div>
                @empty
                <h2>No hay Actores</h2>
                @endforelse
            </div>

</div>
@endsection
