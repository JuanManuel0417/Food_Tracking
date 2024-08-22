$(document).ready(function(){
  // Configuración del escáner
  let scanner = new Instascan.Scanner({ 
      video: document.getElementById('preview'),
      mirror: true,
      captureImage: false,
      backgroundScan: true,
      refractoryPeriod: 2000,
  });

  Instascan.Camera.getCameras().then(function (cameras) {
      if (cameras.length > 0) {
          scanner.start(cameras[0]);
          console.log('Camera started:', cameras[0].name);
      } else {
          console.error('No cameras found.');
      }
  }).catch(function (e) {
      console.error('Error getting cameras:', e);
  });

  scanner.addListener('scan', function (content) {
      console.log('QR Code scanned:', content); // Depura el contenido escaneado

      // Reproduce sonido de lectura
      $("#lectura")[0].play();

      // Actualiza el valor del campo de entrada con el contenido escaneado
      $('input#documentoInput').val(content.trim());  // Usa trim() para eliminar espacios en blanco

      // Verifica si el valor del campo se actualiza
      console.log('Document input value:', $('input[name="document"]').val());

      // Añadir la lectura a la lista con un ícono para copiar
      $(".ultima-lectura").append(`
        <li>
          ${content.trim()}
          <button class="copy-btn" data-content="${content.trim()}">
            <i class="fa fa-copy"></i>
          </button>
        </li>
      `);
  });

  // Manejar clic en el botón de copiar
  $(document).on('click', '.copy-btn', function() {
    let content = $(this).data('content');
    navigator.clipboard.writeText(content).then(() => {
      alert('Contenido copiado al portapapeles');
    }).catch(err => {
      console.error('Error copiando al portapapeles:', err);
    });
  });
});
