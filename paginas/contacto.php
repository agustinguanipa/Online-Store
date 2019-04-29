<?php require_once('user_header.php'); ?>

<head>
	<title>Contacto | SIGMAEMCA Online Store</title>
</head>

<body>
	<div class="jumbotron text-center" style="margin-bottom:0; background-color: #FBFCFF;">
	  <div class="container">
	  	<div class="row">
	  		<div class="col-sm-12 form-group">
	  			<h1>Contacto</h1>
	  			<hr class="my-4">
	  			<div class="row">
			  		<div class="col-sm-8 form-group">
							<form role="form" id="contact-form" class="contact-form" action="mail_contacto.php" method="post">
                <div class="row">
            			<div class="col-md-6 form-label">
            				<label>Nombres: </label>
                		<div class="form-group">
                			<input type="text" class="form-control" name="nombres" autocomplete="off" id="nombres" placeholder="Carlos Agustin">
                		</div>
              		</div>
              		<div class="col-md-6 form-label">
              			<label>Apellidos: </label>
                		<div class="form-group">
                			<input type="text" class="form-control" name="apellidos" autocomplete="off" id="apellidos" placeholder="Guanipa Alvarez">
                		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 form-label">
              			<label>E-Mail: </label>
                		<div class="form-group">
                    	<input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="correo@mail.com">
                		</div>
              		</div>
              	</div>
              	<div class="row">
              		<div class="col-md-12 form-label">
              			<label>Mensaje: </label>
                		<div class="form-group">
                    	<textarea class="form-control textarea" rows="3" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
                 		</div>
              		</div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                		<button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                	</div>
              	</div>
            	</form>
			  		</div> 
			  		<div class="col-sm-4 form-group">
							<div>
				      	<img src="../imagen/Logo-SIGMAEMCA.png" alt="Foto Personal" height="325px">
				    	</div>
			  		</div>
			  	</div>
		    </div>
		  </div>
		</div>
	</div>
</body>

<?php require_once('user_footer.php');  ?>


