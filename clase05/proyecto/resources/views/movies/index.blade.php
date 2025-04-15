<?php
/** @var \Illuminate\Database\Eloquent\Collection|\App\Models\Movie[] $movies*/

?>

<x-layout>
    <x-slot:title>Listado de Peliculas</x-slot:title>
    <h1 class="mb-4">Listado de peliculas</h1>
    <table class="table table-bordered tabled-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Título</th>
                <th>Precio</th>
                <th>Fecha de estreno</th>
                <th>Acciones</th>
            </tr>

            @foreach($movies as $movie):

            <tr>
                <td>{{$movie->movie_id}}</td>
                <td>{{$movie->title}}</td>
                <td>{{$movie->price}}</td>
                <td>{{$movie->release_date}}</td>
                <td><a
                    href="{{route('movies.view', [ 'id' => $movie->movie_id ]) }}"
                    class="btn btn-primary">Ver</td>
            </tr>

            @endforeach;

        </thead>
    </table>
</x-layout>
