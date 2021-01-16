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


