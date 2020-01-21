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

$( "#add_cliente" ).validate( {

    rules: {
      nomb1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      nomb2_usua: {
        lettersonly: true,
        minlength: 2
      },
      apel1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apel2_usua: {
        lettersonly: true,
        minlength: 2
      },
      gener_usua: {
        required: true
      },
      telef_usua: {
        required: true,
        number: false,
        minlength: 15
      },
      email_usua: {
        required: true,
        email: true,
        remote: {
          url: "../paginas/usuario_email_availability.php",
          type: "post",
          data:
            {
              email_usua: function()
              {
                return $('#add_cliente :input[name="email_usua"]').val();
              }
            }
        }     
      },
      usuar_usua: {
        required: true,
        minlength: 2,
        remote: {
          url: "../paginas/usuario_usuario_availability.php",
          type: "post",
          data:
            {
              usuar_usua: function()
              {
                return $('#add_cliente :input[name="usuar_usua"]').val();
              }
            }
        }     
      },
      contr_usua: {
        required: true,
        minlength: 5
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: "#contr_usua"
      },
      
    },

    messages: {
      nomb1_usua: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      nomb2_usua: {
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      apel1_usua: {
        required: "Ingrese su Primer Apellido",
        lettersonly: "Tu Apellido solo debe contener letras sin espacios",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      apel2_usua: {
        lettersonly: "Tu Apellido solo debe contener letras sin espacio",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      gener_usua: {
        required: "Seleccione una Opción"
      },
      telef_usua: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_usua: {
        required: "Ingrese una Dirección de Correo Electrónico Válida",
        email: "Ingrese una Dirección de Correo Electrónico Válida",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
      usuar_usua: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
      contr_usua: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      },
      confirm_password: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres",
        equalTo: "Ingrese la Misma Contraseña"
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

$('#addClienteModal').on('hidden.bs.modal', function(e) {
  $(this).find('#add_cliente')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Look */

$('#lookClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nomb1_usua = button.data('nomb1_usua') 
  $('#look_nomb1_usua').val(nomb1_usua)
  var nomb2_usua = button.data('nomb2_usua') 
  $('#look_nomb2_usua').val(nomb2_usua)
  var apel1_usua = button.data('apel1_usua') 
  $('#look_apel1_usua').val(apel1_usua)
  var apel2_usua = button.data('apel2_usua') 
  $('#look_apel2_usua').val(apel2_usua)
  var gener_usua = button.data('gener_usua') 
  $('#look_gener_usua').val(gener_usua)
  var telef_usua = button.data('telef_usua') 
  $('#look_telef_usua').val(telef_usua)
  var email_usua = button.data('email_usua') 
  $('#look_email_usua').val(email_usua)
  var usuar_usua = button.data('usuar_usua') 
  $('#look_usuar_usua').val(usuar_usua)
  var fecre_usua = button.data('fecre_usua') 
  $('#look_fecre_usua').val(fecre_usua)
  var ident_usua = button.data('ident_usua') 
  $('#look_id').val(ident_usua)
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
  var nomb1_usua = button.data('nomb1_usua') 
  $('#edit_nomb1_usua').val(nomb1_usua)
  var nomb2_usua = button.data('nomb2_usua') 
  $('#edit_nomb2_usua').val(nomb2_usua)
  var apel1_usua = button.data('apel1_usua') 
  $('#edit_apel1_usua').val(apel1_usua)
  var apel2_usua = button.data('apel2_usua') 
  $('#edit_apel2_usua').val(apel2_usua)
  var gener_usua = button.data('gener_usua') 
  $('#edit_gener_usua').val(gener_usua)
  var telef_usua = button.data('telef_usua') 
  $('#edit_telef_usua').val(telef_usua)
  var usuar_usua = button.data('usuar_usua') 
  $('#edit_usuar_usua').val(usuar_usua)
  var ident_usua = button.data('ident_usua') 
  $('#edit_id').val(ident_usua)
})

$( "#edit_cliente" ).validate( {

    rules: {
      edit_nomb1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      edit_nomb2_usua: {
        lettersonly: true,
        minlength: 2
      },
      edit_apel1_usua: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      edit_apel2_usua: {
        lettersonly: true,
        minlength: 2
      },
      edit_telef_usua: {
        required: true,
        number: false,
        minlength: 15
      }
    },

    messages: {
      edit_nomb1_usua: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      edit_nomb2_usua: {
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      edit_apel1_usua: {
        required: "Ingrese su Primer Apellido",
        lettersonly: "Tu Apellido solo debe contener letras sin espacios",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      edit_apel2_usua: {
        lettersonly: "Tu Apellido solo debe contener letras sin espacio",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      edit_telef_usua: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      }
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
      url: "../ajax/editar_Cliente.php",
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
  }
});

$('#editClienteModal').on('hidden.bs.modal', function(e) {
  $(this).find('#edit_Cliente')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Delete */

$('#deleteClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_usua = button.data('ident_usua') 
  $('#delete_id').val(ident_usua)
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

/* Masks */

$('.telef-mask').mask('(0000) 000 0000');


