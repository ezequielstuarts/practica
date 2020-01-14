@extends('layouts.app')
@section('title', 'DB:Movies: Actores')
@section('content')
<h1>Actores</h1>
<div class="mt-5 mb-5">
    <div class="mt-5 mb-5">
        <a href="{{route('actores.agregarActor')}}">
            <div class="btn btn-primary">Agregar un actor</div>
        </a>
    </div>
    
    <div class="card-columns">
        @forelse ($actores as $actor)
        <div class="card actores">
            @if ($actor->profile)
                <img src="{{$actor->profile->url_profile}}" alt="{{$actor->first_name}} {{$actor->last_name}}" class="img-thumbnail">
            @else
                <img src="/img/noimg_big.png" class="card-img-top" alt="{{$pelicula->title}}">
            @endif
                <div class="card-body">
                    <h5 class="card-title">{{$actor->first_name}} {{$actor->last_name}}</h5>
                    <p class="card-text">@if ($actor->peliculaFavorita)
                        Película favorita: {{$actor->peliculaFavorita->title}}
                        @endif</p>
                    <p><span class="badge badge-info">Rating: {{$actor->rating}} </span></p>
                    <a href="actor/{{$actor->id}}">
                        <p class="card-text">Más Info</p>
                    </a>
                    @if ($actor->updated_at)
                        <p class="card-text"><small class="text-muted">Última modificación {{date('d-m-Y', strtotime($actor->update_at))}} </small></p>
                    @endif
              </div>
            </div>
        @empty
            <h2>No hay Actores</h2>
        @endforelse
    </div>

    <div class="container mt-5 pb-5">
        <div class="row">
            {{$actores->links()}}
        </div>
    </div>

@endsection
