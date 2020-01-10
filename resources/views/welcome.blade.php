@extends('layouts.app')

@section('content')
<div class="container mb-5">
    <div class="titulos">
        <span>Peliculas con mejor Rating</span>
        <a href="{{ route('peliculas') }}"> <div class="btn btn-primary btn-sm float-right">
            Ver Más</div> </a></span>
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

                    @if ($pelicula->updated_at)
                        <p> Ultima Acualización: {{$pelicula->updated_at->diffForHumans()}} </p>
                    @endif
            </div>
        </div>
        @empty
        <h2>No hay Peliculas</h2>
        @endforelse
    </div>
    <div class="titulos">
        <span>Últimos actores agregados</span>
        <a href="{{ route('actores') }}"> <div class="btn btn-primary btn-sm float-right">
            Ver Más</div> </a></span>
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
            <span>Últimos géneros agregados</span>
        <a href="{{ route('generos') }}"> <div class="btn btn-primary btn-sm float-right">
            Ver Más</div> </a></span>
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
