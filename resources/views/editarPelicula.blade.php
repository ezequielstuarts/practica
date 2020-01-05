@extends('layouts.app')
@section('content')
    <h1>Editar pelicula</h1>
    <form action="/pelicula/edit/{{$pelicula->id}}" method="post" class="mt-5"> 
@method("patch")
{{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Titulo</label>
                <input type="text" class="form-control" name="title" value=" {{$pelicula->title}} ">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
            </div>
            <div class="form-group col-md-6">
                <label for="rating">Rating</label>
                <input type="text" class="form-control" name="rating" value="{{$pelicula->rating}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>
            <div class="form-group col-md-6">
                <label for="release_date">Fecha de lanzamiento</label>
                <input type="date" class="form-control" name="release_date" value="{{$pelicula->release_date}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>
            <div class="form-group col-md-6">
                <label for="length">Duracion</label>
                <input type="text" class="form-control" name="length" value="{{$pelicula->length}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('length') }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="awards">Cantida de premios</label>
                <input type="text" class="form-control" name="awards" value="{{$pelicula->awards}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>

            {{-- <div class="form-group col-md-6">
                <select class="custom-select" genre_id">            <option value="">Genero</option>
                    @foreach ($generos as $genero)
                        <option value="{{$genero->id}}">{{ $genero->name}}</option>    
                    @endforeach
                  </select>
            </div> --}}
        </div>
        <div class="mt-3 float-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a class="btn btn-warning" href="{{route('peliculas')}}">Cancelar</a>
        </div>

  </form>

@endsection