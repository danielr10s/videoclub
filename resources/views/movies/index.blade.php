@extends('adminlte::page')

@section('title', 'Películas')

@section('content_header')
    <h1>Películas</h1>
@stop

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Registros</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Nombre</th>
                                    <th>Sinopsis</th>
                                    <th>Precio unitario</th>
                                    <th>Género</th>
                                    <th>Fecha de estreno</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($movies as $movie)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$movie->movie_name}}</td>
                                    <td>{{$movie->movie_synopsis}}</td>
                                    <td>{{$movie->movie_unit_price}}</td>
                                    <td>{{$movie->movie_genre}}</td>
                                    <td>{{$movie->movie_release_date}}</td>
                                    <td>
                                        <a href="{{ url('/movies/'.$movie->id.'/edit') }}">
                                            <button type="button" class="btn btn-block btn-info">Editar</button>
                                        </a>
                                        <form action="{{ url('/movies/'.$movie->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <button type="submit" onclick="return confirm('¿Eliminar?')" class="btn btn-block btn-danger">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <!-- <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                            <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                            </ul>
                        </div> -->
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