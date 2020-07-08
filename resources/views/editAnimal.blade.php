@extends('layouts.base')

@section('title', 'Ajouter Animal')
    
@section('content')
<div class="container">
    <form class="w-75" action="/editActionAnimal" method="post">
        @csrf
        <input type="number"name="id" value="{{ $animal->id }}" hidden>
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="texte" class="form-control" name="name" value="{{ $animal->name }}">
        </div>
        <div class="form-group">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" value="{{ $animal->age }}">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="texte" class="form-control" name="description" value="{{ $animal->description }}">
        </div>
        <div class="form-group">
            <label for="gender">Sexe</label>
            <input type="texte" class="form-control" name="gender" value="{{ $animal->gender }}">
        </div>
        <div class="form-group">
            <label for="weight">Poids</label>
            <input type="number" class="form-control" name="weight" value="{{ $animal->weight }}">
        </div>
        <div class="form-group">
            <select class="custom-select" name="specie_id" required>
                <option value="" disabled>Sélectionner l'espèce : </option>
                @foreach ($species as $specie)
                    <option value="{{$specie->id}}" {{ ($specie->id == $animal->specie_id) ? 'selected' : '' }}  >{{$specie->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

@endsection