@extends('layouts.base')

@section('title', 'Ajouter Animal')
    
@section('content')

<div class="container">
<form class="w-75" action="/addAnimal" method="post">
    @csrf
    <div class="form-group">
        <label for="name">Nom</label>
        <input type="texte" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" name="age">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <input type="texte" class="form-control" name="description">
    </div>
    <div class="form-group">
        <label for="gender">Sexe</label>
        <input type="texte" class="form-control" name="gender">
    </div>
    <div class="form-group">
        <label for="weight">Poids</label>
        <input type="number" class="form-control" name="weight">
    </div>
    <div class="form-group">
        <select class="custom-select" name="specie_id" required>
            <option value="" disabled selected>Sélectionner l'espèce : </option>
            @foreach ($species as $specie)
                <option value="{{$specie->id}}">{{$specie->name}}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter</button>
</form>
</div>

@endsection