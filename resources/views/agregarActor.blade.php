@extends('layouts.app')
@section('title', 'DB:Movies: Nuevo Actor')
@section('content')

<section class="agregar_actor">
<h1>Agregar Actor</h1>
    <form action="/actores/agregarActor" method="post" enctype="multipart/form-data" class="mt-5">
        {{csrf_field()}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Nombre" name="first_name" value="{{old("first_name")}}">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('first_name') }}</p>
                </div>
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Apellido" name="last_name" value="{{old("last_name")}}">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('last_name') }}</p>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <input type="text" class="form-control" placeholder="Rating" name="rating" value="{{old("rating")}}">
                    <p class="text-danger pl-1 pt-1">{{ $errors->first('rating') }}</p>
                </div>

                <div class="form-group col-md-6">
                    <select class="custom-select" placeholder="" name="pelicula_favorita">
                        <option value="">Película Favorita</option>
                        @foreach ($peliculas as $peli)
                        <option value="{{$peli->id}}">{{ $peli->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                    <span class="label">Películas en las que trabajo, (puede seleccionar varios con CTRL)</span>
                    <select multiple="multiple" name="peliculasActuadas[]" id="peliculasActuadas" style="width:100%;height:200px;" class="form-control">
                        @foreach ($peliculas as $peli)
                        <option value="{{$peli->id}}">{{ $peli->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group col-md-6">
                        <span class="label">Pegue aqui la url de la imagen del actor</span>
                        <input type="text" class="form-control" placeholder="URL foto actor" name="url" value="{{old("url")}}">
                        <p class="text-danger pl-1 pt-1">{{ $errors->first('url') }}</p>
                </div>

            </div>
            <div class="mt-3 float-right">
                <button type="submit" class="btn btn-success">Guardar</button>
                <a class="btn btn-warning" href="/actores/agregarActor">Limpiar</a>
                <a class="btn btn-danger" href="/actores">Cancelar</a>
            </div>

    </form>
</section>




@endsection
