$(function() {
	load(1);
});

function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../ajax/listar_productos.php',
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

$( "#add_producto" ).validate( {

    rules: {
      nombr_prod: {
        required: true,
        minlength: 2
      },
      desco_prod: {
        required: true,
        minlength: 5
      },
      desla_prod: {
        required: true,
        minlength: 10
      },
      preci_prod: {
        required: true,
        number: false,
        minlength: 2
      },
      pesoo_prod: {
        required: true,
        number: true,
        minlength: 2
      },
      taman_prod: {
        required: true,
        number: true,
        minlength: 2
      },
      stock_prod: {
        required: true,
        number: true,
        minlength: 2
      },
      estad_prod: {
        required: true,
        number: true,
        minlength: 2
      }
    },

    messages: {
      nombr_prod: {
        required: "Ingrese el Nombre del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desco_prod: {
        required: "Ingrese la Descripcion Corta del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desla_prod: {
        required: "Ingrese la Descripcion Larga del Producto",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      preci_prod: {
        required: "Ingrese el Precio del Producto",
        number: "Solo Numeros"
      },
      pesoo_prod: {
        required: "Ingrese el Peso del Producto",
        number: "Solo Numeros"
      },
      taman_prod: {
        required: "Ingrese el Tamaño del Producto",
        number: "Solo Numeros"
      },
      stock_prod: {
        required: "Ingrese el Precio del Producto",
        number: "Solo Numeros"
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
    $('form :input').val('');

    $.ajax({
      type: "POST",
      url: "../ajax/guardar_producto.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#addProductoModal').modal('hide');
      }                     
    });
  }
});

/* Look */

$('#lookProductoModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_prod = button.data('nombr_prod') 
  $('#look_nombr_prod').val(nombr_prod)
  var desco_prod = button.data('desco_prod') 
  $('#look_desco_prod').val(desco_prod)
  var desla_prod = button.data('desla_prod') 
  $('#look_desla_prod').val(desla_prod)
  var preci_prod = button.data('preci_prod') 
  $('#look_preci_prod').val(preci_prod)
  var preci_prod = button.data('preci_prod') 
  $('#look_preci_prod').val(preci_prod)
  var pesoo_prod = button.data('pesoo_prod') 
  $('#look_pesoo_prod').val(pesoo_prod)
  var taman_prod = button.data('taman_prod') 
  $('#look_taman_prod').val(taman_prod)
  var stock_prod = button.data('stock_prod') 
  $('#look_stock_prod').val(stock_prod)
  var estad_prod = button.data('estad_prod') 
  $('#look_estad_prod').val(estad_prod)
  var ident_prod = button.data('ident_prod') 
  $('#look_id').val(ident_prod)
})

$( "#look_producto" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/ver_producto.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#lookProductoModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Edit */

$('#editProductoModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_prod = button.data('nombr_prod') 
  $('#edit_nombr_prod').val(nombr_prod)
  var nomb2_prod = button.data('nomb2_prod') 
  $('#edit_nomb2_prod').val(nomb2_prod)
  var apel1_prod = button.data('apel1_prod') 
  $('#edit_apel1_prod').val(apel1_prod)
  var apel2_prod = button.data('apel2_prod') 
  $('#edit_apel2_prod').val(apel2_prod)
  var gener_prod = button.data('gener_prod') 
  $('#edit_gener_prod').val(gener_prod)
  var telef_prod = button.data('telef_prod') 
  $('#edit_telef_prod').val(telef_prod)
  var usuar_prod = button.data('usuar_prod') 
  $('#edit_usuar_prod').val(usuar_prod)
  var ident_prod = button.data('ident_prod') 
  $('#edit_id').val(ident_prod)
})

$( "#edit_producto" ).validate( {

    rules: {
      edit_nombr_prod: {
        required: true,
        minlength: 2
      },
      edit_desco_prod: {
        required: true,
        lettersonly: true,
        minlength: 5
      },
      edit_desla_prod: {
        required: true,
        minlength: 10
      },
      edit_preci_prod: {
        number: true,
        minlength: 2
      },
      edit_pesoo_prod: {
        number: true,
        minlength: 2
      },
      edit_taman_prod: {
        number: true,
        minlength: 2
      },
      edit_stock_prod: {
        number: true,
        minlength: 2
      },
      edit_estad_prod: {
        minlength: 2
      }
    },

    messages: {
      nombr_prod: {
        required: "Ingrese el Nombre del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desco_prod: {
        required: "Ingrese la Descripcion Corta del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desla_prod: {
        required: "Ingrese la Descripcion Larga del Producto",
        minlength: "Tu Apellido debe contener al menos 2 caracteres"
      },
      preci_prod: {
        number: "Solo Numeros"
      },
      pesoo_prod: {
        number: "Solo Numeros"
      },
      taman_prod: {
        number: "Solo Numeros"
      },
      stock_prod: {
        number: "Solo Numeros"
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
    $('form :input').val('');

    $.ajax({
      type: "POST",
      url: "../ajax/editar_producto.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#editProductoModal').modal('hide');
      }                     
    });
  }
});

/* Delete */

$('#deleteProductoModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_prod = button.data('ident_prod') 
  $('#delete_id').val(ident_prod)
})

$( "#delete_producto" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/eliminar_producto.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#deleteProductoModal').modal('hide');
		  }
	});
  event.preventDefault();
});

