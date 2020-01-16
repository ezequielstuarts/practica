@extends('layouts.app')
@section('title', 'DB:Movies: Editar '.$pelicula->title)
@section('content')
<section class="editar_pelicula">
    <h2>Editar {{$pelicula->title}}</h2>
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
            <script>
            $(function() {
                $('.dates #release_date').datepicker({
                'format': 'yyyy-mm-dd',
                'autoclose': true,
                'language': "es"
                });
            });
            </script>
        <div class="dates">
            <input type="text" class="form-control" id="release_date" name="release_date" value="{{$pelicula->release_date}}" placeholder="YYYY-MM-DD" autocomplete="off">
        </div>
    </div>

    <div class="form-group col-md-6">
        <label for="length">Duracion</label>
        <input type="text" class="form-control" name="length" value="{{$pelicula->length}}">
        <p class="text-danger pl-1 pt-1">{{ $errors->first('length') }}</p>
    </div>
</div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="awards">Cantidad de premios</label>
            <input type="text" class="form-control" name="awards" value="{{$pelicula->awards}}">
            <p class="text-danger pl-1 pt-1">{{ $errors->first('awards') }}</p>
        </div>

        <div class="form-group col-md-6">
            <label for="awards">Género</label>
            <select class="custom-select" name="genre_id">
                @if($pelicula->genero->id)
                <option value="{{$pelicula->genero->id}}">{{$pelicula->genero->name}}</option>
                @endif
                @foreach ($generos as $genero)
                    <option value="{{$genero->id}}">{{$genero->name}}</option>
                @endforeach
            </select>
        </div>
    </div>

    <div class="form-group">
        <hr>
        <div class="row">
            <div class="col-6">
                <label>Imagen Small</label>
                <input type="text" class="form-control mb-3" placeholder="Pegue aqui la URL de la imagen" name="url_small" value="{{$pelicula->cover->url_small}}">
                <img class="img-responsive" style="border:solid 1px; width: 200px" src="{{$pelicula->cover->url_small}}" alt="">
            </div>
            <div class="col-6">
                <label>Imagen Big</label>
                <input type="text" class="form-control mb-3" placeholder="Pegue aqui la URL de la imagen" name="url_big" value="{{$pelicula->cover->url_big}}">
                <img class="img-responsive" style="border:solid 1px; width: 200px" src="{{$pelicula->cover->url_big}}" alt="">
            </div>
        </div>
        <hr>
    </div>

    <div class="mt-3 float-right">
        <button type="submit" class="btn btn-primary">Guardar</button>
        <a class="btn btn-warning" href="/pelicula/{{$pelicula->id}}">Cancelar</a>
    </div>
    </form>

</section>
@endsection
