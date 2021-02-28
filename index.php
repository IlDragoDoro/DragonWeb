<!DOCTYPE html>
<html lang="es-ES" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Inicio - Il Drago D'oro</title>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <?php include('header.php'); ?>
    <style media="screen">
      h1{
        font-family: elegant_dragonitalic;
      }
    </style>
  </head>
  <body>
    <div class="container">
      <div class="row text-center">
        <div class="col-md-3">
          <img src="img/dragon.gif" width="80%" style="max-width:120px; max-height:113.89px;">
        </div>
        <div class="col-md-6 mt-5">
          <h1>Bienvenido a mi web</h1>
        </div>
        <div class="col-md-3">
          <img src="img/dragon.gif" width="80%" height="auto" style="transform: scaleX(-1);max-width:120px; max-height:113.89px;">
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">
          <small >Veamos un pequeño vídeo de presentación:</small>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row mt-3 bg-light" style="border: 1px solid gold;">
        <div class="col-md-12">
          <div class="embed-responsive embed-responsive-21by9">
            <iframe  src="video/video.mp4" allowfullscreen ></iframe>
          </div>
        </div>
      </div>
    </div>
  </body>
  <?php include('footer.php'); ?>
</html>
