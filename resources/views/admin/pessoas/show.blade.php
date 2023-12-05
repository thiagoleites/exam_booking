<div class="modal fade" id="showPeopleModal{{ $ddPessoa->id }}" tabindex="-1" role="dialog"
     aria-labelledby="showPeopleModal" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Cadastro - {{ $ddPessoa->id }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="row">

                    <div class="col-md-4 d-flex align-items-center justify-content-center">
                        <div class="d-flex justify-content-center align-items-center flex-column gap-3">
                            <img
                                src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $ddPessoa->nome }}"
                                alt=""
                                style="width: 100px; height: 100px"
                                class="rounded-circle"
                            />
                            <div class="ms-3">
                                <p class="fw-bold text-center">{{ $ddPessoa->nome }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="card-body p-4">
                            <h6>Informações</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Nome da mãe</h6>
                                    <p class="text-muted">{{ $ddPessoa->nome_mae }}</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Telefone</h6>
                                    <p class="text-muted">{{ $ddPessoa->telefone }}</p>
                                </div>
                            </div>
                            <h6>Exames Marcados</h6>
                            <hr class="mt-0 mb-4">
                            <div class="row pt-1">
                                <div class="col-6 mb-3">
                                    <h6>Exame 1</h6>
                                    <p class="text-muted">11/11/2025 - Exame exemplo</p>
                                </div>
                                <div class="col-6 mb-3">
                                    <h6>Most Viewed</h6>
                                    <p class="text-muted">Dolor sit amet</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-start">
                                <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                                <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
