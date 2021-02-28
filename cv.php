<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CV - Il Drago D'oro</title>
    <script src="js/cv.js"></script>
    <?php include('header.php'); ?>
  </head>
  <body>
    <div class="container">
      <div class="row" style="font-family: 'comic-sans';">
        <div class="col-md-4">
          <img class="w-100" src="img/cvprofile.png" alt="">
        </div>
        <div class="col-md-8 text-center mt-4">
          <h2>Vicenç Beltrán Díaz</h2>
          <h4>Cerca del centro - Son Dameto - Palma De Mallorca</h4>
          <h4>650917754 | vicen333@gmail.com</h4>
          <h4>Permiso de conducir</h4>
        </div>
      </div>
      <hr>
      <div class="row ">
        <div class=" text-secondary col-md-12 text-center">
          <h3 type="button" id="uno"> <i class="fab fa-studiovinari"></i>Estudios realizados <i class="fas fa-sort-down"></i></h3>
          <div id="estudios" hidden>
            <h4><i class="fas fa-book-open"></i> Técnico superior en desarrollo de aplicaciones web 2019-2021</h4>
            <h4><i class="fas fa-book-open"></i> Técnico de grado medio en cocina y gastronomía 2015-2018</h4>
            <h4><i class="fas fa-book-open"></i> Técnico en cocina y restauración 2013-2015</h4>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class=" text-secondary col-md-12 text-center">
          <h3 type="button" id="dos"> <i class="fab fa-d-and-d"></i>Experencia actual <i class="fas fa-sort-down"></i></h3>
          <div id="experiencia" hidden>
            <h4><i class="far fa-bell"></i> Solo dispongo de estudios en estos momentos (2021)</h4>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class=" text-secondary col-md-12 text-center">
          <h3 type="button" id="tres"> <i class="fab fa-d-and-d"></i>Lenguajes aprendidos <i class="fas fa-sort-down"></i></h3>
          <div id="lenguajes">
            <div class="row my-3">
              <div class="col-4">
                <img src="img/lenguajes/html.png"><br>
                <small>HTML</small>
              </div>
              <div class="col-4">
                <img src="img/lenguajes/laravel.png"><br>
                <small>LARAVEL</small>
              </div>
              <div class="col-4">
                <img src="img/lenguajes/js.png"><br>
                <small>JAVASCRIPT</small>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <img src="img/lenguajes/css.png"><br>
                <small>CSS</small>
              </div>
              <div class="col-4">
                <img src="img/lenguajes/php.png"><br>
                <small>PHP & SQL</small>
              </div>
              <div class="col-4">
                <img src="img/lenguajes/bootstrap.png"><br>
                <small>BOOTSTRAP</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <hr style="margin-bottom:10%">
  <?php include('footer.php'); ?>
</html>
