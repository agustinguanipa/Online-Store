$(function() {
	load(1);
});
function load(page){
	var query=$("#q").val();
	var per_page=10;
	var parametros = {"action":"ajax","page":page,'query':query,'per_page':per_page};
	$("#loader").fadeIn('slow');
	$.ajax({
		url:'../../ajax/proveedor/listar_proveedores_inactivos.php',
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

$('#restaurarProveedorModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var ident_prov = button.data('ident_prov') 
  $('#restaurar_id').val(ident_prov)
})


$( "#restaurar_proveedor" ).submit(function( event ) {
  var parametros = $(this).serialize();
	$.ajax({
			type: "POST",
			url: "../../ajax/proveedor/restaurar_proveedor.php",
			data: parametros,
			 beforeSend: function(objeto){
				$("#resultados").html("Enviando...");
			  },
			success: function(datos){
			$("#resultados").html(datos);
			load(1);
			$('#restaurarProveedorModal').modal('hide');
		  }
	});
  event.preventDefault();
});