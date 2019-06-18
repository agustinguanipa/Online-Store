<div id="deleteClienteModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="delete_cliente" id="delete_cliente">
				<div class="modal-header">						
					<h4 class="modal-title">Desactivar Cliente</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres desactivar este registro?</p>
					<p class="text-danger"><small>Se desactivará el cliente.</small></p>
					<input type="hidden" name="delete_id" id="delete_id">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-danger" value="Desactivar">
				</div>
			</form>
		</div>
	</div>
</div>