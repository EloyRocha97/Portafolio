// Función para crear un evento al clickear el "menu hamburguesa" :

document.querySelector(".barras-menu"). addEventListener("click", barraAnimada);

const linea1 = document.querySelector(".linea1");
const linea2 = document.querySelector(".linea2");
const linea3 = document.querySelector(".linea3");3

// const contenedor__menu = document.querySelector(".navbar-menu");

function barraAnimada() {
    linea1.classList.toggle("activelinea1");
    linea2.classList.toggle("activelinea2");
    linea3.classList.toggle("activelinea3");

    // contenedor__menu.classList.toggle("activemenu")
}



document.getElementById ("btn_menu").addEventListener("click", mostrar_menu);

nav = document.getElementById ("nav__barras");

function mostrar_menu(){
    nav.style.right = "0px";
}


