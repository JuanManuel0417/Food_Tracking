// Variables
let tarjetasDestapadas = 0;
let tarjeta1 = null;
let tarjeta2 = null;
let primerResultado = null;
let segundoResultado = null;
let movimientos = 0;
let aciertos = 0;
let temporizador = false;
let timer = 35;
let timerInicial = 35;
let tiempoRegresivo = null;

// DOM elements
let mostrarMovimientos = document.getElementById("movimientos");
let mostrarAciertos = document.getElementById("aciertos");
let mostrarTiempo = document.getElementById("t-restante");
let modal = document.querySelector(".modal");

// Sounds
let winAudio = new Audio("assets/sonidos/ganar.mp3");
let loseAudio = new Audio("assets/sonidos/perder.mp3");
let clickAudio = new Audio("assets/sonidos/click.mp3");
let errorAudio = new Audio("assets/sonidos/error.mp3");
let correctAudio = new Audio("assets/sonidos/correcto.mp3");

// Generar números aleatorios
let numeros = [1, 1, 2, 2, 3, 3, 4, 4, 5, 5, 6, 6, 7, 7, 8, 8];
numeros = numeros.sort(() => Math.random() - 0.5);

// Funciones
function contarTiempo() {
  tiempoRegresivo = setInterval(() => {
    timer--;
    mostrarTiempo.innerHTML = `Tiempo restante: ${timer} segundos`;
    if (timer === 0) {
      clearInterval(tiempoRegresivo);
      bloquearTarjetas();
      loseAudio.play();
      modal.classList.add("active");
      setTimeout(() => location.reload(), 3000);
    }
  }, 1000);
}

function bloquearTarjetas() {
  for (let i = 0; i <= 15; i++) {
    let tarjetaBloqueada = document.getElementById(i);
    tarjetaBloqueada.innerHTML = `<img src="assets/img_juego/${numeros[i]}.png" alt="${numeros[i]}">`;
    tarjetaBloqueada.disabled = true;
  }
}

function destapar(id) {
  if (!temporizador) {
    contarTiempo();
    temporizador = true;
  }

  tarjetasDestapadas++;

  if (tarjetasDestapadas === 1) {
    tarjeta1 = document.getElementById(id);
    primerResultado = numeros[id];
    tarjeta1.innerHTML = `<img src="assets/img_juego/${primerResultado}.png" alt="${primerResultado}">`;
    clickAudio.play();
    tarjeta1.disabled = true;
  } else if (tarjetasDestapadas === 2) {
    tarjeta2 = document.getElementById(id);
    segundoResultado = numeros[id];
    tarjeta2.innerHTML = `<img src="assets/img_juego/${segundoResultado}.png" alt="${segundoResultado}">`;
    clickAudio.play();
    tarjeta2.disabled = true;

    movimientos++;
    mostrarMovimientos.innerHTML = `Movimientos: ${movimientos}`;

    if (primerResultado === segundoResultado) {
      aciertos++;
      mostrarAciertos.innerHTML = `Aciertos: ${aciertos}`;
      tarjetasDestapadas = 0;
      correctAudio.play();

      if (aciertos === 8) {
        winAudio.play();
        clearInterval(tiempoRegresivo);
        modal.innerHTML = "¡Felicidades! Ganaste";
        modal.classList.add("active");
        setTimeout(() => location.reload(), 3000);
      }
    } else {
      setTimeout(() => {
        tarjeta1.innerHTML = "";
        tarjeta2.innerHTML = "";
        tarjeta1.disabled = false;
        tarjeta2.disabled = false;
        tarjetasDestapadas = 0;
        errorAudio.play();
      }, 1000);
    }
  }
}
