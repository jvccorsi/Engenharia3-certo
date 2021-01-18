"use strict";
$('body').ready(() => {

    // Evento para o modal de cadastro de eventos
    $('button#add-event').on('click', () => {
        $('#modal-manter-evento .titulo').html("<b>Cadastrar evento</b>");
        
        // Limpa o formulário
        const modal = $('#modal-manter-evento');
        modal.find('#name').val("");
        modal.find('#pais').val("");
        modal.find('#cep').val("");
        modal.find('#state').val("");
        modal.find('#city').val("");
        modal.find('#street').val("");
        modal.find('#bairro').val("");
        modal.find('#n_local').val("");
        modal.find('#date').val("");
        modal.find('#qntPeople').val("");
        modal.find('#description').val("");

    });

    // $('a.edit-link').on('click', () => {

    // document.getElementById("contact-form").action = "../../Controllers/events/editar_evento.php";

    // });
    // Evento para o modal de edição de eventos
    $('a.edit-link').on('click', () => {
        $('.modal .titulo').html("<b>Editar evento</b>");

        document.getElementById("teste").action = "../../Controllers/events/editar_evento.php";

        ClearFields();
        const http = new XMLHttpRequest();

        let idEvento = document.querySelector('#modal-manter-evento .id-evento').value;
        idEvento = "";

        const url = `/Engenharia3-certo/app/Controllers/events/find.php?id_evento=${idEvento}`;
        http.open("GET", url, true);
        http.send();
        http.onload = function () {
            try {

                const user = JSON.parse(http.response);

                if (Object.keys(user).length > 0) {
                    LoadDatasEditEvent();
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
                } else {
                    LoadDatasEditEvent();
                }
            } catch (err) {
                alert(err.message);
            }
        }
    });


    function ClearFields() {

        const modal = $('#modal-manter-evento');
        // Insere os dados do evento no formulário 
        modal.find('#name').val("");
        modal.find('#pais').val("");
        modal.find('#cep').val("");
        modal.find('#state').val("");
        modal.find('#city').val("");
        modal.find('#street').val("");
        modal.find('#bairro').val("");
        modal.find('#n_local').val("");
        modal.find('#date').val("");
        modal.find('#qntPeople').val("");
        modal.find('#description').val("");

    }

    function LoadDatasEditEvent() {

        const http = new XMLHttpRequest();

        const idEvento = document.querySelector('#modal-manter-evento .id-evento').value;

        const url = `/Engenharia3-certo/app/Controllers/events/find.php?id_evento=${idEvento}`;
        http.open("GET", url, true);
        http.send();
        http.onload = function () {

            try {
                const user = JSON.parse(http.response);

                if (Object.keys(user).length > 0) {
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
                    modal.find('#qnt_people').val(user['qtd_pessoas']);
                    modal.find('#description').val(user['descricao_evento']);
                }
            } catch (err) {
                alert(err.message);
            }
        }
    }

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