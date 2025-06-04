@extends('layouts/main_layout')

@section('content')

<div class="min-vh-100 d-flex flex-column bg-dark text-white">

    {{-- Header completo: logo, descrição e botão logout alinhados horizontalmente --}}
    <header class="p-4 border-bottom border-secondary">
        <div class="d-flex justify-content-between align-items-center flex-wrap">

            {{-- Logo + nome + descrição tudo junto --}}
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

            {{-- Botão logout alinhado à direita --}}
            <a href="/logout" class="btn btn-outline-light btn-sm mt-3 mt-md-0">Logout</a>
        </div>
    </header>

    {{-- Conteúdo central com botões --}}
    <main class="flex-grow-1 d-flex flex-column align-items-center justify-content-center text-center px-3">
        <div class="d-grid gap-4 w-100" style="max-width: 360px;">
            <a href="/jogadores" class="btn btn-lg fw-bold text-white shadow" style="background-color: #FF5722; padding: 1.2rem;">
                Gerenciar Jogadores
            </a>
            <a href="/partidas" class="btn btn-lg fw-bold text-white shadow" style="background-color: #FF5722; padding: 1.2rem;">
                Gerenciar Partidas
            </a>
            <a href="/titulos" class="btn btn-lg fw-bold text-white shadow" style="background-color: #FF5722; padding: 1.2rem;">
                Ver Títulos
            </a>
        </div>
    </main>

    {{-- Footer --}}
    <footer class="text-center py-3 border-top border-secondary text-secondary">
        &copy; {{ date('Y') }} LaravelFC. Todos os direitos reservados.
    </footer>

</div>

@endsection
