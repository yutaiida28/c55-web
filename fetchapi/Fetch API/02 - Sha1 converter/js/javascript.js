let textInputNode = document.querySelector("input");

textInputNode.addEventListener("keyup", () => {
    let formData = new FormData(); // <form>
    formData.append("mot", textInputNode.value); // Ajoute le champ et sa valeur

    fetch("ajax-conversion.php", {
        method: "POST",
        body : formData,
    })
    .then(response => response.json())
    .then(result => {
        console.log(result);
        // Modifier la page!
        let resultNode = document.querySelector("#result");
        let divNode = document.createElement("div");
        divNode.innerText = result;
        resultNode.append(divNode);
    })
})