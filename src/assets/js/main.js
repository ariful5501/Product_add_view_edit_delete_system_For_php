let navMenuButtonOn = document.getElementById("navMenuButtonOn");
let navMenuButtonOff = document.getElementById("navMenuButtonOff");
let navContent = document.querySelector('#navContent');
function showMenu() {
    navContent.classList.toggle("hidden");
    navMenuButtonOn.classList.toggle("hidden");
    navMenuButtonOff.classList.toggle("hidden");
}