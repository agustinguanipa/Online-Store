/* usuario_registro */

$( document ).ready( function () {
  $( "#usuario_registro" ).validate( {
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
        minlength: 2,
        remote: {
          url: "../paginas/usuario_usuario_availability.php",
          type: "post",
          data:
            {
              usuar_clie: function()
              {
                return $('#usuario_registro :input[name="usuar_clie"]').val();
              }
            }
        }     
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
        email: true,
        remote: {
          url: "../paginas/usuario_email_availability.php",
          type: "post",
          data:
            {
              email_clie: function()
              {
                return $('#usuario_registro :input[name="email_clie"]').val();
              }
            }
        }  
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
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres",
        remote: jQuery.validator.format("{0} no esta disponible")
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
      email_clie: {
        required: "Ingrese una Dirección de Correo Electrónico Válida",
        email: "Ingrese una Dirección de Correo Electrónico Válida",
        remote: jQuery.validator.format("{0} no esta disponible")
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
    }
  } );

} );

/* usuario_inicio */

$( document ).ready( function () {
  $( "#usuario_inicio" ).validate( {
    rules: {
      usuar_clie: {
        required: true,
        minlength: 2
      },
      contr_clie: {
        required: true,
        minlength: 5
      }
    },

    messages: {
      usuar_clie: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
      },
      contr_clie: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
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
    }
  } );

} );

/* usuario_modificar */

$( document ).ready( function () {
  $( "#usuario_modificar" ).validate( {
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
    }
  } );

} );

/* admin_inicio */

$( document ).ready( function () {
  $( "#admin_inicio" ).validate( {
    rules: {
      usuar_admi: {
        required: true,
        minlength: 2
      },
      contr_admi: {
        required: true,
        minlength: 5
      }
    },

    messages: {
      usuar_admi: {
        required: "Ingrese un Nombre de Usuario",
        minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
      },
      contr_admi: {
        required: "Ingrese una Contraseña",
        minlength: "Tu Contraseña debe contener al menos 5 caracteres"
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
    }
  } );

} );

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[A-Z^\s]+$/i.test(value);
}, "Letters only please"); 

/* Masks */

$('.telef-mask').mask('(0000) 000 0000');
$('.pesoo-mask').mask('##.##0,00', {reverse: true});
$('.preci-mask').mask('000.000.000.000.000,00', {reverse: true});
$('.taman-mask').mask('###.00 x ###.00 x ###.00', {reverse: false});

