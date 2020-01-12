@extends('layouts.app')
@section('title', 'DB:Movies: Peliculas')
@section('content')

<section class="peliculas">
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
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">
                    <a href="pelicula/{{$pelicula->id}}">
                        {{$pelicula->title}}
                    </a>
                </h5>
                    <span> Rating: {{$pelicula->rating}} </span>
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
