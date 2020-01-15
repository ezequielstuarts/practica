@extends('layouts.app')
@section('title', 'DB:Movies: Géneros')
@section('content')
<section class="generos">
    <h1>Listado de generos</h1>
    @foreach ($generos as $genero)
    <div class="container">
        <p class="title_generos">{{$genero->name}}</p>
        <div class="card-columns">
            @forelse ($genero->peliculas as $pelicula)
            <div class="card zoom">
                @if($pelicula->cover)
                <img src="{{$pelicula->cover->url_small}}" class="card-img-top" alt="...">
                @else
                    <img src="/img/noimg_small.png" class="card-img-top" alt="...">
                @endif
              <div class="card-body">
                <h5 class="card-title"><a href="pelicula/{{$pelicula->id}}">{{$pelicula->title}}</a></h5>
              </div>
            </div>
            @empty
                <p>No tenemos películas asociadas a este genero</p>
            @endforelse
        </div>
    </div>
    @endforeach





<div class="container mt-5 pb-5">
    <div class="row">
        {{$generos->links()}}
    </div>
</div>

<div class="row">
    <a href="/welcome">
        <div class="btn btn-outline-secondary mt-5">Volver</div>
    </a>
</div>

</section>

@endsection
