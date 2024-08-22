document.getElementById('generateQR').addEventListener('click', function() {
    let documentNumber = document.getElementById('document').value;
    let qrCodeContainer = document.getElementById('qrcode');
    qrCodeContainer.innerHTML = '';  // Limpia el contenedor antes de generar un nuevo QR
    
    if (documentNumber) {
        let qrcode = new QRCode(qrCodeContainer, {
            text: documentNumber,
            width: 128,
            height: 128
        });
    } else {
        alert("Por favor, ingrese un número de documento.");
    }
});

// Configuración del escáner de QR
function onScanSuccess(decodedText, decodedResult) {
    document.getElementById('document').value = decodedText;
    document.getElementById('asistenciaForm').submit();
}

var html5QrcodeScanner = new Html5QrcodeScanner(
    "qr-reader", { fps: 10, qrbox: 250 });
html5QrcodeScanner.render(onScanSuccess);

