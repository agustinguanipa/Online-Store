<?php

require_once ("../../paginas/conexion_bd.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tabma_usua";
	$campos="*";
	$sWhere=" (tabma_usua.nomb1_usua LIKE '%".$query."%' OR tabma_usua.nomb2_usua LIKE '%".$query."%' OR tabma_usua.apel1_usua LIKE '%".$query."%' OR tabma_usua.apel2_usua LIKE '%".$query."%') AND tabma_usua.statu_usua = 0";
	$sWhere.=" order by tabma_usua.ident_usua";
	
	// Paginacion

	include '../pagination.php';

	// Variables de la Paginación

	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); // Cuantos Registros para Mostrar
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	// Contador del Total de Registros en la Tabla
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	// Query de los Datos
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	// Loop del Query de los Datos
	
	if ($numrows>0){		
?>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th class='text-center'>ID</th>
					<th class='text-center'>Nombres</th>
					<th class='text-center'>Apellidos</th>
					<th class='text-center'>Usuario</th>
					<th class='text-center'>Restaurar</th>
				</tr>
			</thead>
			<tbody>	
					<?php 
					$finales=0;
					while($row = mysqli_fetch_array($query)){	
						$ident_admin=$row['ident_usua'];
						$nomb1_usua=$row['nomb1_usua'];
						$nomb2_usua=$row['nomb2_usua'];
						$apel1_usua=$row['apel1_usua'];
						$apel2_usua=$row['apel2_usua'];
						$usuar_usua=$row['usuar_usua'];		
						$finales++;
					?>	
					<tr class="">
						<td class='text-center'><?php echo $ident_admin;?></td>
						<td class='text-center'><?php echo $row['nomb1_usua'].' '.$row['nomb2_usua']; ?></td>
						<td class='text-center'><?php echo $row['apel1_usua'].' '.$row['apel2_usua']; ?></td>
						<td class='text-center'><?php echo $usuar_usua;?></td>
	           <td class='text-center'>
							<a href="#restaurarAdminModal" class="restaurar" data-toggle="modal" data-ident_usua="<?php echo $ident_admin;?>"><i class="fa fa-check" data-toggle="tooltip" title="Restaurar"></i></a>
	           </td>
					</tr>
					<?php }?>
					<tr>
						<td colspan='9'> 
							<?php 
								$inicios=$offset+1;
								$finales+=$inicios -1;
								echo "Mostrando $inicios al $finales de $numrows registros";
								echo paginate( $page, $total_pages, $adjacents);
							?>
						</td>
					</tr>
			</tbody>			
		</table>
	</div>
	<?php	
	}	
}
?>          
		  
