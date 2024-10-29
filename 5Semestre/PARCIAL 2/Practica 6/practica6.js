let ocultar = false;

function muestra_texto() {
  const textElement = document.getElementById("texto");
  const buttonElement = document.getElementById("mostrar");

  if (!ocultar) {
    textElement.textContent = "Lorem ipsum";
    ocultar = true;
    buttonElement.textContent = "Mostrar menos";
  } else {
    textElement.textContent = "";
    ocultar = false;
    buttonElement.textContent = "Mostrar más";
  }
}

function lanzar_dado() {
  const diceNumber = Math.floor(Math.random() * 6) + 1;
  const imageElement = document.getElementById("imagen_dado");
  imageElement.innerHTML = `<img src="dado${diceNumber}.png" width="100px">`;
}

document.addEventListener("DOMContentLoaded", () => {
  document.getElementById("boton_dado").addEventListener("click", lanzar_dado);
});
