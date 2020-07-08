<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Animal;
use App\Specie;

class ActionController extends Controller
{
    // ANIMALS SECTION

    public function suppAnimal(Request $request)
    {
        Animal::supp($request);
        return redirect('/');
    }
    public function addAnimal(Request $request)
    {
        Animal::addOne($request);
        return redirect('/');
    }
    public function editAnimal(Request $request)
    {        
        Animal::updateOne($request);
        return redirect('/');
    }

    // SPECIES SECTION

    public function addSpecie(Request $request)
    {
        Specie::addOne($request);
        return redirect('/addSpecie');
    }
    public function suppSpecie(Request $request)
    {
        Specie::supp($request);
        return redirect('/addSpecie');
    }
    public function editSpecie(Request $request)
    {
        Specie::updateOne($request);
        return redirect('/addSpecie');
    }
}
