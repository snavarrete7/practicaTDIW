function confirmaRegistre(){
    alert("Confirmant registre...");
    document.getElementById("formulario").innerHTML = "<p class='important'>T'has registrat amb èxit!</p>";
    console.log("Registre confirmat!");
    return false;
}