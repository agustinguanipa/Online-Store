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

/* Add */

$( "#add_admin" ).validate( {

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
        minlength: 2,
        remote: {
          url: "../paginas/admin_usuario_availability.php",
          type: "post",
          data:
            {
              usuar_admi: function()
              {
                return $('#add_admin :input[name="usuar_admi"]').val();
              }
            }
        }     
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
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres",
        remote: jQuery.validator.format("{0} no esta disponible")
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
  }
});

/* Look */

$('#lookAdminModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nomb1_admi = button.data('nomb1_admi') 
  $('#look_nomb1_admi').val(nomb1_admi)
  var nomb2_admi = button.data('nomb2_admi') 
  $('#look_nomb2_admi').val(nomb2_admi)
  var apel1_admi = button.data('apel1_admi') 
  $('#look_apel1_admi').val(apel1_admi)
  var apel2_admi = button.data('apel2_admi') 
  $('#look_apel2_admi').val(apel2_admi)
  var usuar_admi = button.data('usuar_admi') 
  $('#look_usuar_admi').val(usuar_admi)
  var ident_admi = button.data('ident_admi') 
  $('#look_id').val(ident_admi)
})

$( "#look_admin" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/ver_admin.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#lookAdminModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Edit */

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
  var gener_admi = button.data('gener_admi') 
  $('#edit_gener_admi').val(gener_admi)
  var telef_admi = button.data('telef_admi') 
  $('#edit_telef_admi').val(telef_admi)
  var email_admi = button.data('email_admi') 
  $('#edit_email_admi').val(email_admi)
  var usuar_admi = button.data('usuar_admi') 
  $('#edit_usuar_admi').val(usuar_admi)
  var ident_admi = button.data('ident_admi') 
  $('#edit_id').val(ident_admi)
})

$( "#edit_admin" ).validate( {

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
    $('form :input').val('');

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
  }
});

/* Delete */

$('#deleteAdminModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_admi = button.data('ident_admi') 
  $('#delete_id').val(ident_admi)
})

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








