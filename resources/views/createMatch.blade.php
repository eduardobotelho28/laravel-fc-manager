@extends('layouts/main_layout')

@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: #272B30;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
        overflow-x: hidden; /* permite rolar verticalmente se necessário */
    }

    .form-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 2rem; /* isso ajuda em telas menores */
    }

    .form-card {
        background-color: #f9f9f9;
        border-radius: 12px;
        padding: 2rem;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        width: 100%;
        max-width: 460px;
    }

    .form-card h2 {
        color: #FF5722;
        font-weight: bold;
        margin-bottom: 1.5rem;
        text-align: center;
    }

    .form-card label {
        font-weight: 600;
        margin-bottom: 0.3rem;
    }

    .form-card input,
    .form-card select {
        font-size: 0.95rem;
        padding: 0.6rem;
        margin-bottom: 1rem;
    }

    .btn-orange {
        background-color: #FF5722;
        color: white;
        border: none;
        transition: background-color 0.2s ease-in-out;
    }

    .btn-orange:hover {
        background-color: #e64a19;
    }

    .btn-outline-light {
        border: 1px solid #bbb;
        color: #333;
        background-color: transparent;
    }

    .btn-outline-light:hover {
        background-color: #eee;
    }
</style>

<div class="form-container">
    <div class="form-card">
        <h2>Cadastrar Nova Partida</h2>
        <form method="POST" action="/createMatchSubmit">
            @csrf

            <div class="mb-3">
                <label for="datetime" class="form-label">Data da Partida</label>
                <input type="datetime-local" class="form-control" id="datetime" name="datetime" >
                @error('datetime')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="against" class="form-label">Contra qual Time?</label>
                <input type="text" class="form-control" id="against" name="against" >
                @error('against')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="/matches" class="btn btn-outline-light">Voltar</a>
                <button type="submit" class="btn btn-orange">Salvar</button>
            </div>
        </form>
    </div>
</div>

@endsection
