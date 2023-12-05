<div class="modal fade" id="createPeopleModal" tabindex="-1" role="dialog" aria-labelledby="createPeopleModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Adicionar nova pessoa</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form name="createPeopleForm" action="{{ route('admin.pessoas.create.do') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <label for="nome" class="form-label">Nome</label>
                            <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome">
                        </div>

                        <div class="mb-3">
                            <label for="mother" class="form-label">Nome da Mãe</label>
                            <input type="text" name="nome_mae" class="form-control" id="mother" placeholder="Nome">
                        </div>

                        <div class="mb-3">
                            <label for="ubs">Unidade de Saúde</label>
                            <select name="unidade_id" id="ubs" class="form-select">
                                @foreach($arrUnidades as $ddUnidade)
                                    <option value="{{ $ddUnidade->id }}">{{ $ddUnidade->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="agente">Agente de Saúde</label>
                            <select name="unidade_id" id="agente" class="form-select">
                                @foreach($arrAgentes as $ddAgente)
                                    <option value="{{ $ddAgente->id }}">{{ $ddAgente->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="cpf" class="form-label">CPF</label>
                            <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Nome">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="nascimento" class="form-label">Data de Nascimento</label>
                            <input type="date" name="data_nascimento" class="form-control" id="nascimento" placeholder="Nome">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="telefone" class="form-label">Telefone</label>
                            <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Nome">
                        </div>

                        <div class="mb-3 col-md-6">
                            <label for="status" class="form-label">Status</label>
                            <select name="status" class="form-select" id="status">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="btnCreatePeopleModal">Salvar</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>
