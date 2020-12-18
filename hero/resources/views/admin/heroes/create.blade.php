@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Heroe</h1>

    <form action="{{ route('admin.heroes.store') }}" method='post'>
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input required type="text" class="form-control" name="name" id="name" placeholder="Ingrese un nombre">
        </div>

        <div class="form-group">
            <label for="hp">HP</label>
            <input required type="number" class="form-control" name="hp" id="hp" placeholder="Ingrese los puntos vida">
        </div>

        <div class="form-group">
            <label for="atq">Ataque</label>
            <input required type="tenumberxt" class="form-control" name="atq" id="atq" placeholder="Ingrese los puntos ataque">
        </div>

        <div class="form-group">
            <label for="def">Defensa</label>
            <input required type="number" class="form-control" name="def" id="def" placeholder="Ingrese los puntos defensa">
        </div>

        <div class="form-group">
            <label for="luck">Suerte</label>
            <input required type="number" class="form-control" name="luck" id="luck" placeholder="Ingrese los puntos suerte">
        </div>

        <div class="form-group">
            <label for="conins">Monedas</label>
            <input required type="number" class="form-control" name="conins" id="conins" placeholder="Ingrese la cantidad de monedas">
        </div>

        <button type="submit" class="btn btn-success">Crear</button>

    </form>

@endsection
