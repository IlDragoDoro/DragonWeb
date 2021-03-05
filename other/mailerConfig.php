<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
  use PHPMailer\PHPMailer\SMTP;
  try{
    if(isset($_POST['submit'])){
      if(isset($_POST['name']) && isset($_POST['email'])
      && isset($_POST['asunto']) && isset($_POST['txt'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $asunto= $_POST['asunto'];
        $txt= $_POST['txt'];


        require 'PHPMailer-master/src/Exception.php';
        require 'PHPMailer-master/src/PHPMailer.php';
        require 'PHPMailer-master/src/SMTP.php';

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Mailer = "smtp";

        /*$mail->SMTPDebug = 1;*/
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure="tls";
        $mail->Port=587;
        $mail->Host="smtp.gmail.com";
        $mail->Username="ildragodorovbdproductions@gmail.com";
        $mail->Password="IlDragoDoro";

        $mail->IsHTML(true);
        $mail->AddAddress("ildragodorovbdproductions@gmail.com","$name");
        $mail->SetFrom("ildragodorovbdproductions@gmail.com","Il Drago D'oro");
        $mail->AddReplyTo("ildragodorovbdproductions@gmail.com","Reply");
        $mail->Subject="$asunto";
        $content = "El usuario: $name ha enviado una consulta desde $email : <br> $txt";

        $mail->MsgHTML($content);
        if(!$mail->Send()){
          echo "Error al enviar el mensaje";
          var_dump($mail);
        }else{
          echo '<i class="fa fa-check" aria-hidden="true"></i> El mensaje se ha enviado correctamente';
        }
          }
    }
  }catch(Exception $e){
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
  }
