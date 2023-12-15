// CSRF Token config.
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

//Toast function
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

//Time message
function time_hide(item, tempo, mensagem) {
    setTimeout(function () {
        item.html(mensagem);
    }, tempo);
}

$(function () {
    // Login
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
                    setTimeout(function () {
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

    //-People Manager-//
    //Show modal create
    $('#btnCreatePeopleModal').on('click', function (e) {
        e.preventDefault();
        $('#createPeopleModal').modal('toggle');
    });

    //Update People
    $('form[name="formPeopleUpdate"]').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var url = typeof form.attr('action') ? form.attr('action') : '0';
        var data = form.serialize();

        $.ajax({
            type: 'PATCH',
            url: url,
            data: data,
            success: function (response) {
                $(".modal").hide();
                toast_alert(response.message, 'success');
                setTimeout(function () {
                    window.location.href = response.redirect;
                }, 4000);
            }
        });
    });

    //Delete People
    $('form[name="formPeopleDelete"]').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var url = typeof form.attr('action') ? form.attr('action') : '0';
        var dataId = form.data('id');

        $.ajax({
            type: 'DELETE',
            url: url,
            data: dataId,
            success: function (response) {
                toast_alert(response.message, 'success');
                setTimeout(function () {
                    window.location.href = response.redirect;
                }, 2000);
            }
        });
    });


    //Search People
    $('form[name="formSearchPeople"]').submit(function (e) {
        e.preventDefault();

        var form = $(this);
        var search = form.find('input[name="search"]').val();

        $.ajax({
            type: 'GET',
            url: "/admin/buscar-pessoas",
            data: {search: search},
            success: function (data) {
                // console.log(data);
                $(".peopleTable tbody").empty();

                $.each(data, function (index, pessoa) {
                    // console.log(pessoa.nome);

                    $("#tbodyPessoas").append(
                        '<tr>' +
                        ' <td>' + pessoa.nome + '</td>' +
                        ' <td>' + pessoa.cpf + '</td>' +
                        ' <td>' + pessoa.data_nascimento + '</td>' +
                        ' <td>' + pessoa.unidade_id + '</td>' +
                        ' <td>' + '<a href="/admin/pessoas/' + pessoa.id + '/edit" class="btn btn-primary btn-sm">Editar</a>' +
                        ' <form action="/admin/pessoas/' + pessoa.id + '" method="POST" class="d-inline" name="formPeopleDelete" data-id="' + pessoa.id + '">' +
                            ' <input type="hidden" name="_method" value="DELETE">' +
                            ' <button type="submit" class="btn btn-danger btn-sm">Excluir</button>' +
                        ' </form>' +
                        ' </td>' +
                        '</tr>');
                });
            },
            error: function (error) {
                console.error("Erro na busca: " + error);
            }

        });
    });
});
