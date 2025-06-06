@extends('layouts/main_layout')

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-white">Jogadores Cadastrados</h2>
        <div>
            <a href="{{ url('/') }}" class="btn btn-outline-light me-2">← Voltar</a>
            <a href="{{ url('/createPlayer') }}" class="btn" style="background-color: #FF5722; border: none; color:white">+ Novo Jogador</a>
        </div>
    </div>

    @if ($players->isEmpty())
        <div class="text-center text-muted">Nenhum jogador cadastrado ainda.</div>
    @else
        <div class="row row-cols-1 row-cols-md-3 g-4">
            
           @foreach ($players as $player)
                <div class="col-12 mb-4">
                    <div 
                    class="card shadow-sm" 
                    style="min-height: 250px; display: flex; flex-direction: column; border-radius: 12px; transition: transform 0.2s ease, box-shadow 0.2s ease;"
                    onmouseover="this.style.transform='translateY(-5px)'; this.style.boxShadow='0 8px 20px rgba(255, 87, 34, 0.3)';" 
                    onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 4px 10px rgba(0,0,0,0.1)';"
                    >
                        <div class="card-body bg-white flex-grow-1 d-flex flex-column justify-content-center" style="border-radius: 12px 12px 0 0; overflow: hidden;">
                            <h3 class="card-title mb-3 text-truncate" style="color: #FF5722; font-weight: 700; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;" title="{{ $player->name }}">{{ $player->name }}</h3>

                            <div class="d-flex flex-wrap gap-4 fs-5">
                                <div class="d-flex align-items-center text-secondary">
                                    <i class="bi bi-123 me-2" style="color: #FF5722;" title="Número do jogador"></i>
                                    <span>Número: <strong>{{ $player->number }}</strong></span>
                                </div>

                                <div class="d-flex align-items-center text-secondary">
                                    <i class="bi bi-flag me-2" style="color: #FF5722;" title="Posição"></i>
                                    <span>Posição: <strong>{{ ucfirst(str_replace('_', ' ', $player->position)) }}</strong></span>
                                </div>

                                <div class="d-flex align-items-center text-secondary">
                                    <i class="bi bi-calendar3 me-2" style="color: #FF5722;" title="Data de nascimento"></i>
                                    <span>Nascimento: <strong>{{ $player->birth->format('d/m/Y') }}</strong></span>
                                </div>
                            </div>

                            <div class="mt-3 d-flex gap-2">
                                @foreach (['titular', 'reserva', 'lesionado'] as $status)
                                    <a href="{{ url('/changePlayerStatus/' . $player->id . '/' . $status) }}"
                                       class="btn btn-sm rounded-pill {{ $player->status === $status ? 'btn-primary' : 'btn-outline-secondary' }}">
                                       {{ ucfirst($status) }}
                                    </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="card-footer bg-light d-flex justify-content-end gap-2 border-0" style="border-radius: 0 0 12px 12px; padding: 0.75rem 1rem;">
                            <a href="{{ url('/editPlayer/' . $player->id) }}" class="btn btn-sm btn-outline-warning rounded-pill">Editar</a>
                            <a href="{{ url('/deletePlayer/' . $player->id) }}" class="btn btn-sm btn-outline-danger rounded-pill">Excluir</a>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    @endif
</div>

@endsection
