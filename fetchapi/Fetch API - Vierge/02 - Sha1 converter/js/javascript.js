// 1 recuperer le text input avec le querrySelector
let textInputNode = document.querySelector("input");
// il faut rajouter un event listner pour pouvoir ecouter les imput...
textInputNode.addEventListener("keyup", () => {
    let formData = new FormData();
    formData.append("mot", textInputNode.value);


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