@extends('layouts.app')
@section('content')

<h1>Generos</h1>
<ul>
    @foreach ($generos as $genero)
     <li>
       <b> {{$genero->name}}</b>
        <ul>
            @foreach ($genero->peliculas as $pelicula)
                <li>
                    {{$pelicula->title}}
                </li>
            @endforeach
        </ul>
    </li>
    @endforeach
</ul>

<div class="container mt-5 pb-5">
    <div class="row">
        {{$generos->links()}}
    </div>
</div>

@endsection
