@extends('layouts/main_layout')

@section('content')

<div class="min-vh-100 d-flex flex-column bg-dark text-white">

    <header class="p-4 border-secondary">
        <div class="d-flex justify-content-between align-items-center flex-wrap">

            <div class="d-flex align-items-center gap-3 flex-wrap">
                <i class="fas fa-futbol fa-2x" style="color: #FF5722;"></i>
                <div>
                    <h2 class="mb-0 fw-bold" style="color: #FF5722;">LaravelFC</h2>
                </div>
            </div>

            <p class="mb-0 text-secondary small">
                Um sistema de gerenciamento completo para o seu time!<br>
                Cadastre jogadores, controle partidas e acompanhe seus títulos com praticidade e estilo.
            </p>

            <a href="{{ url('/logout') }}" class="btn btn-outline-light btn-sm mt-3 mt-md-0">Logout</a>
        </div>
    </header>

    <main class="flex-grow-1 d-flex align-items-center justify-content-center text-center px-3">
        <div class="d-flex flex-wrap justify-content-center gap-5 mt-5">

            {{-- Card: Jogadores --}}
            <div class="card bg-secondary text-white shadow" style="width: 280px; border: none; border-radius: 16px;">
                <div class="card-body d-flex flex-column align-items-center py-4">
                    <a href="{{ url('/players') }}" class="btn fw-bold text-white w-100 mb-4" style="background-color: #FF5722; font-size: 1.1rem; padding: 0.75rem;">
                        Gerenciar Jogadores
                    </a>
                    <i class="fas fa-users fa-3x text-light"></i>
                </div>
            </div>

            {{-- Card: Partidas --}}
            <div class="card bg-secondary text-white shadow" style="width: 280px; border: none; border-radius: 16px;">
                <div class="card-body d-flex flex-column align-items-center py-4">
                    <a href="{{ url('/matches') }}" class="btn fw-bold text-white w-100 mb-4" style="background-color: #FF5722; font-size: 1.1rem; padding: 0.75rem;">
                        Gerenciar Partidas
                    </a>
                    <i class="fas fa-calendar-check fa-3x text-light"></i>
                </div>
            </div>

            {{-- Card: Títulos --}}
            <div class="card bg-secondary text-white shadow" style="width: 280px; border: none; border-radius: 16px;">
                <div class="card-body d-flex flex-column align-items-center py-4">
                    <a href="{{ url('/titles') }}" class="btn fw-bold text-white w-100 mb-4" style="background-color: #FF5722; font-size: 1.1rem; padding: 0.75rem;">
                        Ver Títulos
                    </a>
                    <i class="fas fa-trophy fa-3x text-light"></i>
                </div>
            </div>

        </div>
    </main>

    <footer class="text-center py-3 border-secondary text-secondary">
        &copy; {{ date('Y') }} LaravelFC. Todos os direitos reservados.
    </footer>

</div>

@endsection
