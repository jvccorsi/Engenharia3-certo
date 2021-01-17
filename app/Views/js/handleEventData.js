"use strict";
$('body').ready(() => {

    // Evento para o modal de cadastro de eventos
    $('button#add-event').on('click', () => {
        $('#modal-manter-evento .titulo').html("<b>Cadastrar evento</b>");

        // Limpa o formulário
        const modal = $('#modal-manter-evento');
        modal.find('#name').val('');
        modal.find('#adress').val('')
        modal.find('#date').val('')
        modal.find('#price').val('')
        modal.find('#qntPeople').val('')
        modal.find('#description').val('')
    }); 

    // Evento para o modal de edição de eventos
    $('a.edit-link').on('click', () => {
        $('.modal .titulo').html("<b>Editar evento</b>");
        const http = new XMLHttpRequest();

        const idEvento = document.querySelector('#modal-manter-evento .id-evento').value;
        console.log(idEvento);

        const url = `/Engenharia3-certo/app/Controllers/events/find.php?id_evento=${idEvento}`;
        http.open("GET", url, true);
        http.send();
        http.onload = function () {
            try {
                const user = JSON.parse(http.response);

                if(Object.keys(user).length > 0) {
                    const modal = $('#modal-manter-evento');
                    // Insere os dados do evento no formulário 
                    modal.find('#name').val(user['nome_evento']);
                    modal.find('#pais').val(user['pais']);
                    modal.find('#cep').val(user['cep']);
                    modal.find('#state').val(user['estado']);
                    modal.find('#city').val(user['cidade']);
                    modal.find('#street').val(user['rua']);
                    modal.find('#bairro').val(user['bairro']);
                    modal.find('#n_local').val(user['numero']);
                    modal.find('#date').val(user['data_evento']);
                    modal.find('#qntPeople').val(user['qtd_pessoas']);
                    modal.find('#description').val(user['descricao_evento']);
                }
            } catch (err) {
                alert(err.message);
            }
        }
    });

    const eventActions = document.querySelectorAll('.actions-column .action');
    // Adicionar o ID do evento para seus respectivos modais
    eventActions.forEach((elem) => {
        let idEvento = elem.getAttribute('data-whatever');
        elem.addEventListener('click', () => {
            const modal = elem.getAttribute('data-target');
            document.querySelector(modal + ' .id-evento').value = idEvento;
        });
    });
});