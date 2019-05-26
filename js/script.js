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
		$('#editProductModal').on('show.bs.modal', function (event) {
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
		  $('#edit_telf_clie').val(telf_clie)
		  var email_clie = button.data('email_clie') 
		  $('#edit_email_clie').val(email_clie)
		  var usuar_clie = button.data('usuar_clie') 
		  $('#edit_usuar_clie').val(usuar_clie)
		  var ident_clie = button.data('ident_clie') 
		  $('#edit_ident_clie').val(ident_clie)
		})
		
		$('#deleteProductModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var id = button.data('id') 
		  $('#delete_id').val(id)
		})
		
		
		$( "#edit_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
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
					$('#editProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		
		$( "#add_product" ).submit(function( event ) {
		  var parametros = $(this).serialize();
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
					$('#addProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});
		
		$( "#delete_product" ).submit(function( event ) {
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
					$('#deleteProductModal').modal('hide');
				  }
			});
		  event.preventDefault();
		});