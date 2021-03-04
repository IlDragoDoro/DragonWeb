    <title>CV - Il Drago D'oro</title>
    <?php include('../common/header.php');?>
    <div class="">
      <div class="container">
        <div class="row" style="font-family: 'comic-sans';">
          <div class="col-md-4">
            <img id="profile" class="w-100" src="../multimedia/img/profile/1.png">
          </div>
          <div class="col-md-8 text-center mt-4">
            <h2>Vicenç Beltrán Díaz</h2>
            <h4>Cerca del centro - Son Dameto - Palma De Mallorca</h4>
            <h4>650917754 | vicen333@gmail.com</h4>
            <h4>Permiso de conducir</h4>
          </div>
        </div>
        <hr>
        <div class="row mt-3">
          <div class=" text-secondary col-md-12 text-center">
            <h3 type="button" id="uno"> <i class="fab fa-studiovinari"></i>Estudios realizados <i class="fas fa-sort-down"></i></h3>
            <div id="estudios" hidden>
              <h4><i class="fas fa-book-open"></i> Técnico superior en desarrollo de aplicaciones web 2019-2021</h4>
              <h4><i class="fas fa-book-open"></i> Técnico de grado medio en cocina y gastronomía 2015-2018</h4>
              <h4><i class="fas fa-book-open"></i> Técnico en cocina y restauración 2013-2015</h4>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class=" text-secondary col-md-12 text-center">
            <h3 type="button" id="dos"> <i class="fab fa-d-and-d"></i>Experencia actual <i class="fas fa-sort-down"></i></h3>
            <div id="experiencia" hidden>
              <h4><i class="far fa-bell"></i> Solo dispongo de estudios en estos momentos (2021)</h4>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class=" text-secondary col-md-12 text-center">
            <h3 type="button" id="tres"> <i class="fab fa-acquisitions-incorporated"></i> Lenguajes aprendidos <i class="fas fa-sort-down"></i></h3>
            <div id="lenguajes" hidden>
              <div class="row mt-3">
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/html.png"><br>
                  <small>HTML</small>
                </div>
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/laravel.png"><br>
                  <small>LARAVEL</small>
                </div>
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/js.png"><br>
                  <small>JAVASCRIPT</small>
                </div>
              </div>
              <div class="row">
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/css.png"><br>
                  <small>CSS</small>
                </div>
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/php.png"><br>
                  <small>PHP & SQL</small>
                </div>
                <div class="col-4">
                  <img src="../multimedia/img/lenguajes/bootstrap.png"><br>
                  <small>BOOTSTRAP</small>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mt-3">
          <div class=" text-secondary col-md-12 text-center">
            <h3 type="button" id="cuatro"> <i class="fas fa-language"></i> Idiomas <i class="fas fa-sort-down"></i></h3>
            <div id="idiomas" hidden>
              <div class="row mt-3">
                <div class="col-4" style="border: 1px solid black">
                  <h4>Español</h4>
                  <hr style="border: 1px solid grey">
                  <p> <strong>Oral:</strong> Nativo </p>
                  <p> <strong>Escritura:</strong> Nativo</p>
                  <p> <strong>Lectura:</strong> Nativo </p>
                </div>
                <div class="col-4" style="border: 1px solid black">
                  <h4>Catalán</h4>
                  <hr style="border: 1px solid grey">
                  <p> <strong>Oral:</strong> Nativo </p>
                  <p> <strong>Escritura:</strong> Nativo</p>
                  <p> <strong>Lectura:</strong> Nativo </p>
                </div>
                <div class="col-4" style="border: 1px solid black">
                  <h4>Inglés</h4>
                  <hr style="border: 1px solid grey">
                  <p> <strong>Oral:</strong> Intermedio </p>
                  <p> <strong>Escritura:</strong> Intermedio</p>
                  <p> <strong>Lectura:</strong> Intermedio </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row mt-3">
        <div class=" text-secondary col-md-12 text-center">
          <h3 type="button" id="cinco"> <i class="fas fa-user-tag"></i> Sobre mi <i class="fas fa-sort-down"></i></h3>
          <div id="about" >
            <div class="row">
              <div class="col-12 border text-center">
                <h5> <strong>Edad:</strong>  <label id="edad"></label> años.</h5>
                <h5> <strong>Sexo:</strong> Masculino.</h5>
                <h5> <strong>Profesión:</strong> Desarollador web </h5>
              </div>
            </div>
        </div>
      </div>
    </div>
    <script type="text/javascript">
document.addEventListener('DOMContentLoaded', function () {
    var img = document.getElementById('profile');
    var i = 1;
    img.onmouseenter = () => {
      var interval = setInterval(function () {
        img.src = '../multimedia/img/profile/' + i + '.png';
        if (i < 18) {
          i++;
        } else if (i == 18) {
          i = 1;
        }
      }, 100);
      img.onmouseleave = () => {
        clearInterval(interval);
      }
    };

  });
</script>
    <?php include('../common/footer.php'); ?>
