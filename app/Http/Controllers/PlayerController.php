<?php

namespace App\Http\Controllers;

use App\Models\Player;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PlayerController extends Controller
{
    public function players()
    {
        $players = Player::all(); 
        return view('allPlayers', compact('players'));
    }

    public function createPlayer () {
        return view ('createPlayer');
    }

    public function createPlayerSubmit(Request $request)
    {

        $validPositionOptions = ['goleiro', 'lateral', 'zagueiro', 'libero', 'volante', 'meio campo', 'ala', 'ponta', 'centroavante'];
        $validStatusOptions   = ['titular', 'reserva'];

         $validatedData = $request->validate(
            [
                'name'     => 'required|min:4',
                'number'   => 'required',
                'position' => ['required', Rule::in($validPositionOptions)],
                'status'   => ['required', Rule::in($validStatusOptions)],
                'birth'    => 'required|date',
            ],
            [
                'name.required'     => 'O nome é obrigatório.',
                'name.min'          => 'O nome precisa ter no mínimo 4 caracteres.',
                'number.required'   => 'O número do jogador é obrigatório.',
                'position.required' => 'A posição é obrigatória.',
                'position.in'       => 'A posição selecionada é inválida. Escolha uma posição válida.',
                'status.required'   => 'O status é obrigatório.',
                'status.in'         => 'O status selecionado é inválido. Escolha entre titular ou reserva.',
                'birth.required'    => 'A data de nascimento é obrigatória.',
                'birth.date'        => 'A data de nascimento deve ser uma data válida.',
            ]
        );

        Player::create($validatedData);

        return redirect('/players');

    }

    public function changePlayerStatus($id, $status)
    {

        $validStatuses = ['titular', 'reserva', 'lesionado'];

        if (!in_array($status, $validStatuses)) {
            return redirect('/players');
        }

        $player = Player::findOrFail($id);

        $player->status = $status;
        $player->save();

        return redirect('/players');
    }

    public function editPlayer ($id) {
        $player = Player::findOrFail($id);
        return view ('editPlayer', ['player' => $player]);
    }

    public function editPlayerSubmit (Request $request, $id) {

        $validPositionOptions = ['goleiro', 'lateral', 'zagueiro', 'libero', 'volante', 'meio campo', 'ala', 'ponta', 'centroavante'];
        $validStatusOptions   = ['titular', 'reserva', 'lesionado'];

         $validatedData = $request->validate(
            [
                'name'     => 'required|min:4',
                'number'   => 'required',
                'position' => ['required', Rule::in($validPositionOptions)],
                'status'   => ['required', Rule::in($validStatusOptions)],
                'birth'    => 'required|date',
            ],
            [
                'name.required'     => 'O nome é obrigatório.',
                'name.min'          => 'O nome precisa ter no mínimo 4 caracteres.',
                'number.required'   => 'O número do jogador é obrigatório.',
                'position.required' => 'A posição é obrigatória.',
                'position.in'       => 'A posição selecionada é inválida. Escolha uma posição válida.',
                'status.required'   => 'O status é obrigatório.',
                'status.in'         => 'O status selecionado é inválido. Escolha entre titular ou reserva.',
                'birth.required'    => 'A data de nascimento é obrigatória.',
                'birth.date'        => 'A data de nascimento deve ser uma data válida.',
            ]
        );

        $player = Player::findOrFail($id);

        $player->update($validatedData);

        return redirect('/players');
    }

    public function deletePlayer($id)
    {
        $player = Player::findOrFail($id);
        $player->delete();

        return redirect('/players');
    }

}

