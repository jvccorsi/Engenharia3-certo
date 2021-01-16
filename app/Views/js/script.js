"use strict";
$(document).ready(() => {
	// Test for placeholder support
    $.support.placeholder = (() => {
        var i = document.createElement('input');
        return 'placeholder' in i;
    })();

    // Hide labels by default if placeholders are supported
    if($.support.placeholder) {
        $('.form-label').each(() => {
            $(this).addClass('js-hide-label');
        });  

        // Code for adding/removing classes here
        $('.form-group').find('input, textarea').on('keyup blur focus', (e) => {
            // Cache our selectors
            var $this = $(this);
            $label = $this.parent().find("label");
					
            switch(e.type) {
                case 'keyup': 
                    $label.toggleClass('js-hide-label', $this.val() == '');
                    break;
                
                case 'blur': 
                    if( $this.val() == '' ) {
                        $label.addClass('js-hide-label');
                    } else {
                        $label.removeClass('js-hide-label').addClass('js-unhighlight-label');
                    }
                    break;
                
                case 'focus': 
                    if( $this.val() !== '' ) {
                        $label.removeClass('js-unhighlight-label');
                    }
                    break;
                 
                default: break;
            }
        });
    }
 
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
});

