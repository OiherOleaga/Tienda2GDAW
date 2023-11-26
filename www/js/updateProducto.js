

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
let inputHidden = document.getElementsByClassName("categoriaHidden")

for (let i = 0; i < categorias.length; i++) {
    categorias[i].addEventListener("click", function () {
        if (this.checked === this.defaultChecked) {
            this.removeAttribute("name")
        } else {
            this.setAttribute("name", this.getAttribute("n"));
        }
        inputHidden[i].value = this.checked;
    })
    inputHidden[i].value = this.checked;
}