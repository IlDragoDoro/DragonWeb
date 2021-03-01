document.addEventListener('DOMContentLoaded', function () {
  var uno = document.getElementById('uno');
  var dos = document.getElementById('dos');
  var tres = document.getElementById('tres');
  var cuatro = document.getElementById('cuatro');
  var cinco = document.getElementById('cinco');

  uno.onclick = () => {
    var estudios = document.getElementById('estudios');
    if (estudios.hidden == false) {
      estudios.hidden = true;
    }else {
      estudios.hidden = false;
    }
  };

  dos.onclick = () => {
    var experiencia = document.getElementById('experiencia');
    if (experiencia.hidden == false) {
      experiencia.hidden = true;
    }else {
      experiencia.hidden = false;
    }
  };

  tres.onclick = () => {
    var lenguajes = document.getElementById('lenguajes');
    if (lenguajes.hidden == false) {
      lenguajes.hidden = true;
    }else {
      lenguajes.hidden = false;
    }
  };

  cuatro.onclick = () => {
    var idiomas = document.getElementById('idiomas');
    if (idiomas.hidden == false) {
      idiomas.hidden = true;
    }else {
      idiomas.hidden = false;
    }
  };

  cinco.onclick = () => {
    var about = document.getElementById('about');
    if (about.hidden == false) {
      about.hidden = true;
    }else {
      about.hidden = false;
    }
  };
});
