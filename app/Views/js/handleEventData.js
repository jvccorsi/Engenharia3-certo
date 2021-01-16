"use strict";
$('body').ready(() => {
    const http = new XMLHttpRequest();
    const url = "/Engenharia3-certo/app/Controllers/events/get_all.php";
    http.open("GET", url, true);
    http.send();
    
    http.onload = function () {
        try {
            let events = JSON.parse(http.response);

            if(events.length > 0) {
                let eventsTable = document.querySelector("#events-table");

                events.forEach((event, index) => {

                    let row = eventsTable.insertRow(index + 1);
                    let idColumn = row.insertCell(0);
                    let nameColumn = row.insertCell(1);
                    let eventDateColumn = row.insertCell(2);
                    let actionsColumn = row.insertCell(3);

                    idColumn.innerHTML = index + 1;
                    nameColumn.innerHTML = event['nome_evento'];
                    eventDateColumn.innerHTML = event['data_evento'];
                    actionsColumn.innerHTML = `
                        <div class="btn-group">
                            <a href="reports.php" title="Visualizar relatório" >
                                <img src="../assets/report.svg" class="img-actions">
                            </a>
                        </div>
                        <div class="btn-group">
                            <button type="button" id="dropdownCostsButton" title="Adicionar Custos" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/money.svg" alt="adicionar">
                            </button>
                            <div class="dropdown-menu" id="dropdownCostsButton" aria-labelledby="dropdownCostsButton">
                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-adicionar-custos-variaveis" href="#">Variável</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-adicionar-custos-fixos" href="#">Fixo</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" data-toggle="modal" data-target="#modal-adicionar-receita" href="#">Receita</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" id="dropdownEditButton" title="Editar evento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/gear.svg" class="img-actions">
                            </button>
                            <div class="dropdown-menu" id="dropdownEditButton" aria-labelledby="dropdownEditButton">
                                <a class="dropdown-item edit-link" data-toggle="modal" data-target="#modal-manter-evento" href="#">Editar</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#modal-excluir-evento">Excluir</a>
                            </div>
                        </div>
                    `
                    actionsColumn.classList.add('actions-column');
                })
            }
        } catch (err) {

            alert(err.message);
        }
    };

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