

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