<?php require_once('header_logreg.php'); ?>

<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['ident_clie']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h4 class="modal-title" id="myModalLabel">Edit Member</h4></center>
            </div>
            <div class="modal-body">
							<div class="container-fluid" id="usuario_modificar" class="justify-content-center" align="center">
								<form role="form" method="POST" action="edit.php?ident_clie=<?php echo $row['ident_clie']; ?>">
									<div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="nomb1_clie">Primer Nombre: </label>
								      <input type="text" class="form-control" name="nomb1_clie" autocomplete="off" id="nomb1_clie" value="<?php echo $row['nomb1_clie']; ?>" placeholder="Carlos" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								    <div class="col form-group">
								      <label class="form-label" for="nomb2_clie">Segundo Nombre: </label>
								      <input type="text" class="form-control" name="nomb2_clie" autocomplete="off" id="nomb2_clie" value="<?php echo $row['nomb2_clie']; ?>" placeholder="Agustin" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="apel1_clie">Primer Apellido</label>
								      <input type="text" class="form-control" name="apel1_clie" autocomplete="off" id="apel1_clie" value="<?php echo $row['apel1_clie']; ?>" placeholder="Guanipa" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								    <div class="col form-group">
								      <label class="form-label" for="apel2_clie">Segundo Apellido</label>
								      <input type="text" class="form-control" name="apel2_clie" autocomplete="off" id="apel2_clie" value="<?php echo $row['apel2_clie']; ?>" placeholder="Alvarez" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="gener_clie">Genero: </label>
								      <select class="form-control" value="<?php echo $row['gener_clie']; ?>" id="gener_clie" name="gener_clie">
								        <option value="MASCULINO">MASCULINO</option>
								        <option value="FEMENINO">FEMENINO</option>
								      </select>
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="telef_clie">Telefono: </label>
								      <input type="text" class="form-control telef-mask" name="telef_clie" autocomplete="off" id="telef_clie" value="<?php echo $row['telef_clie']; ?>" placeholder="(0000) 000 0000" maxlength="15">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="email_clie">E-Mail: </label>
								      <input type="email" class="form-control" name="email_clie" autocomplete="off" id="email_clie" value="<?php echo $row['email_clie']; ?>" placeholder="correo@mail.com" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								  </div>
								  <div class="form-row">
								    <div class="col form-group">
								      <label class="form-label" for="usuar_clie">Usuario: </label>
								      <input type="text" class="form-control" name="usuar_clie" autocomplete="off" id="usuar_clie" value="<?php echo $row['usuar_clie']; ?>" placeholder="miusuario" maxlength="20" onkeyup="this.value = this.value.toUpperCase();">
								    </div>
								  </div>
				        </div> 
						</div>
          	<div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
              <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a></button>
            </div>
						</form>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['ident_clie']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Member</h4></center>
            </div>
            <div class="modal-body">	
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['nomb1_clie'].' '.$row['apel1_clie']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?ident_clie=<?php echo $row['ident_clie']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>