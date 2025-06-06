@extends('layouts/main_layout')

@section('content')
<div style="background-color: #272B30; min-height: 100vh; padding: 2rem; color: white;">
    <div style="max-width: 1200px; margin: auto;">
        
        <h2 style="margin-bottom: 2rem;">🏆 Títulos do Laravel FC</h2>

        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 1.5rem;">
            
            {{-- Título 1 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Copa Salvadores - 2006</h3>
                <p>Uma campanha memorável onde o Laravel FC superou todas as expectativas. Com gols históricos e viradas épicas, o time eternizou seu nome no cenário regional.</p>
            </div>

            {{-- Título 2 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Copa Salvadores - 2010</h3>
                <p>Quatro anos após a primeira conquista, o time voltou mais forte e técnico. Venceu a final por 3x0 em uma atuação impecável que entrou para a história da competição.</p>
            </div>

            {{-- Título 3 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Copa Internacional - 2006</h3>
                <p>A primeira conquista internacional veio em uma competição desafiadora contra equipes de renome. Laravel FC brilhou e levantou a taça com orgulho e raça.</p>
            </div>

            {{-- Título 4 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Campeonato Nacional - 1975</h3>
                <p>O primeiro título nacional do clube, conquistado com um futebol coletivo e disciplinado. Um marco que transformou a história do Laravel FC.</p>
            </div>

            {{-- Título 5 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Campeonato Nacional - 1976</h3>
                <p>O bicampeonato veio com garra e superação. O time se reinventou e mostrou que a conquista anterior não foi acaso.</p>
            </div>

            {{-- Título 6 --}}
            <div style="background-color: #333; border-radius: 10px; padding: 1.5rem;">
                <h3 style="color: #FF5722;">Campeonato Nacional - 1979</h3>
                <p>Após uma breve pausa, o time voltou a brilhar nacionalmente. A campanha de 79 ficou marcada pela melhor defesa do campeonato e um ataque fulminante.</p>
            </div>

        </div>

        {{-- Botão voltar para a home --}}
        <div style="margin-top: 2rem;">
            <a href="{{ url('/') }}" style="background-color: #FF5722; padding: 0.75rem 1.5rem; border-radius: 8px; color: white; text-decoration: none; font-weight: bold;">
                ← Voltar
            </a>
        </div>

    </div>
</div>
@endsection
