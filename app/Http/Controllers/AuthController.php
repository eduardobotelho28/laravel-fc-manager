<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

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

        $email = $request->input('email');
        $password = $request->input('password');

        $user = User::where('email', $email)
                    ->where('deleted_at', null)
                    ->first();

        if(!$user) {
            return redirect()->back()->withInput()->with('loginError', 'Email ou Senha incorretos');
        }

        if(!password_verify($password, $user->password)) {
            return redirect()->back()->withInput()->with('loginError', 'Email ou Senha incorretos');
        }

        session([
            'user' => [
                'id' => $user->id,
                'email' => $user->email
            ]
        ]);


        echo 'lgin com sucesso';

    }

    public function logout () 
    {
        session()->forget('user');
        return redirect()->to('/login');
    }

}
