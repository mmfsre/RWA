require('./bootstrap');

import PureCounter from "@srexi/purecounterjs";
const pure = new PureCounter();

// #id01 #id02 - LOGIN/REGISTER forma početna (Mihaela) - Trenutno se ne koristi //

var modal = document.getElementById('id01');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

var modal = document.getElementById('id02');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}