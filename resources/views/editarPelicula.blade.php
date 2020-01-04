@extends('layouts.app')
@section('content')
    <h1>Editar pelicula</h1>
<form action=
{{-- "{{route('peliculas.editar')}}" --}}
method="post" class="mt-5"> 
    {{csrf_field()}}
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Titulo" name="title" value="{{old("title")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Rating" name="rating" value="{{old("rating")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>
            <div class="form-group col-md-6">
                <input type="date" class="form-control" placeholder="Fecha de Estreno" name="release_date" value="{{old("release_date")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Duracion" name="length" value="{{old("length")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('length') }}</p>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <input type="text" class="form-control" placeholder="Premios" name="awards" value="{{old("awards")}}">
                <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
            </div>

            <div class="form-group col-md-6">
                <select class="custom-select" placeholder="" name="genre_id">            <option value="">Genero</option>
                    @foreach ($generos as $genero)
                        <option value="{{$genero->id}}">{{ $genero->name}}</option>    
                    @endforeach
                  </select>
            </div>
        </div>
        <div class="mt-3 float-right">
            <button type="submit" class="btn btn-primary">Guardar</button>
            {{-- <a class="btn btn-warning" href="{{route('peliculas.agregarPelicula')}}">Limpiar</a> --}}
        </div>

  </form>

@endsection