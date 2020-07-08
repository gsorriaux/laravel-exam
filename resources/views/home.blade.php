@extends('layouts.base')

@section('title', 'Accueil')
    
@section('content')

<div class="container">
    <h2>Mes animaux</h2>
    <p>Ce petit site vous permet de gerer votre liste d'animaux favoris.</p>
</div>

<div class="container">
<table class="table w-75">
    <thead class="thead-light">
        <tr>
            <th>Nom</th>
            <th>Age</th>
            <th>Description</th>
            <th>Sexe</th>
            <th>Poids</th>
            <th>Espèce</th>
            <th colspan="2"></th>

        </tr>
    </thead>
    @foreach ($animals as $animal)
    <tr>
        <td>{{ $animal->name}}</td>
        <td>{{ $animal->age}} ans</td>
        <td>{{ $animal->description}}</td>
        <td>{{ $animal->gender}}</td>
        <td>{{ $animal->weight}}kg</td>
        <td>{{ $animal->specie->name}}</td>
        <td> 
            <form action="/editAnimal" method="post">
                @csrf
                <input type="number" name="id" hidden value="{{ $animal->id}}">         
                <button type="submit" class="btn btn-outline-info">Editer</button>
            </form>
        </td>
        <td>               
            <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteAnimal" data-name="{{$animal->name}}" data-animalid="{{$animal->id}}">X</button>
        </td>
    </tr>
    @endforeach
</div>

  {{-- DELETE MODAL --}}

  <div class="modal" id="deleteAnimal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenteredLabel">Titre</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <div class="modal-body">
                <p class="name"></p>
            </div>
            <div class="modal-footer justify-content-center">
                <form action="/suppAnimal" method="post">
                    @csrf
                    <input type="number" name="id" hidden>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                    <button type="submit" class="btn btn-danger">Oui</button>
                </form>        
            </div>
        </div>
    </div>
</div>

@endsection