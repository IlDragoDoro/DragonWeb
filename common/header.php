<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!--Zona de scripts y stylesheets-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../fonts/stylesheet.css"> <!--Es una fuente especial para mi web-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> <!--Bootstrap-->
    <!--Font Awesome para los iconos de la web-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
    <!-- Los scripts de bootstrap-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!--Este script pone mi edad en el cv , la fecha en el footer y el año en el copyright-->
    <script src="../js/uno.js" charset="utf-8"></script>
    <!--Este script tiene las funciones del cv-->
    <script src="../js/cv.js"></script>
    <!--Este es el icono de la pestaña-->
    <link rel="shortcut icon" href="../multimedia/img/icon.png" />
    <!--Fin de la zona de scripts y stylesheets-->

    <style media="screen">
    a{
      font-family: cursive;
    }
    a:hover{
      transform: rotate(360deg);
      transition: 3s;
    }
    </style>
  </head>
  <body>
    <!--Menú de navegación fijo-->
    <nav class="navbar navbar-expand-md navbar-light sticky-top bg-light" style="border-bottom: 1px double gold;">
      <small class="navbar-brand"><img src="../multimedia/img/logo.png" width="50%"></small>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav m-1">
        <li class="nav-item">
          <a class="nav-link" href="../index.php">Inicio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/cv.php">CV</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/port.php">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/git.php">GitHub</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/about.php">Sobre mi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../views/contact.php">Contacto</a>
        </li>
      </ul>
    </div>
  </nav>
  <br>
