<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use Illuminate\Http\Request;

class MatchController extends Controller
{
    
    public function matches () {

        $matches = Game::orderBy('datetime', 'asc')->get();
        return view('matches', compact('matches'));
    }

    public function createMatch () {
        return view ('createMatch');
    }

    public function createMatchSubmit(Request $request)
    {

         $validatedData = $request->validate(
            [
                'against'     => 'required|min:3',
                'datetime'    => 'required|date' ,
            ],
            [
                'against.required'  => 'Nome do time é obrigatório',
                'datetime.required' => 'A data da partida é obrigatória.',
                'datetime.date'     => 'A data da partida deve ser uma data válida.',
            ]
        );

        Game::create($validatedData);

        return redirect('/matches');

    }

}
