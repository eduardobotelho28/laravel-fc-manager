@extends('layouts/main_layout')

@section('content')

    <div class="min-vh-100 d-flex align-items-center justify-content-center bg-dark text-white">
        <div class="w-100" style="max-width: 420px;">
            <div class="text-center mb-4">
                <h1 class="fw-bold" style="color: #FF5722;">LaravelFC!</h1>
            </div>

            <div class="card shadow-lg border-0" style="background-color: #1e1e1e;">
                <div class="card-body p-4">
                    <h4 class="mb-4 text-center" style="color: #FF5722;">Entrar</h4>

                    <form method="POST" action="{{url('/loginSubmit')}}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input 
                                name="email"
                                id="email" 
                                class="form-control bg-dark text-white border-secondary" 
                                value="{{ old('email') }}"
                                autofocus
                            >
                            @error('email')
                                <div style="color:#FF5722">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Senha</label>
                            <input 
                                type="password" 
                                name="password" 
                                id="password" 
                                class="form-control bg-dark text-white border-secondary" 
                            >
                            @error('password')
                                <div style="color: #FF5722">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid">
                            <button type="submit" class="btn btn-lg" style="background-color: #FF5722; color: #fff;">
                                Entrar
                            </button>
                        </div>
                    </form>

                    @if(session('loginError'))
                        <div class="text-center" style="color: #FF5722">
                            {{ session('loginError') }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
