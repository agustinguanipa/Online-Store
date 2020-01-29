<?php

/* Base de Datos*/
require_once ("../paginas/conexion_bd.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tabma_prov";
	$campos="*";
	$sWhere=" (tabma_prov.nombr_prov LIKE '%".$query."%' OR tabma_prov.telef_prov LIKE '%".$query."%' OR tabma_prov.email_prov LIKE '%".$query."%' OR tabma_prov.direc_prov LIKE '%".$query."%') AND tabma_prov.statu_prov = 1";
	$sWhere.=" order by tabma_prov.ident_prov";
	
	/* Pagination */
	include 'pagination.php';

	//Variables de la Paginación

	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); // Cuantos Registros para Mostrar
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Contador del Total de Registros en la Tabla
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//Query de los Datos
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//Loop del Query de los Datos
	
	if ($numrows>0){		
?>
	<div class="table-responsive">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th class='text-center'>ID</th>
					<th class='text-center'>Nombre</th>
					<th class='text-center'>Telefono</th>
					<th class='text-center'>E-Mail</th>
					<th class='text-center'>Ver</th>
					<th class='text-center'>Editar</th>
					<th class='text-center'>Borrar</th>
				</tr>
			</thead>
			<tbody>	
					<?php 
					$finales=0;
					while($row = mysqli_fetch_array($query)){	
						$ident_proveedor=$row['ident_prov'];
						$nombr_prov=$row['nombr_prov'];
						$telef_prov=$row['telef_prov'];
						$email_prov=$row['email_prov'];
						$direc_prov=$row['direc_prov'];			
						$finales++;
					?>	
					<tr class="">
						<td class='text-center'><?php echo $ident_proveedor;?></td>
						<td class='text-center'><?php echo $nombr_prov;?></td>
						<td class='text-center'><?php echo $telef_prov;?></td>
						<td class='text-center'><?php echo $email_prov;?></td>
						<td class='text-center'>
							<a href="#"  data-target="#lookProveedorModal" class="look" data-toggle="modal" data-nombr_prov="<?php echo $nombr_prov?>" data-telef_prov="<?php echo $telef_prov?>" data-email_prov="<?php echo $email_prov?>" data-direc_prov="<?php echo $direc_prov?>" data-ident_prov="<?php echo $ident_proveedor; ?>"><i class="fa fa-eye" data-toggle="tooltip" title="Ver" ></i></a>
	          </td>
						<td class='text-center'>
							<a href="#"  data-target="#editProveedorModal" class="edit" data-toggle="modal" data-nombr_prov="<?php echo $nombr_prov?>" data-telef_prov="<?php echo $telef_prov?>" data-email_prov="<?php echo $email_prov?>" data-direc_prov="<?php echo $direc_prov?>" data-ident_prov="<?php echo $ident_proveedor; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Editar" ></i></a>
	          </td>
	          <td class='text-center'>
							<a href="#deleteProveedorModal" class="delete" data-toggle="modal" data-ident_prov="<?php echo $ident_proveedor;?>"><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></a>
	          </td>
					</tr>
					<?php }?>
					<tr>
						<td colspan='10'> 
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
		  
