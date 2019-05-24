<script type="text/javascript">
  $.validator.setDefaults( {
      submitHandler: function () {
        alert( "submitted!" );
      }
    } );

    $( document ).ready( function () {
      $( "#usuario_registro" ).validate( {
        rules: {
          nomb1_clie: {
            required: true,
            minlength: 2
          },
          apel1_clie: {
            required: true,
            minlength: 2
          },
          usuar_clie: {
            required: true,
            minlength: 2
          },
          contra_clie: {
            required: true,
            minlength: 5
          },
          confirm_password: {
            required: true,
            minlength: 5,
            equalTo: "#contra_clie"
          },
          telef_clie: {
            required: true,
            minlength: 11
          },
          email_clie: {
            required: true,
            email: true
          },
      
        },
        messages: {
          nomb1_clie: {
            required: "Ingrese su Primer Nombre",
            minlength: "Tu Nombre debe contener al menos 2 caracteres" 
          },
          apel1_clie: {
            required: "Ingrese su Primer Apellido",
            minlength: "Tu Apellido debe contener al menos 2 caracteres"
          },
          usuar_clie: {
            required: "Ingrese un Nombre de Usuario",
            minlength: "Tu Nombre de Usuario debe contener al menos 2 caracteres"
          },
          contra_clie: {
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
</script>