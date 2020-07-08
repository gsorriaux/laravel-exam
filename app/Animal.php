<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    public function specie()
    {
        return $this->belongsTo('App\Specie');
    }
    public static function getAll()
    {
        return Animal::all();
    }
    public static function supp($request)
    {   
        return Animal::destroy($request->id);
    }
    public static function addOne($request)
    {           
        $animal = new Animal;
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->gender = $request->gender;
        $animal->weight = $request->weight;
        $animal->specie_id = $request->specie_id;
        $animal->save();
        return;
    }
    public static function getOne($request)
    {
        return Animal::find($request->id);
    }
    public static function updateOne($request)
    {
        $animal = Animal::find($request->id);
        $animal->name = $request->name;
        $animal->age = $request->age;
        $animal->description = $request->description;
        $animal->gender = $request->gender;
        $animal->weight = $request->weight;
        $animal->specie_id = $request->specie_id;
        $animal->save();
        return;

    }
    protected $fillable = ['titre', 'age', 'description', 'gender', 'weight', 'specie_id'];
}
