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
                        @include('admin.table')
                    </div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>
