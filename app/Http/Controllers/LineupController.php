<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Game;
use App\Models\Player;
use Illuminate\Http\Request;

class LineupController extends Controller
{
    
    public function index ($matchId)
    {
        $match = Game::with('players')->findOrFail($matchId);
        $availablePlayers = Player::all();

        return view('lineup', compact('match', 'availablePlayers'));
    }

    public function addPlayerToLineup(Request $request, $matchId)
    {
        $game = Game::findOrFail($matchId);

        if ($game->players()->count() >= 11) {
            return redirect()->back();
        }

        $game->players()->syncWithoutDetaching([$request->player_id]);

        return redirect()->back();
    }

    public function deletePlayerLineup ($matchId, $playerId) {

        $game = Game::findOrFail($matchId);
        $game->players()->detach($playerId);

        return redirect()->back();
    }

}
