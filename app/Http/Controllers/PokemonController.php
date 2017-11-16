<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PokemonController extends Controller
{
    public function find(Request $request) {
        $find = $request->input('pokemon');
        $data = DB::table('pokemon')->where('name', 'like', $find)->first();
        return view('welcome')->with('data', $data);
    }
}
