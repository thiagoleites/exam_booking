<?php

namespace App\Http\Controllers;

use App\Models\{Agente, Exame, Functions, Pessoa, Unidade};
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $params = [];

        $params['pessoasCount']  = Pessoa::count();
        $params['agentesCount']  = Agente::count();
        $params['unidadesCount'] = Unidade::count();
        $params['examesCount']   = Exame::count();
        $params['agentes']       = Agente::orderBy('id')->limit(5)->get();
        $params['pessoas']       = Pessoa::orderBy('id')->limit(5)->get();

        return view('admin.dashboard', ['params' => $params]);
    }
}
