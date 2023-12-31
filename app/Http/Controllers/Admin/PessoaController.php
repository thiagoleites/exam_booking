<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StorePessoaRequest, UpdatePessoaRequest};
use App\Models\{Agente, Pessoa, Unidade};
use Illuminate\Contracts\View\View;
use Illuminate\Http\{JsonResponse, Request};

class PessoaController extends Controller
{
    /**
     * Display a listing of people.
     */
    public function index(): View
    {
        $arrPessoas  = Pessoa::listarPessoas(10);
        $arrUnidades = Unidade::all();
        $arrAgentes  = Agente::all();

        return view('admin.pessoas.index', [
            'arrPessoas'  => $arrPessoas,
            'arrUnidades' => $arrUnidades,
            'arrAgentes'  => $arrAgentes,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //        $exibirModal = true;
        //
        //        return view('admin.pessoas.create', compact('exibirModal'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        $validated = $request->validated();

        dd($validated);

    }

    /**
     * Display the specified resource.
     */
    public function show(Pessoa $pessoa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pessoa $pessoa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request): JsonResponse
    {
        Pessoa::findOrFail($request->id)->update($request->all());

        return response()->json([
            'message'  => 'Os dados foram atualizados!',
            'redirect' => route('admin.pessoas'),
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): JsonResponse
    {
        $people = Pessoa::find($id);
        $people->delete();

        return response()->json([
            'message'  => 'Os dados foram excluídos!',
            'redirect' => route('admin.pessoas'),
        ]);
    }

    public function buscarPessoas(Request $request)
    {
        $search  = $request->input('search');
        $pessoas = Pessoa::where('nome', 'like', "%{$search}%")
            ->orWhere('cpf', 'like', "%{$search}%")
            ->orWhere('nome_mae', 'like', "%{$search}%")
            ->orWhere('data_nascimento', 'like', "%{$search}%")
            ->orWhere('telefone', 'like', "%{$search}%")
            ->get();

        return response()->json($pessoas);
    }
}
