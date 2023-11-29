<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Pessoa extends Model
{
    use HasFactory;

    protected $fillable = [
        'agente_id',
        'unidade_id',
        'nome',
        'cpf',
        'nome_mae',
        'data_nascimento',
        'telefone',
        'status',
    ];


    public function listarPessoas($per_page = 10, $search = null): object
    {

        return Pessoa::where('status', true)
            ->orderBy('nome', 'asc')
            ->paginate($per_page);
    }

    public function BuscarPessoas($search = null): object
    {
        $pessoas = [];

        if ($search) {
            $pessoas = Pessoa::where('nome', 'like', "%{$search}%")
                ->orWhere('cpf', 'like', "%{$search}%")
                ->orWhere('nome_mae', 'like', "%{$search}%")
                ->orWhere('data_nascimento', 'like', "%{$search}%")
                ->orWhere('telefone', 'like', "%{$search}%")
                ->get();
        }

        return $pessoas;
    }

    public function agente(): BelongsTo
    {
        return $this->belongsTo(Agente::class);
    }

    public function unidade(): BelongsTo
    {
        return $this->belongsTo(Unidade::class);
    }

    public function exames(): BelongsToMany
    {
        return $this->belongsToMany(Exame::class, 'exames', 'exame_id', 'id');
    }
}
