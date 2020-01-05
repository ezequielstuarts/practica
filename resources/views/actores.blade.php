
@extends('layouts.app')
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
            <div class="card">
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
                        <p class="card-text"><small class="text-muted">Última modificación {{$actor->updated_at}} </small></p>
                    @endif
              </div>
            </div>
        @empty
            <h2>No hay Actores</h2>
        @endforelse
    </div>

    <div class="container mt-5">
        {{$actores->links()}}
    </div>
@endsection