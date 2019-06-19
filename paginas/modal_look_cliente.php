<!--- CSS --->
<link rel="stylesheet" type="text/css" href="../css/estilos.css">
<link rel="stylesheet" type="text/css" href="../css/estilos_admin.css">
<link rel="stylesheet" href="../css/custom.css">
<!--- Bootstrap 4 --->
<link rel="stylesheet" href="../libs/bootstrap-4.1.3-dist/css/bootstrap.min.css"/>
<script src="../libs/bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
<!--- Bootstrap 4 UI E-Commerce --->
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/bootstrap.bundle.min.js" type="text/javascript"></script>

<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/bootstrap.css" rel="stylesheet" type="text/css"/>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/assets/owl.theme.default.css" rel="stylesheet">
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/plugins/owlcarousel/owl.carousel.min.js"></script>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/ui.css" rel="stylesheet" type="text/css"/>
<link href="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)"/>
<script src="../libs/bootstrap-ecommerce-uikit/ui-ecommerce/js/script.js" type="text/javascript"></script>
<script type="text/javascript" src="../libs/jquery-validation-1.19.0/dist/jquery.validate.js"></script>
<!--- jQuery Mask Plugin --->
<script type="text/javascript" src="../libs/jQuery-Mask-Plugin/dist/jquery.mask.js"></script>
<!--- JS --->
<script src="../js/validacion.js" type="text/javascript"></script>
<script src="../js/admin_sidebar.js" type="text/javascript"></script>

<div id="lookClienteModal" class="modal fade">
  <div class="modal-dialog">
    <div class="modal-content">
      <form name="look_cliente" id="look_cliente" class="justify-content-center" align="center">
        <div class="modal-header">            
          <h4 class="modal-title">Ver Cliente</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        </div>
        <div class="modal-body">
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Nombre: </b></label>
              <input type="text" name="look_nomb1_clie"  id="look_nomb1_clie" class="form-control" disabled>
              <input type="hidden" name="look_id" id="look_id">
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Nombre: </b></label>
              <input type="text" name="look_nomb2_clie" id="look_nomb2_clie" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Primer Apellido: </b></label>
              <input type="text" name="look_apel1_clie" id="look_apel1_clie" class="form-control" disabled>
            </div>
            <div class="col form-group">
              <label class="form-label"><b>Segundo Apellido: </b></label>
              <input type="text" name="look_apel2_clie" id="look_apel2_clie" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Genero: </b></label>
              <input type="text" name="look_gener_clie" id="look_gener_clie" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Telefono: </b></label>
              <input type="text" name="look_telef_clie" id="look_telef_clie" class="form-control telef-mask" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>E-Mail: </b></label>
              <input type="text" name="look_email_clie" id="look_email_clie" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Usuario: </b></label>
              <input type="text" name="look_usuar_clie" id="look_usuar_clie" class="form-control" disabled>
            </div>
          </div>
          <div class="form-row">
            <div class="col form-group">
              <label class="form-label"><b>Fecha de Registro: </b></label>
              <input type="text" name="look_fecre_clie" id="look_fecre_clie" class="form-control" disabled>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <input type="button" class="btn btn-light float-left" data-dismiss="modal" value="Cancelar">
          <input type="button" class="btn btn-primary float-right" data-dismiss="modal" value="OK">
        </div>
      </form>
    </div>
  </div>
</div>