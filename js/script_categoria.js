$(function() {
	load(1);
});

function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../ajax/listar_categorias.php',
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

$( "#add_categoria" ).validate( {

    rules: {
      nombr_cate: {
        required: true,
        lettersonly: false,
        minlength: 2,
        remote: {
          url: "../paginas/admin_categoria_availability.php",
          type: "post",
          data:
            {
              nombr_cate: function()
              {
                return $('#add_categoria :input[name="nombr_cate"]').val();
              }
            }
        }     
      }
    },

    messages: {
      nombr_cate: {
        required: "Ingrese el Nombre de la Categoria",
        lettersonly: "El Nombre solo debe contener letras sin espacios",
        minlength: "El Nombre debe contener al menos 2 caracteres",
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
    },

    submitHandler: function( form ) {

    var parametros = $( form ).serialize(); // I change 'this' to form
    console.log(parametros); // for test purpose. See your log to confirm the result data

    $.ajax({
      type: "POST",
      url: "../ajax/guardar_categoria.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#addCategoriaModal').modal('hide');
      }                     
    });
  }
});

$('#addCategoriaModal').on('hidden.bs.modal', function(e) {
  $(this).find('#add_categoria')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Look */

$('#lookCategoriaModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_cate = button.data('nombr_cate') 
  $('#look_nombr_cate').val(nombr_cate)
  var ident_cate = button.data('ident_cate') 
  $('#look_id').val(ident_cate)
})

$( "#look_Categoria" ).submit(function( event ) {
  var parametros = $(this).serialize();
  $.ajax({
      type: "POST",
      url: "../ajax/ver_categoria.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#lookCategoriaModal').modal('hide');
      }
  });
  event.preventDefault();
});

/* Edit */

$('#editCategoriaModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var nombr_cate = button.data('nombr_cate') 
  $('#edit_nombr_cate').val(nombr_cate)
  var ident_cate = button.data('ident_cate') 
  $('#edit_id').val(ident_cate)
})

$( "#edit_categoria" ).validate( {

    rules: {
      edit_nombr_cate: {
        required: true,
        lettersonly: true,
        minlength: 2,
        remote: {
          url: "../paginas/admin_categoria_availability.php",
          type: "post",
          data:
            {
              nombr_cate: function()
              {
                return $('#add_categoria :input[name="nombr_cate"]').val();
              }
            }
        }     
      }
    },

    messages: {
      nombr_cate: {
        required: "Ingrese el Nombre de la Categoria",
        lettersonly: "El Nombre solo debe contener letras sin espacios",
        minlength: "El Nombre debe contener al menos 2 caracteres",
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
    },

    submitHandler: function( form ) {

    var parametros = $( form ).serialize(); // I change 'this' to form
    console.log(parametros); // for test purpose. See your log to confirm the result data

    $.ajax({
      type: "POST",
      url: "../ajax/editar_categoria.php",
      data: parametros,
       beforeSend: function(objeto){
        $("#resultados").html("Enviando...");
        },
      success: function(datos){
      $("#resultados").html(datos);
      load(1);
      $('#editCategoriaModal').modal('hide');
      }                     
    });
  }
});

$('#editCategoriaModal').on('hidden.bs.modal', function(e) {
  $(this).find('#edit_categoria')[0].reset();
  $(this).find('.is-valid').removeClass('is-valid');
});

/* Delete */

$('#deleteCategoriaModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_cate = button.data('ident_cate') 
  $('#delete_id').val(ident_cate)
})

$( "#delete_categoria" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../ajax/eliminar_categoria.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#deleteCategoriaModal').modal('hide');
		  }
	});
  event.preventDefault();
});

