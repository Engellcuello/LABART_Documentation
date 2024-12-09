function mostrar() {
    document.getElementById('contenedor_detalles').style.display = 'block';
}

function nomostrar() {
    document.getElementById('contenedor_detalles').style.display = 'none';
}

document.getElementById('contenedor-padre').addEventListener('click', function () {
    // Ocultar el div padre cuando se hace clic en él
    this.style.display = 'none';
});

var imagen = document.getElementById('miImagen');
var resolucion = document.getElementById('resolucionImagen');

// Función para obtener la resolución de la imagen
function obtenerResolucion() {
    var ancho = this.naturalWidth; // Ancho de la imagen
    var alto = this.naturalHeight; // Alto de la imagen
    resolucion.textContent = 'Resolución: ' + ancho + 'x' + alto + ' píxeles'; // Actualiza el contenido del span
}

// Llama a la función para obtener la resolución cuando la imagen se haya cargado completamente
imagen.addEventListener('load', obtenerResolucion);