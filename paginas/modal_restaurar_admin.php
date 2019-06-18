<div id="restaurarAdminModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form name="restaurar_admin" id="restaurar_admin">
				<div class="modal-header">						
					<h4 class="modal-title">Restaurar Administrador</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">					
					<p>¿Seguro que quieres restaurar este registro?</p>
					<p class="text-success"><small>Se restaurará el Administrador.</small></p>
					<input type="hidden" name="restaurar_id" id="restaurar_id">
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-light" data-dismiss="modal" value="Cancelar">
					<input type="submit" class="btn btn-success" value="Restaurar">
				</div>
			</form>
		</div>
	</div>
</div>