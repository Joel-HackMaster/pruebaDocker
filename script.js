const body = document.body;
const caja = document.querySelector(".contraer");
const texto = document.querySelector(".cerrar")

function openSidebar() {
    texto.classList.toggle("cerrar");
}

caja.addEventListener("click", openSidebar);