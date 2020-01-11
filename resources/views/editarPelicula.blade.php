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
                            <option value="{{$pelicula->genero->id}}">{{$pelicula->genero->name}}</option>

                            @foreach ($generos as $genero)
                                <option value={{$genero->id}}>{{$genero->name}}</option>
                            @endforeach

                            </select>
                        </div>
                    </div>



                <div class="form-group col-md-6">
                    <option value="">Actores que trabajaron en esta película</option>
                    <span>Puede seleccionar varios con CTRL</span>
                    
                    <select multiple="multiple" name="peliculasActuadas[]" id="peliculasActuadas" style="width:100%;height:200px;">
                        @foreach ($actores as $actor)
                            <option value="{{$actor->id}}">{{$actor->id}}{{$actor->last_name}}</option>
                        @endforeach
                    </select>
                    

                    <ul>
                        @foreach ($pelicula->actores as $actor)
                            @if ( $pelicula->actor_id == $actor->_id)
                                <li>{{$actor->first_name}} {{$actor->last_name}}</li>
                            @endif
                        @endforeach
                    </ul>

                </div>


                <div class="mt-3 float-right">
                    <button type="submit" class="btn btn-primary">Guardar</button>
                    <a class="btn btn-warning" href="{{route('peliculas')}}">Cancelar</a>
                </div>

          </form>

@endsection
