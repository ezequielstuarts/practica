
@extends('layouts.app')
@section('content')
<h1>Actores</h1>
<div class="mt-5 mb-5">
    <a href="{{route('actores.agregarActor')}}">
    <div class="btn btn-primary">Agregar un actor
    </div></a>
    {{-- <form action="{{route('actor.buscar')}}" method="post"> --}}
    {{csrf_field()}}
        <div class="input-group mb-3">

            <input type="text" name="nombre" value="" class="form-control"  placeholder="Busca un actor" aria-label="Busca un actor" value="buscar"

            aria-describedby="button-addon2">
            <div class="input-group-append">

            <a class="btn btn-outline-warning" href="/actores">Limpiar</a>

            <button class="btn btn-outline-success" type="submit" id="button-addon2">Buscar</button>

                </button>

            </div>
        </div>
        </form>
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