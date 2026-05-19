<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function auth(Request $request)
    {
        $rules = [
            'email' => 'required|email:rfc,dns',
            'password' => 'required|string|max:16|min:8'
        ];

        $messages = [
            'required' => 'O campo :attribute é obrigatório',
            'email.email' => 'O email digitado não é válido',
            'password.string' => 'email ou senha inválidos',
            'password.max' => 'email ou senha inválidos',
            'password.min' => 'email ou senha inválidos',
        ];

        $credentials = $request->validate(
            $rules,
            $messages
        );

        $sucess = Auth::attempt($credentials);

        if ($sucess) {
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors([
            'email' => 'credenciais inválidas'
        ])->onlyInput('email');
    }
}
