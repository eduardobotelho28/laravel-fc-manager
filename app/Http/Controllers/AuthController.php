<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    
    public function login () 
    {
        return view('login');
    }

    public function loginSubmit (Request $request) 
    {

        $request->validate(
            [
                'email'    => 'required|email',
                'password' => 'required|min:6|max:16'
            ],
            [
                'email.required'    => 'Email é obrigatório',
                'email.email'       => 'Email deve ser válido',
                'password.required' => 'Senha é obrigatória' ,
                'password.min'      => 'A senha deve ter no mínimo :min caracteres',
                'password.max'      => 'A senha deve ter no máximo :max caracteres'
            ]
        );

        try {
            DB::connection()->getPdo();
            echo 'tudo ok!';
        } catch (\PDOException $e) {
            echo $e->getMessage();
        }

        echo 'fim'; exit ; 
        
    }

    public function logout () 
    {
        echo 'logout';
    }

}
