const titulo = document.getElementById("titulo");
const botao = document.getElementById("botao");

botao.addEventListener("click", function () {
    titulo.innerHTML = "Texto alterado pelo JavaScript!";
});