<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pokemon;

class PokemonController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit($id) {
        return view('editdata')->with('data', Pokemon::find($id));
    }

    public function update(Request $request, $id) {
        $update = Pokemon::find($id);
        $update->fill($request->all());
        $update->save();
        return redirect('/console');
    }

    public function create() {
        return view('create');
    }

}

