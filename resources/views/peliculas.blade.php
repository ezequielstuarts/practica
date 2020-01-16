@extends('layouts.app')
@section('title', 'DB:Movies: Peliculas')
@section('content')
<section class="peliculas">
    <h1>Listado de películas</h1>
    <div class="container">
        @if (session('mensaje'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <h4>{{ session('mensaje') }}</h4>
        </div>
        @endif
    </div>
    <div class="card-columns">
        @forelse ($peliculas as $pelicula)
        <div class="card zoom">
            @if ($pelicula->cover)
            <img src=" {{$pelicula->cover->url_small}} " class="card-img-top" alt="{{$pelicula->title}}">
            @else
                <img src="img/noimg_small.png " class="card-img-top" alt="{{$pelicula->title}}">
            @endif
            <div class="card-body">
                <h5 class="card-title">
                    <a href="pelicula/{{$pelicula->id}}">
                        <b>{{$pelicula->title}}</b>
                    </a>
                </h5>
                <i style="color:#000" class="fas fa-chart-line"></i><span> Rating: {{$pelicula->rating}} </span>
                <a href="pelicula/{{$pelicula->id}}"><div class="float-right"><i class="fas fa-plus-circle fa-lg"></i></div></a>
            </div>
        </div>
        @empty
        <h2>No hay Peliculas</h2>
        @endforelse
    </div>
    <div class="container mt-5 pb-5">
        <div class="row">
            {{$peliculas->links()}}
        </div>
    </div>
</section>
@endsection
