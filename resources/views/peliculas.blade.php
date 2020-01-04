@extends('layouts.app')
@section('content')
    

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
                
        </div>
    </div>
    @empty
    <h2>No hay Peliculas</h2>
    @endforelse
</div>

<div class="container mt-5">
    {{ $peliculas->links() }}
</div>
@endsection
