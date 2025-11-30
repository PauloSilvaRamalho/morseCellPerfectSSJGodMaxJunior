async function carregarLista() {
    const response = await fetch("fetch.php");
    const lista = await response.json();

    const select = document.getElementById("morse");

    lista.forEach((item, index) => {
        const option = document.createElement("option");
        option.value = item;   
        option.textContent = item;
        option.id = index + 1;
        select.appendChild(option);
    });
}

carregarLista();
