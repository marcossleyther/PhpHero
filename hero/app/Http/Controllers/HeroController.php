<?php

namespace App\Http\Controllers;

use App\Models\Hero;
use Illuminate\Http\Request;

class HeroController extends Controller
{
    public function index(){
        $heroes = Hero::all();

        return view('admin.heroes.index', ['heroes'=>$heroes]);
    }

    public function create(){
        return view('admin.heroes.create');
    }
}
