<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    public static function getAll()
    {
        return Specie::all();
    }
    public static function supp($request)
    {   
        return Specie::destroy($request->id);
    }
    public static function addOne($request)
    {
        $specie = new Specie;
        $specie->name = $request->name;
        $specie->save();
        return;
    }
    public static function getOne($request)
    {
        return Specie::find($request->id);
    }
    public static function updateOne($request)
    {
        $specie = Specie::find($request->id);
        $specie->name = $request->name;
        $specie->save();
        return;

    }
    protected $fillable = ['titre'];
}
