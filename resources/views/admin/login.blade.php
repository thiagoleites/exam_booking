<x-app-layout>
    <main class="main_login w-100">
        <div class="login_form m-auto w-full rounded border">

            <section class="text-center mb-5">
                <h1 class="h2 mb-3 fw-bolder">Painel Administrativo</h1>
            </section>

            <form name="form_login" action="{{ route('admin.login.do') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label text-muted text-uppercase fw-bold">Email</label>
                    <input type="text" name="email" class="form-control py-3 px-3" id="email"
                           placeholder="Digite seu email" value="teste@example.com">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-muted text-uppercase fw-bold">Senha</label>
                    <input type="text" name="password" class="form-control py-3 px-3" id="password"
                           placeholder="Digite sua senha" value="123456">
                </div>

                <button type="submit" class="w-100 btn btn-primary py-3 my-4" id="send_login">
                    Logar
                </button>
            </form>
        </div>
    </main>
</x-app-layout>
