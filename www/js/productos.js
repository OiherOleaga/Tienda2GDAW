let search = document.getElementById("search");

if (search.value !== "") {

}
search.addEventListener("input", () => {
    history.pushState(null, null, location.pathname + "?q=" + search.value);
    let filtro = {
        partida: "todos",
        search: search.value
    }
    filtro = new URLSearchParams(filtro).toString();
    fetch("/filtrado", {
        method: "post",
        headers: { "Content-type": "application/x-www-form-urlencoded" },
        body: filtro
    })
        .then(res => res.text())
        .then(res => console.log(res))
        .catch(error => console.log(error))
});