<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\{Auth, Session};

class AuthController extends Controller
{
    public function login(): View
    {
        return view('admin.login');
    }

    public function attempt(Request $request)
    {
        $json = [];

        if (in_array('', $request->only('email', 'password'))) {
            $json['message'] = 'Por favor, preencha todos os campos';
            $json['status']  = 'error';

            return response()->json($json);
        }

        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            $json['message'] = 'Por favor, insira um email válido';
            $json['status']  = 'error';

            return response()->json($json);
        }

        $credentials = [
            'email'    => $request->get('email'),
            'password' => $request->get('password'),
        ];

        if (Auth::attempt($credentials)) {
            Session::regenerateToken();
            $json['message']  = 'Login efetuado com sucesso';
            $json['status']   = 'success';
            $json['redirect'] = route('admin.dashboard');

            return response()->json($json);
        } else {
            $json['message'] = 'Email ou senha incorretos';
            $json['status']  = 'error';

            return response()->json($json);
        }

    }

    public function logout()
    {
        Auth::logout();
        Session::regenerateToken();

        return redirect()->route('admin.login');
    }

    public function dashboard(): View
    {
        return view('admin.dashboard');
    }
}
