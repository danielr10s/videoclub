@extends('adminlte::page')

@section('title', 'Editar película')

@section('content_header')
    <h1>Editar película</h1>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Registro de películas</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form action="{{ url('/movies/'.$movie->id) }}" method="post">
                            {{ csrf_field() }}
                            {{ method_field("PATCH") }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="movie_name">Nombre</label>
                                    <input value="{{$movie->movie_name}}" type="text" class="form-control" id="movie_name" name="movie_name" placeholder="Nombre de la película">
                                </div>
                                <div class="form-group">
                                    <label for="movie_synopsis">Sinopsis</label>
                                    <input value="{{$movie->movie_synopsis}}" type="text" class="form-control" id="movie_synopsis" name="movie_synopsis" placeholder="Sinopsis de la película">
                                </div>
                                <div class="form-group">
                                    <label for="movie_unit_price">Precio unitario</label>
                                    <input value="{{$movie->movie_unit_price}}" type="text" class="form-control" id="movie_unit_price" name="movie_unit_price" placeholder="Precio unitario de la película">
                                </div>
                                <div class="form-group">
                                    <label for="movie_genre">Género</label>
                                    <input value="{{$movie->movie_genre}}" type="text" class="form-control" id="movie_genre" name="movie_genre" placeholder="Género de la película">
                                </div>
                                <div class="form-group">
                                    <label for="movie_release_date">Fecha de estreno</label>
                                    <input value="{{$movie->movie_release_date}}" type="date" class="form-control" id="movie_release_date" name="movie_release_date" placeholder="Fecha de estreno de la película">
                                </div>
                                <div class="form-group">
                                <label for="id_movie_type">Tipo</label>
                                <select class="custom-select form-control-border" id="id_movie_type" name="id_movie_type">
                                    <option value="1">Nuevos lanzamientos</option>
                                    <option value="2">Películas normales</option>
                                    <option value="3">Películas viejas</option>
                                </select>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Enviar</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    <section>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop