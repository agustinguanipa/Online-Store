$(function() {
	load(1);
});

function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../ajax/listar_proveedores.php',
		data: parametros,
		 beforeSend: function(objeto){
		$("#loader").html("Cargando...");
	  },
		success:function(data){
			$(".outer_div").html(data).fadeIn('slow');
			$("#loader").html("");
		}
	})
}

/* Add */

$( "#add_proveedor" ).validate( {

    rules: {
      nombr_prov: {
        required: true,
        minlength: 2
      },
      telef_prov: {
        required: true,
        number: false,
        minlength: 15
      },
      email_prov: {
        required: true,
        email: true
      },
      direc_prov: {
        required: true,
        minlength: 2
      },
    },

    messages: {
      nombr_prov: {
        required: "Ingrese un Nombre",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      telef_prov: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_prov: {
        required: "Ingrese una Dirección de Correo Electrónico Válida",
        email: "Ingrese una Dirección de Correo Electrónico Válida"
      },
      direc_prov: {
        required: "Ingrese una Dirección",
        minlength: "La Dirección debe contener al menos 2 caracteres"
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
    },

    submitHandler: function( form ) {

    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form); // I change 'this' to form
    console.log(formData); // for test purpose. See your log to confirm the result data

    $.ajax({
      type: "POST",
      url: "../ajax/guardar_proveedor.php",
      data: formData,
      contentType: false,
      processData: false,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#addProveedorModal').modal('hide');
      }           
    });
  }
});

$('#addProveedorModal').on('hidden.bs.modal', function(e) {
  $(this).find('#add_proveedor')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Look */

$('#lookProveedorModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_prov = button.data('nombr_prov') 
  $('#look_nombr_prov').val(nombr_prov)
  var telef_prov = button.data('telef_prov') 
  $('#look_telef_prov').val(telef_prov)
  var email_prov = button.data('email_prov') 
  $('#look_email_prov').val(email_prov)
  var direc_prov = button.data('direc_prov') 
  $('#look_direc_prov').val(direc_prov)
  var ident_prov = button.data('ident_prov') 
  $('#look_id').val(ident_prov)
})

$( "#look_cliente" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/ver_proveedor.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#lookProveedorModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Edit */

$('#editProveedorModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_prov = button.data('nombr_prov') 
  $('#edit_nombr_prov').val(nombr_prov)
  var telef_prov = button.data('telef_prov') 
  $('#edit_telef_prov').val(telef_prov)
  var email_prov = button.data('email_prov') 
  $('#edit_email_prov').val(email_prov)
  var direc_prov = button.data('direc_prov') 
  $('#edit_direc_prov').val(direc_prov)
  var ident_prov = button.data('ident_prov') 
  $('#edit_id').val(ident_prov)
})

$( "#edit_proveedor" ).validate( {

    rules: {
      edit_nombr_prov: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      edit_telef_prov: {
        required: true,
        number: false,
        minlength: 15
      },
      edit_email_prov: {
        required: true,
        email: true
      },
      edit_direc_prov: {
        required: true,
        minlength: 2
      },
    },

    messages: {
      edit_nombr_prov: {
        required: "Ingrese un Nombre",
        minlength: "El Nombre debe contener al menos 2 caracteres"
      },
      edit_telef_prov: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      edit_email_prov: {
        required: "Ingrese una Dirección de Correo Electrónico Válida",
        email: "Ingrese una Dirección de Correo Electrónico Válida"
      },
      edit_direc_prov: {
        required: "Ingrese una Dirección",
        minlength: "La Direccióon debe contener al menos 2 caracteres"
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
    },

    submitHandler: function( form ) {

    var parametros = $( form ).serialize(); // I change 'this' to form
    console.log(parametros); // for test purpose. See your log to confirm the result data

    $.ajax({
      type: "POST",
      url: "../ajax/editar_proveedor.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#editProveedorModal').modal('hide');
      }                     
    });
  }
});

$('#editProveedorModal').on('hidden.bs.modal', function(e) {
  $(this).find('#edit_proveedor')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Delete */

$('#deleteProveedorModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_prov = button.data('ident_prov') 
  $('#delete_id').val(ident_prov)
})

$( "#delete_proveedor" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/eliminar_proveedor.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#deleteProveedorModal').modal('hide');
		  }
	});
  event.preventDefault();
});

/* Masks */

$('.telef-mask').mask('(0000) 000 0000');


