function getEvents() {
    const http = new XMLHttpRequest();
    const url = "/Engenharia3-certo/app/Controllers/events/find.php";
    http.open("GET", url, true);
    http.send();
    
    http.onload = function () {
        try {
            events = JSON.parse(http.response);

            if(events.length > 0) {
                let gameRankingTable = $("#events-table");

                events.forEach((game, index) => {
                    let row = gameRankingTable.insertRow(index + 1);
                    let idColumn = row.insertCell(0);
                    let nameColumn = row.insertCell(1);
                    let eventDateColumn = row.insertCell(2);

                    idColumn.innerHTML = index + 1;
                    nameColumn.innerHTML = game.name;
                    eventDateColumn.innerHTML = game.date;
                })
            }
        } catch (err) {

            alert(err.message);
        }
    };
}