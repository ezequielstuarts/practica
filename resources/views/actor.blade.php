@extends('layouts.app')
@section('title', 'DB:Movies: Actor '.$actor->first_name.' '.$actor->last_name)
@section('content')


@if (session('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>{{ session('mensaje') }}</h4>
</div>
@endif
<div class="actor">
    <p class="title_actor">Actor: {{$actor->first_name}} {{$actor->last_name}} </p>
    <div class="row">
        <div class="col-md-6">
            @if ($actor->profile)
                    <img src=" {{$actor->profile->url_profile}} " class="img-thumbnail img-fluid" alt="">
            @else
                <img src="/img/noimg_big.png" class="card-img-top" alt="">
            @endif
        </div>
        
        <div class="col-md-6 pelicula_descripcion">
            @if ($actor->rating)
                <p><i class="fas fa-chart-line"></i><b> Rating: </b><span class="badge badge-info"> {{$actor->rating}} </span></p>
            @endif

            @if ($actor->peliculaFavorita)
                <p><i class="fas fa-star"></i><b> Película favorita: </b> {{$actor->peliculaFavorita->title}} </p>
            @endif
            <div class="reparto">
                @if ($actor->peliculas)
                    <p><b>Peliculas que actuo: </b></p>
                    <ul class="list-unstyled">
                        @forelse ($actor->peliculas as $pelicula)
                            <li class="media">
                                @if($pelicula->cover)
                                    <img src="{{$pelicula->cover->url_small}}" class="mr-3 mb-3" alt="">
                                @else
                                    <img src="/img/noimg_big.png" class="mr-3 mb-3" alt="">
                                @endif
                                <div class="media-body">
                                    <h5 class="mt-0 mb-1">{{$pelicula->title}}</h5>
                                </div>
                            </li>
                        @empty
                        <p>No contiene ninguna pelicula</p>
                        @endforelse
                    </ul>
                @endif
            </div>
        </div>
    </div>
</div>

<div class="row mt-5 justify-content-around">
    <div class="col-3">
        @if($prev)
        <a href="/actor/{{$prev->id}}" class="btn btn-outline-success btn-block"> &#171; Anterior </a>
        @endif
    </div>
    <div class="col-3 text-right">
        @if($next)
        <a href="/actor/{{$next->id}}" class="btn btn-outline-success btn-block"> Siguiente &#187; </a>
        @endif
    </div>
</div>

<div class="row mb-5">
    <a href="/actores">
        <div class="btn btn-outline-secondary mt-5">Volver</div>
    </a>
</div>



@endsection
