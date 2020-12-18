<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index()
    {
        $heroes = Hero::all();

        return view('admin.heroes.index', ['heroes'=>$heroes]);
    }

    public function create()
    {
        return view('admin.heroes.create');
    }

    public function store(Request $request)
    {
        $hero = new Hero();

        $hero->name = $request->input('name');
        $hero->hp = $request->input('hp');
        $hero->atq = $request->input('atq');
        $hero->def = $request->input('def');
        $hero->luck = $request->input('luck');
        $hero->conins = $request->input('conins');
        $hero->xp=0;
        $hero->level_Id =1;

        $hero->save();

        return redirect()->route('admin.heroes');
    }

    public function edit($Id){
        $hero = Hero::find($Id);

        return view('admin.heroes.edit', ['hero' => $hero]);
    }
}