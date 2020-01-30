<?php require_once('../includes/principal_header.php'); ?>

<?php

$error = '';
$name = '';
$email = '';
$subject = '';
$message = '';

function clean_text($string)
{
  $string = trim($string);
  $string = stripslashes($string);
  $string = htmlspecialchars($string);
  return $string;
}

if(isset($_POST["submit"]))
{
  if(empty($_POST["name"]))
  {
    $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
  }
  else
  {
    $name = clean_text($_POST["name"]);
    if(!preg_match("/^[a-zA-Z ]*$/",$name))
    {
      $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
    }
  }
  if(empty($_POST["email"]))
  {
    $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
  }
  else
  {
    $email = clean_text($_POST["email"]);
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
      $error .= '<p><label class="text-danger">Ingrese un Correo Electronico Valido</label></p>';
    }
  }
  if(empty($_POST["subject"]))
  {
    $error .= '<p><label class="text-danger">Subject is required</label></p>';
  }
  else
  {
    $subject = clean_text($_POST["subject"]);
  }
  if(empty($_POST["message"]))
  {
    $error .= '<p><label class="text-danger">Message is required</label></p>';
  }
  else
  {
    $message = clean_text($_POST["message"]);
  }
  if($error == '')
  {
    require '../../libs/phpmailer/class.phpmailer.php';
    $mail = new PHPMailer;
    $mail->IsSMTP();                //Sets Mailer to send message using SMTP
    $mail->Host = 'smtp.gmail.com';   //Sets the SMTP hosts of your Email hosting, this for Godaddy
    $mail->Port = '587';               //Sets the default SMTP server port
    $mail->SMTPAuth = true;             //Sets SMTP authentication. Utilizes the Username and Password variables
    $mail->Username = 'agustinguanipa98@gmail.com';         //Sets SMTP username
    $mail->Password = '980329CaGa2020';         //Sets SMTP password
    $mail->SMTPSecure = 'tls';             //Sets connection prefix. Options are "", "ssl" or "tls"
    $mail->From = $_POST["email"];          //Sets the From email address for the message
    $mail->FromName = $_POST["name"];       //Sets the From name of the message
    $mail->AddAddress('agustin_guanipa@hotmail.com', 'SIGMAEMCA Online Store');   //Adds a "To" address
    $mail->AddCC($_POST["email"], $_POST["name"]);  //Adds a "Cc" address
    $mail->WordWrap = 50;             //Sets word wrapping on the body of the message to a given number of characters
    $mail->IsHTML(true);              //Sets message type to HTML       
    $mail->Subject = $_POST["subject"];       //Sets the Subject of the message
    $mail->Body = "
        <html>
        <head>
        <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>
        </head>
            <body>
            <div class='container my-5'>
              <div class='card' align='center'>
                <div class='card-body' style=' background: rgb(56,176,222);
                    background: linear-gradient(90deg, rgba(56,176,222,1) 0%, rgba(66,136,255,1) 50%, rgba(0,74,255,1) 100%);'>
                  <h2 class='card-title text-white'><b>SIGMAEMCA Online Store</b></h2>
                  <p class='card-text text-white'><b>Todo en Equipos Medicos, Material Medico Quirurgico, Consumibles y Mucho Mas</b></p>
                </div>
              </div>
               <p class=''>
                <h2 align='center'><b>Mensaje</b></h2>
                <hr class='my-3'>
                  <table align='center'>
                      <tbody>
                          <tr>
                              <td style='width:150px'><strong>Nombre y Apellido: </strong></td>
                              <td style='width:400px'>$name</td>
                          </tr>
                          <tr>
                              <td style='width:150px'><strong>Email: </strong></td>
                              <td style='width:400px'>$email</td>
                          </tr>
                          <tr>
                              <td style='width:150px'><strong>Asunto: </strong></td>
                              <td style='width:400px'>$subject</td>
                          </tr>
                          <tr>
                              <td style='width:150px'><strong>Mensaje: </strong></td>
                              <td style='width:400px'>$message</td>
                          </tr>
                      </tbody>
                  </table>
                  <hr class='my-3'>
                  <div class='col-sm-12'>
                    <p class='text-sm-center'><b>SIGMAEMCA Online Store</b></p>
                    <p class='text-sm-center'>Copyright &copy 2020<br>
                    </p>
                  </div>
                </div>
            </body>
        </html>
        ";
        // HTML Message Ends here
    if($mail->Send())               //Send an Email. Return true on success or false on error
    {
      $error = '<label class="text-success"><b>¡Gracias por Contactarnos!</b></label>';
    }
    else
    {
      $error = '<label class="text-danger"<b>Existe un Error</b></label>';
    }
    $name = '';
    $email = '';
    $subject = '';
    $message = '';
  }
}

