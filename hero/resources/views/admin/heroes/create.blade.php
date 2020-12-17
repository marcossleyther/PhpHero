@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Heroe</h1>

    <form action="#" method='post'>
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Ingrese un nombre">
        </div>

        <div class="form-group">
            <label for="ho">HP</label>
            <input type="number" class="form-control" id="hp" placeholder="Ingrese los puntos vida">
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input type="tenumberxt" class="form-control" id="atq" placeholder="Ingrese los puntos ataque">
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input type="number" class="form-control" id="def" placeholder="Ingrese los puntos defensa">
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input type="number" class="form-control" id="luck" placeholder="Ingrese los puntos suerte">
        </div>

        <div class="form-group">
            <label for="conins">Monedas</label>
            <input type="number" class="form-control" id="conins" placeholder="Ingrese la cantidad de monedas">
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>

    </form>

@endsection
