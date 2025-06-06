@extends('layouts/main_layout')

@section('content')

<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-white">Partidas</h2>
        <div>
            <a href="{{ url('/') }}" class="btn btn-outline-light me-2">← Voltar</a>
            <a href="{{ url('/createMatch') }}" class="btn" style="background-color: #FF5722; border: none; color:white">+ Nova Partida</a>
        </div>
    </div>

    @if ($matches->isEmpty())
        <div class="text-center text-muted">Nenhuma partida cadastrada ainda.</div>
    @else
        <div class="row row-cols-1 g-4">
            @foreach ($matches as $match)
                @php
                    $isPast = \Carbon\Carbon::parse($match->datetime)->isPast();
                @endphp
                <div class="col-12">
                    <div 
                        class="card shadow-sm" 
                        style="
                            min-height: 160px; 
                            display: flex; 
                            flex-direction: column; 
                            border-radius: 12px;
                            background-color: {{ $isPast ? '#f0f0f0' : '#ffffff' }};
                            opacity: {{ $isPast ? '0.7' : '1' }};
                        "
                    >
                        <div class="card-body d-flex justify-content-between align-items-center flex-wrap gap-3" style="border-radius: 12px 12px 0 0;">
                            <div>
                                <h5 class="mb-2" style="color: #FF5722; font-weight: bold;">{{ \Carbon\Carbon::parse($match->datetime)->format('d/m/Y H:i') }}</h5>
                                <p class="mb-0" style="font-size: 1.2rem; color:black; !important">{{ $match->against }} x Laravel FC</p>
                            </div>
                            <a 
                                href="{{ $isPast ? '#' : url('/lineup/' . $match->id) }}" 
                                class="btn btn-lg {{ $isPast ? 'btn-secondary' : '' }}" 
                                style="{{ $isPast ? 'pointer-events: none; cursor: default;' : 'background-color: #FF5722; color:white; font-weight: bold;' }}"
                                {{ $isPast ? 'disabled' : '' }}
                            >Escalação</a>
                        </div>
                        <div class="card-footer bg-transparent border-0 d-flex justify-content-end" style="border-radius: 0 0 12px 12px;">
                            <a 
                                href="{{ $isPast ? '#' : url('/deleteMatch/' . $match->id) }}" 
                                class="btn btn-sm {{ $isPast ? 'btn-outline-secondary' : 'btn-outline-danger' }} rounded-pill" 
                                style="{{ $isPast ? 'pointer-events: none; cursor: default;' : '' }}"
                                {{ $isPast ? 'disabled' : '' }}
                            >Excluir</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>

@endsection
