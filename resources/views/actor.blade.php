@extends('layouts.app')
@section('title', 'Ver actor')
@section('content')

        <h1>Actor</h1>

        @if (session('mensaje'))
            <div class="alert alert-success alert-dismissible fade show" role="alert" data-dismiss="alert"><button type="button" class="close" data-dismiss="alert">&times;</button>
                <h4>{{ session('mensaje') }}</h4>
            </div>
        @endif

        <div class="col-md-12 mt-5">
            <h4>{{$actor->first_name}} {{$actor->last_name}}</h4>
            @if ($actor->peliculaFavorita)
            <p><b>Película favorita:</b> {{$actor->peliculaFavorita->title}} </p>
            @endif
            <p><b>Rating:</b><span class="badge badge-info"> {{$actor->rating}} </span></p>

            @if ($actor->peliculas)
            <p><b>Peliculas que actuo:</b></p>
            <ul>
                @foreach ($actor->peliculas as $pelicula)
                    <li>{{$pelicula->title}} </li>
                @endforeach
            </ul>
            @endif

        </div>



        <a href="/actores">
            <div class="btn btn-info mt-5">Volver</div>
        </a>



@endsection
