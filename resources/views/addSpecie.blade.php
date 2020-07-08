@extends('layouts.base')

@section('title', 'Ajouter Espèce')
    
@section('content')

<div class="container">
    <form class="w-75" action="/addSpecie" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nom</label>
            <input type="texte" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>
</div>

<div class="container">
    <table class="table w-75">
        <thead class="thead-light">
            <tr>
                <th>Nom</th>
                <th colspan="2"></th>
            </tr>
        </thead>
        @foreach ($species as $specie)
        <tr>
            <td>{{ $specie->name}}</td>
            <td>               
                <button class="btn btn-outline-info" data-toggle="modal" data-target="#editSpecie" data-name="{{$specie->name}}" data-animalid="{{$specie->id}}">Editer</button>
            </td>
            <td>               
                <button class="btn btn-outline-danger" data-toggle="modal" data-target="#deleteSpecie" data-name="{{$specie->name}}" data-animalid="{{$specie->id}}">X</button>
            </td>
        </tr>
        @endforeach
    </div>

    {{-- DELETE MODAL --}}

    <div class="modal" id="deleteSpecie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
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
                    <form action="/suppSpecie" method="post">
                        @csrf
                        <input type="number" name="id" hidden>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="submit" class="btn btn-danger">Oui</button>
                    </form>        
                </div>
            </div>
        </div>
    </div>


    {{-- UPDATE MODAL --}}

    <div class="modal" id="editSpecie" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenteredLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenteredLabel"></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <form action="/editActionSpecie" method="post" class="d-flex flex-column py-3">@csrf
                        <input type="number" class="py-2" name="id" value="" hidden>
                        <label for="name">Nom de l'espèce :</label>
                        <input type="text" class="py-2" name="name" value="" required>
                        <button type="submit" class="btn btn-primary btn-lg">Editer</button>
                    </form> 
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                </div>
            </div>
        </div>
    </div>

@endsection