<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;
use App\Specie;

class NavController extends Controller
{
    public function home()
    {
        $animals = Animal::getAll();
        return view('home', ['animals' => $animals]);
    }
    public function addAnimal()
    {
        $species = Specie::getAll();
        return view('addAnimal', ['species' => $species]);
    }
    public function addSpecie()
    {
        $species = Specie::getAll();
        return view('addSpecie', ['species' => $species]);
    }
    public function editAnimal(Request $request)
    {
        $animal = Animal::getOne($request);
        $species = Specie::getAll();
        return view('editAnimal', [
            'species' => $species,
            'animal' => $animal
            ]);
    }
    public function editSpecie(Request $request)
    {
        $specie = Specie::getOne($request);
        return view('editSpecie', ['specie' => $specie]);
    }

}
