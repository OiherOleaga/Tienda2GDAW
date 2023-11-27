/* The code block is adding an event listener to each element with the class name "inputs" in the
document. When the input event is triggered (e.g., when the user types into an input field), the
function inside the event listener is executed. */
for (let input of document.getElementsByClassName("inputs")) {
    input.addEventListener("input", function () {
        if (this.getAttribute("value1") === this.value) {
            this.removeAttribute("name")
        } else {
            this.setAttribute("name", this.id);
        }
    })
}
let categorias = document.getElementsByClassName("categorias")
let hiddenCategoreiasTodas = document.getElementsByClassName("categoriaTodas")
let hiddenCategoreiasCambiadas = document.getElementsByClassName("categoriaCambio")

/* This code block is adding event listeners to each element in the `categorias` array. */
for (let i = 0; i < categorias.length; i++) {
    categorias[i].addEventListener("click", function () {
        if (this.checked === this.defaultChecked) {
            hiddenCategoreiasCambiadas[i].removeAttribute("name")
        } else {
            hiddenCategoreiasCambiadas[i].setAttribute("name", this.getAttribute("n"));
        }
        hiddenCategoreiasTodas[i].value = this.checked + "," + this.id;
    })
    hiddenCategoreiasTodas[i].value = categorias[i].checked + "," + categorias[i].id;
}