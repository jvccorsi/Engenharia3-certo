"use strict";
$('body').ready(() => {
    setEventActionsForModals();
});

function setEventActionsForModals() {
    const eventActions = document.querySelectorAll('.actions-column .action');

    eventActions.forEach((elem) => {
        let idEvento = elem.getAttribute('data-whatever');
        elem.addEventListener('click', () => {
            const modal = elem.getAttribute('data-target');
            document.querySelector(modal + ' .id-evento').value = idEvento;
        });
    });
}

function getAllVariableCosts() {
    const http = new XMLHttpRequest();
    const url = "/Engenharia3-certo/app/Controllers/costs/get_all_variable.php";
    http.open("GET", url, true);
    http.send();

    http.onload = function () {
        try {
            let variableCosts = JSON.parse(http.response);

            if(variableCosts.length > 0) {
                let variableCostsTable = document.querySelector("#variable-costs-table");
                let finalVariableCost = 0;

                variableCosts.forEach((variableCost, index) => {

                    finalVariableCost += parseInt(variableCost['gasto_esperado']);

                    let row = variableCostsTable.insertRow(index + 1);

                    let idColumn = row.insertCell(0);
                    let nameColumn = row.insertCell(1);
                    let typeColumn = row.insertCell(2);
                    let unityColumn = row.insertCell(3);
                    let priceColumn = row.insertCell(4);
                    let expectedQuantityColumn = row.insertCell(5);
                    let expectedExpenseColumn = row.insertCell(6);
                    let observationsColumn = row.insertCell(7);

                    idColumn.innerText = index + 1;
                    nameColumn.innerText = variableCost['nome'];
                    typeColumn.innerText = variableCost['tipo_produto'];
                    unityColumn.innerText = variableCost['unidade'];
                    priceColumn.innerText = variableCost['preco'];
                    expectedQuantityColumn.innerText = variableCost['qtd_esperada'];
                    expectedExpenseColumn.innerText = `R$ ${variableCost['gasto_esperado']}`;
                    observationsColumn.innerText = variableCost['obsvar'];
                })

                $('#final-variable-cost-column').text(`R$ ${finalVariableCost}`);
            }
        } catch (err) {

            alert(err.message);
        }
    };
}

function getAllFixedCosts() {

    // Remove o onclick para carregar somente a primeira vez
    $('#fixed-costs-link').removeAttr('onclick');

    const http = new XMLHttpRequest();
    const url = "/Engenharia3-certo/app/Controllers/costs/get_all_fixed.php";
    http.open("GET", url, true);
    http.send();

    http.onload = function () {
        try {
            let fixedCosts = JSON.parse(http.response);

            if(fixedCosts.length > 0) {
                let fixedCostsTable = document.querySelector("#fixed-costs-table");
                let finalFixedCost = 0;

                fixedCosts.forEach((variableCost, index) => {

                    finalFixedCost += parseInt(variableCost['preco']);

                    let row = fixedCostsTable.insertRow(index + 1);

                    let idColumn = row.insertCell(0);
                    let itemColumn = row.insertCell(1);
                    let typeColumn = row.insertCell(2);
                    let priceColumn = row.insertCell(3);
                    let expectedSpendColumn = row.insertCell(4);
                    let observationsColumn = row.insertCell(5);

                    idColumn.innerText = index + 1;
                    itemColumn.innerText = variableCost['item'];
                    typeColumn.innerText = variableCost['tipo_custos'];
                    priceColumn.innerText = variableCost['preco'];
                    expectedSpendColumn.innerText = variableCost['gasto_final'];
                    observationsColumn.innerText = variableCost['obs'];
                })

                $('#final-fixed-cost-column').text(`R$ ${finalFixedCost}`);
            }
        } catch (err) {

            alert(err.message);
        }
    };
}
