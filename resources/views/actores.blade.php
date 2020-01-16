@extends('layouts.app')
@section('title', 'DB:Movies: Actores')
@section('content')
<section class="actores">
    <div class="containeR">
        <div class="row">
            <div class="col-md-10">
                <h1>Listado de actores</h1>
            </div>
            <div class="col-md-2">
                <a class="text-right" href="{{route('actores.agregarActor')}}">
                    <div class="btn btn-primary">Agregar un actor</div>
                </a>

            </div>
        </div>
    </div>
    <div class="card-columns">
        @forelse ($actores as $actor)
        <div class="card">
            @if ($actor->profile)
                <img src="{{$actor->profile->url_profile}}" alt="{{$actor->first_name}} {{$actor->last_name}}" class="img-thumbnail">
            @else
                <img src="/img/noimg_big.png" class="card-img-top" alt="{{$actor->first_name}} {{$actor->last_name}}">
            @endif
                <div class="card-body">
                    <h5 class="card-title">{{$actor->first_name}} {{$actor->last_name}}</h5>
                    <p class="card-text">@if ($actor->peliculaFavorita)
                        <b>Película favorita: </b> <i>{{$actor->peliculaFavorita->title}}</i>
                        @endif</p>
                        <p><i style="color:#000" class="fas fa-chart-line"></i> <span class="badge badge-info">Rating: {{$actor->rating}} </span></p>
                    <a href="actor/{{$actor->id}}">
                        <p class="card-text text-right">Más Info</p>
                    </a>
                    @if ($actor->updated_at)
                        <p class="card-text text-right"><small class="text-muted">Última modificación {{date('d-m-Y', strtotime($actor->update_at))}} </small></p>
                    @endif
            </div>
            </div>
        @empty
            <h2>No hay Actores</h2>
        @endforelse
    </div>

    <div class="container mt-5">
        <div class="row">
            {{$actores->links()}}
        </div>
    </div>
</section>

@endsection