?>

<head>
  <title>Contacto | SIGMAEMCA Online Store</title>
</head>

<body>

  <section class="section-pagetop bg" style="padding: 30px;">
      <div class="container" align="center">
        <div class="row">
          <div class="col-sm-4">
          </div>
          <div class="col-sm-4">
            <h2 class="" style="color: #000000;"><b>Contacto</b></h2>
          </div>
          <div class="col-sm-4">
          </div>
        </div>
      </div>
    </section>

  <div class="jumbotron text-center" style="margin-bottom:0; background-color: #FFFFFF;"> 
    <div class="container">
      <div class="row">
        <div class="col-sm-12 form-group">
          <br>
          <h1>Enviar Mensaje</h1>
          <hr class="my-4">
          <div class="row">
            <div class="col-sm-8 form-group justify-content-center" align="center">
              <?php echo $error; ?>
              <form role="form" class="contact-form" method="post">
                <div class="row justify-content-center">
                  <div class="col-lg-8 form-label text-center">
                    <label><b>Nombre y Apellido: </b></label>
                    <div class="form-group">
                      <input type="text" class="form-control" name="name" autocomplete="off" id="name" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $name; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-8 form-label text-center">
                    <label><b>E-Mail: </b></label>
                    <div class="form-group">
                      <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $email; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-8 form-label text-center">
                    <label><b>Asunto: </b></label>
                    <div class="form-group">
                      <input type="text" class="form-control" name="subject" autocomplete="off" id="subject" onkeyup="this.value = this.value.toUpperCase();" value="<?php echo $subject; ?>" required>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-center">
                  <div class="col-lg-8 form-label text-center">
                    <label><b>Mensaje: </b></label>
                    <div class="form-group">
                      <textarea class="form-control textarea" rows="3" name="message" id="message" placeholder="Mensaje" required><?php echo $message; ?></textarea>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary">Enviar Mensaje <i class="fa fa-envelope"></i></button>
                  </div>
                </div>
              </form>
            </div> 
            <div class="col-sm-4 form-group">
              <div>
                <img src="../../imagen/contacto1.png" alt="Imagen Contacto" height="325px">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="jumbotron text-center" id="background1">
    <div class="container">
      <h1>Redes Sociales</h1>
      <hr class="my-4">
      <div class="row justify-content-center">
        <a href="https://facebook.com/agustin.guanipa" class="icono-10x fab fa-facebook fa-10x"></a>
        <a href="https://twitter.com/AgustinGuanipa" class="icono-10x fab fa-twitter fa-10x"></a>
        <a href="https://instagram.com/agustinguanipa/" class="icono-10x fab fa-instagram fa-10x"></a>
        <a href="https://wa.me/584266908396" class="icono-10x fab fa-whatsapp fa-10x"></a>
      </div>
    </div>
  </div>
</body>

<?php require_once('../includes/principal_footer.php'); ?>

<script type="text/javascript">
  $( document ).ready( function () {
  $( "#contact-form" ).validate( {
    rules: {
      name: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      email: {
        required: true,
        email: true
      },
      subject: {
        required: true,
        minlength: 6
      },
      message: {
        required: true,
        minlength: 10
      },
    },

    messages: {
      name: {
        required: "Ingrese un Nombre y Apellido",
        lettersonly: "El Nombre solo debe contener letras",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      email: {
        required: "Ingrese una Dirección de Correo Electrónico Válida",
        email: "Ingrese una Dirección de Correo Electrónico Válida"
      },
      subject: {
        required: "Ingrese un Asunto",
        minlength: "El Asunto debe contener al menos 6 caracteres"
      },
      message: {
        required: "Ingrese un Mensaje",
        minlength: "El Mensaje debe contener al menos 10 caracteres"
      },
    },

    errorElement: "em",
    errorPlacement: function ( error, element ) {
      // Add the `invalid-feedback` class to the error element
      error.addClass( "invalid-feedback" );

      if ( element.prop( "type" ) === "checkbox" ) {
        error.insertAfter( element.next( "label" ) );
      } else {
        error.insertAfter( element );
      }
    },
    highlight: function ( element, errorClass, validClass ) {
      $( element ).addClass( "is-invalid" ).removeClass( "is-valid" );
    },
    unhighlight: function (element, errorClass, validClass) {
      $( element ).addClass( "is-valid" ).removeClass( "is-invalid" );
    }
  } );

} );

  jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

</script>

