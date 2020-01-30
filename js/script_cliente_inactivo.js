$(function() {
	load(1);
});
function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../../ajax/cliente/listar_clientes_inactivos.php',
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

$('#restaurarClienteModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_usua = button.data('ident_usua') 
  $('#restaurar_id').val(ident_usua)
})


$( "#restaurar_cliente" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../../ajax/cliente/restaurar_cliente.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#restaurarClienteModal').modal('hide');
		  }
	});
  event.preventDefault();
});