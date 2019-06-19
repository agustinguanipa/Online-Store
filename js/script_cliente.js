$(function() {
	load(1);
});
function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../ajax/listar_clientes.php',
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

$( "#add_" ).submit(function( event ) {

  var parametros = $(this).serialize();
  $('form :input').val('');
  $.ajax({
      type: "POST",
      url: "../ajax/guardar_cliente.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#addClienteModal').modal('hide');
      }
  });
  
  event.preventDefault();
  
});


$( "#add_cliente" ).validate( {

    rules: {
      nomb1_clie: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      nomb2_clie: {
        lettersonly: true,
        minlength: 2
      },
      apel1_clie: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apel2_clie: {
        lettersonly: true,
        minlength: 2
      },
      usuar_clie: {
        required: true,
        minlength: 2
      },
      contr_clie: {
        required: true,
        minlength: 5
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: "#contr_clie"
      },
      telef_clie: {
        required: true,
        number: false,
        minlength: 15
      },
      email_clie: {
        required: true,
        email: true
      },
    },

    messages: {
      nomb1_clie: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      nomb2_clie: {
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      apel1_clie: {
        required: "Ingrese su Primer Apellido",
        lettersonly: "Tu Apellido solo debe contener letras sin espacios",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      apel2_clie: {
        lettersonly: "Tu Apellido solo debe contener letras sin espacio",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      usuar_clie: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
      },
      contr_clie: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      },
      confirm_password: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres",
        equalTo: "Ingrese la Misma Contraseña"
      },
      telef_clie: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_clie: "Ingrese una Dirección de Correo Electrónico Válida"
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
      
      var parametros = $(this).serialize();
      $('form :input').val('');
      $.ajax({
        type: "POST",
        url: "../ajax/guardar_cliente.php",
        data: parametros,
         beforeSend: function(objeto){
          $("#resultados").html("Enviando...");
          },
        success: function(datos){
        $("#resultados").html(datos);
        load(1);
        $('#addClienteModal').modal('hide');
        }                     
      });
    }
});


/* Look */

$('#lookClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nomb1_clie = button.data('nomb1_clie') 
  $('#look_nomb1_clie').val(nomb1_clie)
  var nomb2_clie = button.data('nomb2_clie') 
  $('#look_nomb2_clie').val(nomb2_clie)
  var apel1_clie = button.data('apel1_clie') 
  $('#look_apel1_clie').val(apel1_clie)
  var apel2_clie = button.data('apel2_clie') 
  $('#look_apel2_clie').val(apel2_clie)
  var gener_clie = button.data('gener_clie') 
  $('#look_gener_clie').val(gener_clie)
  var telef_clie = button.data('telef_clie') 
  $('#look_telef_clie').val(telef_clie)
  var email_clie = button.data('email_clie') 
  $('#look_email_clie').val(email_clie)
  var usuar_clie = button.data('usuar_clie') 
  $('#look_usuar_clie').val(usuar_clie)
  var ident_clie = button.data('ident_clie') 
  $('#look_id').val(ident_clie)
})

$( "#look_cliente" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/ver_cliente.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#lookClienteModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Edit */

$('#editClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nomb1_clie = button.data('nomb1_clie') 
  $('#edit_nomb1_clie').val(nomb1_clie)
  var nomb2_clie = button.data('nomb2_clie') 
  $('#edit_nomb2_clie').val(nomb2_clie)
  var apel1_clie = button.data('apel1_clie') 
  $('#edit_apel1_clie').val(apel1_clie)
  var apel2_clie = button.data('apel2_clie') 
  $('#edit_apel2_clie').val(apel2_clie)
  var gener_clie = button.data('gener_clie') 
  $('#edit_gener_clie').val(gener_clie)
  var telef_clie = button.data('telef_clie') 
  $('#edit_telef_clie').val(telef_clie)
  var email_clie = button.data('email_clie') 
  $('#edit_email_clie').val(email_clie)
  var usuar_clie = button.data('usuar_clie') 
  $('#edit_usuar_clie').val(usuar_clie)
  var ident_clie = button.data('ident_clie') 
  $('#edit_id').val(ident_clie)
})

$( "#edit_cliente" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/editar_cliente.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#editClienteModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Delete */

$('#deleteClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_clie = button.data('ident_clie') 
  $('#delete_id').val(ident_clie)
})

$( "#delete_cliente" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/eliminar_cliente.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#deleteClienteModal').modal('hide');
		  }
	});
  event.preventDefault();
});

