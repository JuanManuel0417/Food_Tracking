const toqueBoton = document.getElementById("toqueBoton");
const contenedorChat = document.getElementById("contenedorChat");

toqueBoton.addEventListener("click", function () {
  if (contenedorChat.style.display === "none") {
    contenedorChat.style.display = "block";
    toqueBoton.querySelector(".original").textContent = "Ocultar Chat";
  } else {
    contenedorChat.style.display = "none";
    toqueBoton.querySelector(".original").textContent = "Asistente";
  }
});

document.getElementById("botonEnviar").addEventListener("click", enviarMensaje); //Llama la funcion al hacer clic en el boton de enviar

document
  .getElementById("entradaChat")
  .addEventListener("keydown", function (evento) {
    //Verifica si la tecla presionada es Enter
    if (evento.key === "Enter") {
      enviarMensaje(); //Llama la funcion si se presiona Enter
    }
  });

function enviarMensaje() {
  //Obtiene los elementos del HTML
  const entradaChat = document.getElementById("entradaChat");
  const visualizacionChat = document.getElementById("visualizacionChat");

  const mensaje = entradaChat.value.trim(); //Obtiene y limpia el mensaje ingresado eliminando espacios en blanco al principio y al final (MUY IMPORTANTE)

  if (mensaje === "") return; // Si el mensaje est vacio no hace nada y sale de la funcion

  //Crea un nuevo elemento div para mostrar el mensaje del usuario con sus estilos correspondientes
  const elementoMensajeUsuario = document.createElement("div");
  elementoMensajeUsuario.className = "mensaje-chat mensaje-usuario";
  elementoMensajeUsuario.textContent = mensaje;
  visualizacionChat.appendChild(elementoMensajeUsuario);

  entradaChat.value = ""; //Limpia el input para un nuevo mensaje

  //Obtiene la respuesta del bot segun el mensaje del usuario
  const respuestaBot = obtenerRespuestaBot(mensaje);

  //Crea un nuevo elemento div para mostrar la respuesta del bot con sus estilos correspondientes
  const elementoMensajeBot = document.createElement("div");
  elementoMensajeBot.className = "mensaje-chat mensaje-bot";
  elementoMensajeBot.textContent = respuestaBot;
  visualizacionChat.appendChild(elementoMensajeBot);

  visualizacionChat.scrollTop = visualizacionChat.scrollHeight; // Desplaza la ventana de chat hacia abajo para mostrar el mensaje mas reciente
}

//Funcion para obtener la respuesta del bot según el mensje del usuario
function obtenerRespuestaBot(mensaje) {
  switch (mensaje.toLowerCase()) {
    case "1":
      return "Food Trackin es la página web del restaurante escolar de la I.E. República de Honduras en Medellín. Se enfoca en optimizar la administración del Programa de Alimentación Escolar (PAE), promoviendo una alimentación saludable y el aprendizaje en la cocina.";

    case "2":
      return "Para ser beneficiario del programa PAE, debes ser estudiante de la institución. Dirígete al director de grupo correspondiente para solicitar el ingreso al programa.";

    case "3":
      return "Puedes explorar cursos gratuitos de cocina en Edutin. Visita este enlace para más información y opciones disponibles.";

    case "4":
      return "Puedes contactar al administrador escribiendo a gonzalezmejiaj@gmail.com. Estará encantado de ayudarte con cualquier consulta o solicitud relacionada con el programa PAE.";

    default:
      return "Lo siento, no entiendo esa opción. Por favor, elige una opción válida: 1, 2, 3 o 4.";
  }
}
