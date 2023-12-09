<div class="modal fade" id="editPeopleModal{{$ddPessoa->id}}" tabindex="-1" role="dialog" aria-labelledby="editPeopleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Atualizar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="formPeopleUpdate" action="{{ route('admin.pessoas.update.do', ['id' => $ddPessoa->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="row">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome"  value="{{ $ddPessoa->nome }}">
                        </div>

                        <div class="mb-3">
                            <label for="mother" class="form-label">Nome da Mãe</label>
                            <input type="text" name="nome_mae" class="form-control" id="mother" value="{{ $ddPessoa->nome_mae }}">
                        </div>

                        <div class="mb-3">
                            <label for="ubs">Unidade de Saúde</label>
                            <select name="unidade_id" id="ubs" class="form-select">
                                @foreach($arrUnidades as $ddUnidade)
                                    <option value="{{ $ddUnidade->id }}" {{ $ddUnidade->id === $ddPessoa->unidade_id ? 'selected' : '' }}>{{ $ddUnidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="agente">Agente de Saúde</label>
                            <select name="unidade_id" id="agente" class="form-select">
                                @foreach($arrAgentes as $ddAgente)
                                    <option value="{{ $ddAgente->id }}" {{ $ddAgente->id === $ddPessoa->agente_id ? 'selected' : '' }}>{{ $ddAgente->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" value="{{ $ddPessoa->cpf }}">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" class="form-control" id="nascimento" value="{{ $ddPessoa->data_nascimento }}">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" id="telefone" value="{{ $ddPessoa->telefone }}">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select" id="status">
                                <option value="1" {{ $ddPessoa->status === 1 ? 'selected' : ''}}>Ativo</option>
                                <option value="0" {{ $ddPessoa->status === 0 ? 'selected' : ''}}>Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-primary" id="btnUpdateModal">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
