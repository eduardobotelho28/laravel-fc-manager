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
        <h2>Cadastrar Novo Jogador</h2>
        <form method="POST" action="{{ url('/createPlayerSubmit') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nome Completo</label>
                <input type="text" class="form-control" id="name" name="name" >
                @error('name')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="number" class="form-label">Número</label>
                <input type="number" class="form-control" id="number" name="number" >
                @error('number')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="birth" class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control" id="birth" name="birth" >
                @error('birth')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status Inicial</label>
                <select class="form-control" id="status" name="status">
                    <option value="titular">Titular</option>
                    <option value="reserva">Reserva</option>
                </select>
                @error('status')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="mb-4">
                <label for="position" class="form-label">Posição</label>
               <select class="form-select form-select-sm" id="position" name="position" >
                    <option value="goleiro">Goleiro</option>
                    <option value="lateral">Lateral</option>
                    <option value="zagueiro">Zagueiro</option>
                    <option value="libero">Líbero</option>
                    <option value="volante">Volante</option>
                    <option value="meio campo">Meio Campo</option>
                    <option value="ala">Ala</option>
                    <option value="ponta">Ponta</option>
                    <option value="centroavante">Centroavante</option>
                </select>
                  @error('position')
                    <div style="color:#FF5722">
                        {{$message}}
                    </div>
                @enderror
            </div>

            <div class="d-flex justify-content-between">
                <a href="{{ url('/players') }}" class="btn btn-outline-light">Voltar</a>
                <button type="submit" class="btn btn-orange">Salvar</button>
            </div>
        </form>
    </div>
</div>

@endsection
