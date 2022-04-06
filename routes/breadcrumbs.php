<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
// Inicio
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Inicio', url('home'));
});
// Inicio > Generos
Breadcrumbs::for('contactanos', function ($trail) {
    $trail->parent('home');
    $trail->push('Contactanos', url('/contactanos'));
});

Breadcrumbs::for('detalleM', function ($trail) {
    $trail->parent('home');
    $trail->push('Detalle de Mascota', url('/detalleM'));
});
Breadcrumbs::for('mascota', function ($trail) {
    $trail->parent('home');
    $trail->push('Mascotas', url('/mascotas'));
});
Breadcrumbs::for('cuidados', function ($trail) {
    $trail->parent('home');
    $trail->push('Cuidados', url('/cuidados'));
});
/*// Inicio > Generos > [Genero]
Breadcrumbs::for('genre', function ($trail, $genre) {
    $trail->parent('genres');
    $trail->push($genre->name, route('genres.show', $genre));
});
// Inicio > Generos > [Genero] > [Pelicula]
Breadcrumbs::for('movie', function ($trail, $movie) {
    $trail->parent('genre', $movie->genre);
    $trail->push($movie->name, route('movies.show', $movie));
});*/