@extends('layouts.app')

@section('content')
<section class="welcome">
    <div class="col-12">
        <div class="titulos">
            <span>Peliculas con mejor Rating</span>
            <a href="{{ route('peliculas') }}"> <div class="float-right"><i class="fas fa-plus-circle fa-lg"></i></div> </a></span>
        </div>
        <div class="card-columns">
            @forelse ($peliculas as $pelicula)
    
            <div class="card">
                @if ($pelicula->cover)
                    <img src=" {{$pelicula->cover->url_small}} " class="card-img-top" alt="{{$pelicula->title}}">
                @else
                    <img src="img/noimg_small.png " class="card-img-top" alt="{{$pelicula->title}}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="pelicula/{{$pelicula->id}}">
                            {{$pelicula->title}}
                        </a>
                    </h5>
                        <span> Rating: {{$pelicula->rating}} </span>
    
                        @if ($pelicula->updated_at)
                            <p> Ultima Acualización: {{$pelicula->updated_at->diffForHumans()}} </p>
                        @endif
                </div>
            </div>
            @empty
            <h2>No hay Peliculas</h2>
            @endforelse
        </div>
        <div class="titulos">
            <span>Últimos actores agregados</span>
            <a href="{{ route('actores') }}"> <div class="float-right"><i class="fas fa-plus-circle fa-lg"></i></div> </a></span>
        </div>
            <div class="card-columns">
                @forelse ($actores as $actor)
                <div class="card">
                    <div class="card-body card_actors">
                        <div class="profile_actor_home">
                            @if ($actor->profile)
                                <img src=" {{$actor->profile->url_profile}} " class="img-thumbnail img-fluid" alt="">
                            @else
                                <img src="/img/noimg_big.png" class="card-img-top" alt="">
                            @endif
                        </div>
                        <h5 class="card-title">
                            <a href="pelicula/{{$actor->id}}">
                                {{$actor->first_name}} {{$actor->last_name}}
                            </a>
                        </h5>
                            <span> Rating: {{$pelicula->rating}} </span>
                    </div>
                </div>
                @empty
                <h2>No hay Actores</h2>
                @endforelse
            </div>
    
            <div class="titulos">
                <span>Últimos géneros agregados</span>
            <a href="{{ route('generos') }}"> <div class="float-right"><i class="fas fa-plus-circle fa-lg"></i></div> </a></span>
            </div>
                <div class="card-columns">
                    @forelse ($generos as $genero)
                    <div class="card card_genres">
                        <div class="card-body">
                            <h5 class="card-title">
                                <a href="pelicula/{{$actor->id}}">
                                    {{$genero->name}}
                                </a>
                            </h5>
                        </div>
                    </div>
                    @empty
                    <h2>No hay Actores</h2>
                    @endforelse
                </div>
            </div>
</section>
@endsection
