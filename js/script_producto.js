$(function() {
	load(1);
});

function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../../ajax/producto/listar_productos.php',
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
      ident_prod: {
        required: true,
        minlength: 2,
        remote: {
          url: "../../paginas/administrador/producto_ident_availability.php",
          type: "post",
          data:
            {
              ident_prod: function()
              {
                return $('#add_producto :input[name="ident_prod"]').val();
              }
            }
        }     
      },
      ident_cate: {
        required: true
      },
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
        minlength: 1
      }
    },

    messages: {
      ident_prod: {
        required: "Ingrese el Codigo del Producto",
        minlength: "El Código debe contener al menos 2 caracteres",
        remote: jQuery.validator.format("{0} no esta disponible")
      },
      ident_cate: {
        required: "Ingrese una Categoría para el Producto"
      },
      nombr_prod: {
        required: "Ingrese el Nombre del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desco_prod: {
        required: "Ingrese la Descripcion Corta del Producto",
        minlength: "La Descripcion Corta debe contener al menos 5 caracteres"
      },
      desla_prod: {
        required: "Ingrese la Descripcion Larga del Producto",
        minlength: "La Descripcion Larga debe contener al menos 10 caracteres"
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
        required: "Ingrese el Stock del Producto",
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

    var form = $('form')[0]; // You need to use standard javascript object here
    var formData = new FormData(form); // I change 'this' to form
    console.log(formData); // for test purpose. See your log to confirm the result data

    $.ajax({
      type: "POST",
      url: "../../ajax/producto/guardar_producto.php",
      data: formData,
      contentType: false,
      processData: false,
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

$('#addProductoModal').on('hidden.bs.modal', function(e) {
  $(this).find('#add_producto')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Look */

$('#lookProductoModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_cate = button.data('ident_cate') 
  $('#look_ident_cate').val(ident_cate)
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
      url: "../../ajax/producto/ver_producto.php",
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
  var ident_cate = button.data('ident_cate') 
  $('#edit_ident_cate').val(ident_cate)
  var ident_prov = button.data('ident_prov') 
  $('#edit_ident_prov').val(ident_prov)
  var nombr_prod = button.data('nombr_prod') 
  $('#edit_nombr_prod').val(nombr_prod)
  var desco_prod = button.data('desco_prod') 
  $('#edit_desco_prod').val(desco_prod)
  var desla_prod = button.data('desla_prod') 
  $('#edit_desla_prod').val(desla_prod)
  var preci_prod = button.data('preci_prod') 
  $('#edit_preci_prod').val(preci_prod)
  var pesoo_prod = button.data('pesoo_prod') 
  $('#edit_pesoo_prod').val(pesoo_prod)
  var taman_prod = button.data('taman_prod') 
  $('#edit_taman_prod').val(taman_prod)
  var stock_prod = button.data('stock_prod') 
  $('#edit_stock_prod').val(stock_prod)
  var estad_prod = button.data('estad_prod') 
  $('#edit_estad_prod').val(estad_prod)
  var ident_prod = button.data('ident_prod') 
  $('#edit_id').val(ident_prod)
})

$( "#edit_producto" ).validate( {

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
      }
    },

    messages: {
      nombr_prod: {
        required: "Ingrese el Nombre del Producto",
        minlength: "Tu Nombre debe contener al menos 2 caracteres"
      },
      desco_prod: {
        required: "Ingrese la Descripcion Corta del Producto",
        minlength: "La Descripcion Corta debe contener al menos 5 caracteres"
      },
      desla_prod: {
        required: "Ingrese la Descripcion Larga del Producto",
        minlength: "La Descripcion Larga debe contener al menos 10 caracteres"
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

    $.ajax({
      type: "POST",
      url: "../../ajax/producto/editar_producto.php",
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

$('#editProductoModal').on('hidden.bs.modal', function(e) {
  $(this).find('#edit_producto')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
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
			url: "../../ajax/producto/eliminar_producto.php",
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

