@extends('layouts.app')
@section('title', 'DB:Movies: Géneros')
@section('content')

<section class="generos">
    <h1>Generos</h1>

    @foreach ($generos as $genero)
     <div class="container">
         <b> {{$genero->name}}</b>
         <ul>
             @foreach ($genero->peliculas as $pelicula)
                <li>
                 {{$pelicula->title}}
                </li>
            @endforeach
        </ul>
    </div>
    @endforeach

    



<div class="container mt-5 pb-5">
    <div class="row">
        {{$generos->links()}}
    </div>
</div>
</section>

@endsection
