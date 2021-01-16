"use strict";
$('body').ready(() => {

    

    // Evento para o modal de edição de eventos
    $('a.edit-link').on('click', () => {
        $('.modal .titulo').html("<b>Editar evento</b>");

        // Insere os dados do evento no formulário 
        const modal = $('#modal-manter-evento');
        modal.find('#name').val('teste');
        modal.find('#adress').val('teste')
        modal.find('#date').val('teste')
        modal.find('#price').val('teste')
        modal.find('#qntPeople').val('teste')
        modal.find('#description').val('teste')
    });  
});