<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use App\Models\Exame;
use App\Models\Pessoa;
use App\Models\Unidade;
use Illuminate\Http\Request;
use App\Models\Functions;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $params = [];

        $params['pessoasCount'] = Pessoa::count();
        $params['agentesCount'] = Agente::count();
        $params['unidadesCount'] = Unidade::count();
        $params['examesCount'] = Exame::count();

        return view('admin.dashboard', ['params' => $params]);
    }
}
