document.addEventListener("DOMContentLoaded", function(e) {
    var vNome = "";
    console.log("carregou");
    vNome = window.prompt("Olá !\nQual seu nome?");
    document.getElementById("dBoasVindas").innerHTML = "<h3>Bem vindo "+vNome+" </h3>";
    document.getElementById("iNome").value = vNome;
});

