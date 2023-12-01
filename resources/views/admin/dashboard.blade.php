<x-app-layout>

    <main class="dash-panel d-flex flex-nowrap">

        @include('layouts.sidebar')

        <div class="b--divider b-divider-vr"></div>
        <div class="content">
            <div class="p-3 w-100">
                <section>
                    <h1 class="px-3">Dashboard</h1>
                </section>

                <hr>

                <div class="container-fluid">
                    <div class="row ">
                        <div class="col-xl-6 col-lg-6">
                            <div class="card l-bg-cherry">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-shopping-cart"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Total de Pessoas Cadastradas</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0" id="totalPessoas">
                                                {{ $params['pessoasCount'] }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span id="percentageChangeP"></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-barP l-bg-cyan" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card l-bg-blue-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-users"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Total de Exames</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0" id="totalExames">
                                                {{ $params['examesCount'] }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span id="percentageChangeE"></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-barE l-bg-green" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card l-bg-green-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-ticket-alt"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Total de Agentes</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0" id="totalAgentes">
                                                {{ $params['agentesCount'] }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span id="percentageChangeA"></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-barA l-bg-orange" role="progressbar" data-width="25%"
                                             aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 25%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6">
                            <div class="card l-bg-orange-dark">
                                <div class="card-statistic-3 p-4">
                                    <div class="card-icon card-icon-large"><i class="fas fa-dollar-sign"></i></div>
                                    <div class="mb-4">
                                        <h5 class="card-title mb-0">Total de Unidades de Saúde</h5>
                                    </div>
                                    <div class="row align-items-center mb-2 d-flex">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0" id="totalUnidades">
                                                {{ $params['unidadesCount'] }}
                                            </h2>
                                        </div>
                                        <div class="col-4 text-right">
                                            <span id="percentageChangeU"></span>
                                        </div>
                                    </div>
                                    <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                        <div class="progress-barU l-bg-cyan" role="progressbar" data-width="100%"
                                             aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"
                                             style="width: 100%;"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h3 class="mt-3 mb-4">Lista de pessoas cadastradas</h3>
                            <x-table.index>
                                <x-table.thead>
                                    <x-table.tr>
                                        <x-table.th>Nome</x-table.th>
                                        <x-table.th>CPF</x-table.th>
                                        <x-table.th>DN</x-table.th>
                                        {{--                                            <x-table.th>UBS</x-table.th>--}}
                                        {{--                                            <x-table.th>Ações</x-table.th>--}}
                                    </x-table.tr>
                                </x-table.thead>
                                <x-table.tbody>
                                    @foreach($params['pessoas'] as $ddPessoa)

                                        <x-table.tr>
                                            <x-table.td>
                                                <div class="d-flex align-item-center">
                                                    <img
                                                        src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $ddPessoa->nome }}"
                                                        alt=""
                                                        style="width: 45px; height: 45px"
                                                        class="rounded-circle"
                                                    />
                                                    @php
                                                        $fullName = $ddPessoa->nome;
                                                        $part = explode(' ', $fullName);
                                                        $firstName = array_shift($part);
                                                        $lastName = array_pop($part);
                                                    @endphp
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">{{ $firstName }}</p>
                                                        <p class="text-muted mb-0">{{ $lastName }}</p>
                                                    </div>
                                                </div>
                                            </x-table.td>
                                            <x-table.td>
                                                <p class="fw-normal mb-1">{{ $ddPessoa->cpf }}</p>
                                                <p class="text-muted mb-0 small">CPF/CNS</p>
                                            </x-table.td>
                                            <x-table.td>{{ $ddPessoa->data_nascimento }}</x-table.td>
                                        </x-table.tr>
                                    @endforeach
                                </x-table.tbody>
                            </x-table.index>
                        </div>
                        <div class="col-md-6 col-lg-6 col-xl-6">
                            <h3 class="mt-3 mb-4">Lista de Agentes cadastradas</h3>
                            <x-table.index>
                                <x-table.thead>
                                    <x-table.tr>
                                        <x-table.th>Nome</x-table.th>
                                        <x-table.th>CPF</x-table.th>
                                        <x-table.th>Micro</x-table.th>
                                    </x-table.tr>
                                </x-table.thead>
                                <x-table.tbody>
                                    @foreach($params['agentes'] as $ddAgente)
                                        <x-table.tr>
                                            <x-table.td>
                                                <div class="d-flex align-item-center">
                                                    <img
                                                        src="https://ui-avatars.com/api/?background=random&color=fff&name={{ $ddAgente->nome }}"
                                                        alt=""
                                                        style="width: 45px; height: 45px"
                                                        class="rounded-circle"
                                                    />
                                                    @php
                                                        $fullName = $ddAgente->nome;
                                                        $part = explode(' ', $fullName);
                                                        $firstName = array_shift($part);
                                                        $lastName = array_pop($part);
                                                    @endphp
                                                    <div class="ms-3">
                                                        <p class="fw-bold mb-1">{{ $firstName }}</p>
                                                        <p class="text-muted mb-0">{{ $lastName }}</p>
                                                    </div>
                                                </div>
                                            </x-table.td>
                                            <x-table.td>
                                                <p class="fw-normal mb-1">{{ $ddAgente->cpf }}</p>
                                                <p class="text-muted mb-0 small">CPF/CNS</p>
                                            </x-table.td>
                                            <x-table.td>{{ $ddAgente->micro_area }}</x-table.td>
                                        </x-table.tr>
                                    @endforeach
                                </x-table.tbody>
                            </x-table.index>
                            <div id="populacaoBocaDaMata"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

    @push('scripts')
        <script>
            $(function () {
                // Valores totais esperados
                var allAgentes = 68;
                var allPopulacao = 27890; //Provisório - implementar consulta no ibge
                var allExames = 150;
                var allUnidades = 11;

                // Obtenha os totais específicos para cada campo
                var totalPessoas = parseInt($('#totalPessoas').text());
                var totalExames = parseInt($('#totalExames').text());
                var totalUnidades = parseInt($('#totalUnidades').text());
                var totalAgentes = parseInt($('#totalAgentes').text());

                // Atualize as porcentagens para cada campo
                updatePercentage(totalAgentes, allAgentes, 'progress-barA', 'percentageChangeA');
                updatePercentage(totalPessoas, allPopulacao, 'progress-barP', 'percentageChangeP');
                updatePercentage(totalExames, allExames, 'progress-barE', 'percentageChangeE');
                updatePercentage(totalUnidades, allUnidades, 'progress-barU', 'percentageChangeU');

                // Função genérica para atualizar a porcentagem e a barra de progresso
                function updatePercentage(total, totalEsperado, progressBarClass, percentageChangeId) {
                    var percentage = (total / totalEsperado) * 100;
                    $('.' + progressBarClass).css('width', percentage + '%');
                    $('#' + percentageChangeId).html(percentage.toFixed(2) + '% <i class="fa fa-arrow-up"></i>');
                }
            });

        </script>

    @endpush
</x-app-layout>
