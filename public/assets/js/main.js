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

    //People page
    //Show modal
    $('#btnCreatePeopleModal').on('click', function(e){
        e.preventDefault();
        $('#createPeopleModal').modal('toggle');
    });
});
