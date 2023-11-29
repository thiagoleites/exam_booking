<?php

declare(strict_types = 1);

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\{StorePessoaRequest, UpdatePessoaRequest};
use App\Models\Pessoa;
use App\Models\Functions;
use Illuminate\Contracts\View\View;

class PessoaController extends Controller
{
    /**
     * Display a listing of people.
     */
    public function index(): View
    {
        $arrPessoas = Pessoa::listarPessoas(10);

        return view('admin.pessoas.index', [
            'arrPessoas' => $arrPessoas,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePessoaRequest $request)
    {
        //
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
    public function update(UpdatePessoaRequest $request, Pessoa $pessoa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pessoa $pessoa)
    {
        //
    }
}
