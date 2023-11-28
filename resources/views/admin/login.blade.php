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
                           placeholder="Digite sua senha">
                </div>

                <button type="submit" class="w-100 btn btn-primary py-3 my-4" id="send_login">
                    Logar
                </button>
            </form>
        </div>
    </main>

    @push('scripts')
        <script>
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function () {


                $('#send_login').on('click', function (e) {
                    e.preventDefault();
                    let form = $(this).closest('form');
                    // let url = form.attr('action');
                    let url = typeof form.attr('action') ? form.attr('action') : '';
                    let data = form.serialize();

                    $.ajax({
                        url: url,
                        type: 'POST',
                        data: data,
                        dataType: 'json',
                        beforeSend: function () {
                            $('#send_login').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>');
                        },
                        success: function (response) {
                            if (response.status === 'success') {
                                toast_alert(response.message, 'success');
                                time_hide($('#send_login'), 2000, '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span><span role="status"> Aguarde ...</span>');
                                setTimeout(function(){
                                    window.location.href = response.redirect;
                                }, 7000);
                            } else {
                                time_hide($('#send_login'), 3000, 'Logar');
                                toast_alert(response.message, 'danger');
                            }
                        },
                        error: function (jqXHR, textStatus, errorThrown) {
                            time_hide($('#send_login'), 3000, 'Logar');
                            toast_alert('Erro na requisição: ' + textStatus + errorThrown, 'error');
                        }
                    });
                });
            });

            function toast_alert(message, type, type_message = '') {
                switch (type) {
                    case 'success':
                        type_message = 'Sucesso';
                        break;
                    case 'info':
                        type_message = 'Informação';
                        break;
                    case 'warning':
                        type_message = 'Atenção';
                        break;
                    case 'danger':
                        type_message = 'Erro';
                        break;
                }

                const toastElement = $(
                    '<div class="toast" role="alert" aria-live="assertive" aria-atomic="true">' +
                    '<div class="toast-header">' +
                    `<strong class="me-auto"> ${type_message} </strong>` +
                    '<small>agora</small></div>'
                );
                toastElement.addClass(`bg-${type} text-white position-absolute top-1 end-1`);
                const toastBody = $('<div class="toast-body px-3 text-center">').text(message);

                toastElement.append(toastBody);
                $('body').append(toastElement);
                toastElement.toast({delay: 5000}).toast('show');
            }

            function time_hide(item, tempo, mensagem) {
                setTimeout(function () {
                    item.html(mensagem);
                }, tempo);
            }
        </script>
    @endpush
</x-app-layout>
