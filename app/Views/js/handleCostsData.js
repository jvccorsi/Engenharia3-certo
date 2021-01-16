"use strict";
$('body').ready(() => {
    const http = new XMLHttpRequest();
    const url = "/Engenharia3-certo/app/Controllers/costs/get_variable_costs.php";
    http.open("GET", url, true);
    http.send();
    
    http.onload = function () {
        try {
            let events = JSON.parse(http.response);

            if(events.length > 0) {
                let eventsTable = document.querySelector("#variable-costs-table");

                events.forEach((event, index) => {

                    let row = eventsTable.insertRow(index + 1);
                    let idColumn = row.insertCell(0);
                    let nameColumn = row.insertCell(1);
                    let eventDateColumn = row.insertCell(2);
                    let actionsColumn = row.insertCell(3);

                    idColumn.innerHTML = index + 1;
                    nameColumn.innerHTML = event['nome_evento'];
                    eventDateColumn.innerHTML = event['data_evento'];
                })
            }
        } catch (err) {

            alert(err.message);
        }
    };
});