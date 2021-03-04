    <title>Contacto - Il Drago D'oro</title>
    <?php include('../common/header.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d393607.83979083266!2d2.4253621356114556!3d39.58076996990948!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1297948706061e07%3A0xe1523779302cd452!2sPalma%20de%20Mallorca%2C%20Islas%20Baleares!5e0!3m2!1ses!2ses!4v1614876682788!5m2!1ses!2ses" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
      <div class="row text-secondary text-center mt-3 border">
        <div class="col-md-6">
          <h3 style="border-bottom: 2px solid grey"><i class="fas fa-digital-tachograph"></i> Datos de Contacto</h3>
          <h4><i class="far fa-envelope"></i> Email: VICEN333@GMAIL.COM</h4>
          <h4><i class="fas fa-mobile-alt"></i> Mobile: (+34) 650 91 77 54</h4>
        </div>
        <div class="col-md-6">
          <h3 style="border-bottom: 2px solid grey"><i class="fab fa-wpforms"></i> Formulario de contacto:</h3>
          <form class="" action="contact.php" method="post">
            <input class="form-control" type="text" name="name" placeholder="Tu nombre:">
            <input class="form-control mt-2" type="email" name="email" placeholder="Tu email:">
            <textarea class="form-control mt-2" name="txt" rows="4" cols="40" placeholder="Escribe tu mensaje:"></textarea>
            <input class="btn btn-dark mt-2" type="submit" name="submit" value="Enviar">
          </form>
        </div>
      </div>
    </div>
    <hr style="margin-bottom:75px">
    <?php include('../common/footer.php'); ?>
