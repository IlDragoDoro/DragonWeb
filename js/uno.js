document.addEventListener('DOMContentLoaded', function () {
  var fechaActual = new Date();
  var interval = setInterval(function () {
    fechaActual = new Date();
    var fecha = document.getElementById('date');
    fecha.innerHTML = 'Fecha: ' +
    ('0' + fechaActual.getDate()).slice(-2) + '/' +
    ('0' + fechaActual.getMonth()).slice(-2) + '/' +
    fechaActual.getFullYear() + '\t' +
    ('0' + fechaActual.getHours()).slice(-2) + ':'
    + ('0' + fechaActual.getMinutes()).slice(-2) + ':' +
    ('0' + fechaActual.getSeconds()).slice(-2);
  }, 1000);

  var copyright = document.getElementById('copyright');
  copyright.innerHTML = '@' + fechaActual.getFullYear()
                         + ' Copyright: <strong> VBD PRODUCTIONS </strong>';

});
