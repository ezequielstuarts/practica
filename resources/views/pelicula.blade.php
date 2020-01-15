@extends('layouts.app')
<section class="fondo_movies" style="background: url({{$pelicula->cover->url_big}});background-size: cover;">
<div class="fondo_movies">
@section('title', 'DB:Movies: Pelicula '.$pelicula->title)
@section('content')
<section class="pelicula">
    <div class="container mt-3">
        <p class="title_movie">{{$pelicula->title}} ({{date('Y', strtotime($pelicula->release_date))}})</p>
    </div>

    <div class="peliculas">
        <div class="row">
            <div class="col-md-6">
                @if ($pelicula->cover)
                        <img src=" {{$pelicula->cover->url_big}} " class="img-thumbnail img-fluid" alt="{{$pelicula->title}}">
                @else
                    <img src="/img/noimg_big.png" class="card-img-top" alt="{{$pelicula->title}}">
                @endif

            </div>
            <div class="col-md-6 pelicula_descripcion">
                @if ($pelicula->rating)
                    <p><i class="fas fa-chart-line"></i> <b>Rating: </b><span class="badge badge-info"> {{$pelicula->rating}} </span></p>
                @endif

                @if ($pelicula->release_date)
                    <p><i class="far fa-calendar-alt"></i> <b>Lanzamiento el: </b><span class="badge badge-info">{{date('d-m-Y', strtotime($pelicula->release_date))}} </span></p>
                @endif


                @if ($pelicula->awards)
                    <p><i class="fas fa-trophy"></i> <b>Premios: </b><span class="badge badge-secondary"> {{$pelicula->awards}} </span></p>
                @endif

                @if ($pelicula->length)
                    <p><i class="far fa-clock"></i> <b>Duración: </b><span class="badge badge-success"> {{$pelicula->length}} min </span></p>
                @endif

                @if ($pelicula->genero)
                <p><i class="fas fa-venus-mars"></i> <b>Género: </b><span class="badge badge-success"> {{$pelicula->genero->name}}</span></p>
                @endif

                <div class="reparto">
                    @if ($pelicula->actores)
                    <p><b>Reparto: </b></p>
                    <ul class="list-unstyled">
                        @forelse ($pelicula->actores as $actor)
                            <li class="media">
                                @if($actor->profile)
                                <img src="{{$actor->profile->url_profile}}" class="mr-3 mb-3" alt="{{$actor->first_name}} {{$actor->last_name}}">
                                @else
                                <img src="/img/noimg_big.png" class="mr-3 mb-3" alt="{{$actor->first_name}} {{$actor->last_name}}">
                                @endif
                                <div class="media-body">
                                <h5 class="mt-0 mb-1">{{$actor->first_name}} {{$actor->last_name}}</h5>
                                </div>
                            </li>
                            @empty
                            <hp>No hay Actores en este momento</p>
                        @endforelse
                    </ul>
                @endif
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-5 justify-content-around">
        <div class="col-4">
            @if($prev)
            <a href="/pelicula/{{$prev->id}}" class="btn btn-outline-success btn-block"> &#171; Anterior </a>
            @endif
        </div>
        <div class="col-4 text-right">
            @if($next)
            <a href="/pelicula/{{$next->id}}" class="btn btn-outline-success btn-block"> Siguiente &#187; </a>
            @endif
        </div>
    </div>



<div class="row">
    <a href="/peliculas">
        <div class="btn btn-outline-secondary mt-5">Volver</div>
    </a>

    <a class="ml-3" href="{{route('pelicula.edit', $pelicula->id)}}">
        <div class="btn btn-outline-info mt-5">Editar</div>
    </a>
</div>
</section>
</div
</section>

@endsection
