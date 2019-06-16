$(function() {
	load(1);
});
function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../ajax/listar_admins.php',
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

$('#editAdminModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nomb1_admi = button.data('nomb1_admi') 
  $('#edit_nomb1_admi').val(nomb1_admi)
  var nomb2_admi = button.data('nomb2_admi') 
  $('#edit_nomb2_admi').val(nomb2_admi)
  var apel1_admi = button.data('apel1_admi') 
  $('#edit_apel1_admi').val(apel1_admi)
  var apel2_admi = button.data('apel2_admi')
  $('#edit_apel2_admi').val(apel2_admi)
  var usuar_admi = button.data('usuar_admi') 
  $('#edit_usuar_admi').val(usuar_admi)
  var ident_admi = button.data('ident_admi') 
  $('#edit_id').val(ident_admi)
})

$('#deleteAdminModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_admi = button.data('ident_admi') 
  $('#delete_id').val(ident_admi)
})


$( "#edit_admin" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/editar_admin.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#editAdminModal').modal('hide');
		  }
	});
  event.preventDefault();
});

$( "#add_admin" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $('form :input').val('');
	$.ajax({
			type: "POST",
			url: "../ajax/guardar_admin.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#addAdminModal').modal('hide');
		  }
	});
  
  event.preventDefault();
  
});

$( document ).ready( function () {
  $( "#add_adminte" ).validate( {
    rules: {
      nomb1_admi: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      nomb2_admi: {
        lettersonly: true,
        minlength: 2
      },
      apel1_admi: {
        required: true,
        lettersonly: true,
        minlength: 2
      },
      apel2_admi: {
        lettersonly: true,
        minlength: 2
      },
      usuar_admi: {
        required: true,
        minlength: 2
      },
      contr_admi: {
        required: true,
        minlength: 5
      },
      confirm_password: {
        required: true,
        minlength: 5,
        equalTo: "#contr_admi"
      },
      telef_admi: {
        required: true,
        number: false,
        minlength: 15
      },
      email_admi: {
        required: true,
        email: true
      },
    },

    messages: {
      nomb1_admi: {
        required: "Ingrese su Primer Nombre",
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      nomb2_admi: {
        lettersonly: "Tu Nombre solo debe contener letras sin espacios",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      apel1_admi: {
        required: "Ingrese su Primer Apellido",
        lettersonly: "Tu Apellido solo debe contener letras sin espacios",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      apel2_admi: {
        lettersonly: "Tu Apellido solo debe contener letras sin espacio",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      usuar_admi: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
      },
      contr_admi: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
      },
      confirm_password: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres",
        equalTo: "Ingrese la Misma Contraseña"
      },
      telef_admi: {
        required: "Ingrese un Número de Teléfono Valido",
        number: "Ingrese un Número de Teléfono Valido",
        minlength: "Ingrese un Número de Teléfono Valido"
      },
      email_admi: "Ingrese una Dirección de Correo Electrónico Válida"
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

$( "#delete_admin" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/eliminar_admin.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#deleteAdminModal').modal('hide');
		  }
	});
  event.preventDefault();
});