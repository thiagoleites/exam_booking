<x-app-layout>

    <main class="dash-panel d-flex flex-nowrap">
        @include('layouts.sidebar')

        <div class="b--divider b-divider-vr"></div>


        <div class="p-3 w-100">
            <section>
                <h1 class="px-3">Pessoas</h1>
            </section>

            <hr>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-12">
                        <section class="w-100 border rounded-3 p-4 table-responsive">

                            <table class="table align-middle mb-0 bg-white">
                                <thead class="bg-light">
                                <tr>
                                    <th>Nome</th>
                                    <th>Documento</th>
                                    <th>Data Nascimento</th>
                                    <th>UBS</th>
                                    <th>Ações</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($arrPessoas as $ddPessoa)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img
                                                    {{--                                                    src="https://mdbootstrap.com/img/new/avatars/8.jpg"--}}
                                                    src="https://ui-avatars.com/api/?name={{ $ddPessoa->nome }}"
                                                    alt=""
                                                    style="width: 45px; height: 45px"
                                                    class="rounded-circle"
                                                />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">{{ $ddPessoa->nome }}</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">{{ $ddPessoa->cpf }}</p>
                                            <p class="text-muted mb-0">CPF</p>
                                        </td>
                                        <td>
                                            <span
                                                class="badge badge-success rounded-pill d-inline">{{ $ddPessoa->data_nascimento }}</span>
                                        </td>
                                        <td>{{ $ddPessoa->unidade->nome }}</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
