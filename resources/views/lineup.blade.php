@extends('layouts/main_layout') 

@section('content')

<div style="background-color: #272B30; min-height: 100vh; padding: 2rem; color: #fff;">
    <div style="max-width: 800px; margin: auto;">

        <a href="{{ url('/matches') }}" 
           style="display: inline-block; margin-bottom: 1.5rem; 
                  background-color: #FF5722; color: white; 
                  padding: 0.5rem 1rem; border-radius: 5px; 
                  text-decoration: none; font-weight: bold;">
            ← Voltar para Partidas
        </a>

        <h2 style="margin-bottom: 1.5rem;">Escalação da Partida: Laravel FC X {{ $match->against }}</h2>

        <form action="{{ url('/addPlayerToLineup/' . $match->id) }}" method="POST" style="margin-bottom: 2rem;">
            @csrf
            <label for="player_id">Adicionar jogador:</label>

            <div style="display: flex; gap: 1rem; margin-top: 0.5rem;">

                <select name="player_id" id="player_id" required style="flex: 1; padding: 0.5rem; border-radius: 5px;">
                    <option value="" disabled selected>Selecione um jogador</option>
                    @foreach ($availablePlayers as $player)
                        @if (!$match->players->contains($player->id))
                            <option value="{{ $player->id }}">{{ $player->name }}</option>
                        @endif
                    @endforeach
                </select>

                <button type="submit" style="background-color: #FF5722; color: white; border: none; padding: 0.5rem 1rem; border-radius: 5px;">
                    Adicionar
                </button>
            </div>

        </form>

        <h4>Jogadores escalados:</h4>

        <ul style="list-style: none; padding: 0;">
            @forelse ($match->players as $player)
                <li style="display: flex; justify-content: space-between; align-items: center; background-color: #333; padding: 0.75rem 1rem; margin-bottom: 0.5rem; border-radius: 5px;">
                    <span>{{ $player->name }}</span>

                    <form action="{{ url('/deletePlayerLineup/' . $match->id . '/' . $player->id) }}" method="POST" style="margin: 0;">
                        @csrf
                        <button type="submit" style="background-color: #FF5722; color: white; border: none; padding: 0.3rem 0.8rem; border-radius: 5px;">
                            Remover
                        </button>
                    </form>

                </li>
            @empty
                <li style="padding: 1rem; text-align: center; background-color: #333; border-radius: 5px;">Nenhum jogador escalado ainda.</li>
            @endforelse
        </ul>

    </div>
</div>
@endsection
