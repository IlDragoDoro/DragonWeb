    <title>Portfolio - Il Drago D'oro</title>
    <?php include('../common/header.php'); ?>
    <style media="screen">

      *{
        font-family: cursive;
      }

      body {
        background-image: url('../multimedia/img/carouselPort/f1.png');
      }

      .carousel{
        width: 100%;
        max-height: 400px;
        max-width: 700px;
        margin: auto;
      }

      li{
        background-color: white;
        width: 50%;
        height: auto;
        margin: auto;
        margin-top: 1%;
      }
      
    </style>

    <!-- Apartado carousel-->
    <div class="container" style="width: 100%;height:auto">
        <div class="row text-center">
          <div class="col-md-12 text-secondary mt-3">
            <h2>VICENÇ BELTRÁN DÍAZ</h2>
            <h3>Mi portfolio</h3>
          </div>
        </div>
        <div class="row mt-3">
          <div class="col-md-12">
            <div id="carousel" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
                <li data-target="#carousel" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="../multimedia/img/carouselPort/1.png">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../multimedia/img/carouselPort/2.png">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../multimedia/img/carouselPort/3.png">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../multimedia/img/carouselPort/4.png">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="../multimedia/img/carouselPort/5.png">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        </div>
    </div>

    <!-- Mis servicios-->
    <div class="container mt-3" style="width: 100%;height: auto;background-image: url('../multimedia/img/carouselPort/f2.png');">
      <div class="row text-center">
        <div class="col-md-12 text-white mt-2">
          <h2>Mis servicios:</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <ul>
            <li><h3>Servicio 1</h3></li>
            <li><h3>Servicio 2</h3></li>
            <li><h3>Servicio 3</h3></li>
            <li><h3>Servicio 4</h3></li>
            <li><h3>Servicio 5</h3></li>
            <li><h3>Servicio 6</h3></li>
            <li><h3>Servicio 7</h3></li>
            <li><h3>Servicio 8</h3></li>
            <li><h3>Servicio 9</h3></li>
            <li><h3>Servicio 10</h3></li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Por que contratarme? -->
    <div class="container mt-3" style="width: 100%;height: auto;background-image: url('../multimedia/img/carouselPort/f3.png');">
      <div class="row mt-2 text-center">
        <div class="col-md-12">
          <h2 class="mt-2 text-white">Por que contratarme?</h2>

        </div>
      </div>
      <div class="row text-center mt-2">
        <div class="col-md-12">
          <h3 class="bg-white w-50" style="margin:auto;"></h3>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-12">
          <ul>
            <li><h3>Motivo 1</h3></li>
            <li><h3>Motivo 2</h3></li>
            <li><h3>Motivo 3</h3></li>
            <li><h3>Motivo 4</h3></li>
            <li><h3>Motivo 5</h3></li>
            <li><h3>Motivo 6</h3></li>
            <li><h3>Motivo 7</h3></li>
            <li><h3>Motivo 8</h3></li>
            <li><h3>Motivo 9</h3></li>
            <li><h3>Motivo 10</h3></li>
          </ul>
        </div>

      </div>
    </div>
    <hr style="margin-top: 5%;">
    <?php include('../common/footer.php'); ?>
