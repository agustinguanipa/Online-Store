<?php

/* Base de Datos*/
require_once ("../paginas/conexion_bd.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tabma_admi";
	$campos="*";
	$sWhere=" (tabma_admi.nomb1_admi LIKE '%".$query."%' OR tabma_admi.nomb2_admi LIKE '%".$query."%' OR tabma_admi.apel1_admi LIKE '%".$query."%' OR tabma_admi.apel2_admi LIKE '%".$query."%') AND tabma_admi.statu_admi = 1";
	$sWhere.=" order by tabma_admi.ident_admi";
	
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
					<th class='text-center'>Nombres</th>
					<th class='text-center'>Apellidos</th>
					<th class='text-center'>Usuario</th>
					<th class='text-center'>Ver</th>
					<th class='text-center'>Editar</th>
					<!-- <th class='text-center'>Borrar</th> -->
				</tr>
			</thead>
			<tbody>	
					<?php 
					$finales=0;
					while($row = mysqli_fetch_array($query)){	
						$ident_admin=$row['ident_admi'];
						$nomb1_admi=$row['nomb1_admi'];
						$nomb2_admi=$row['nomb2_admi'];
						$apel1_admi=$row['apel1_admi'];
						$apel2_admi=$row['apel2_admi'];
						$usuar_admi=$row['usuar_admi'];		
						$finales++;
					?>	
					<tr class="">
						<td class='text-center'><?php echo $ident_admin;?></td>
						<td class='text-center'><?php echo $row['nomb1_admi'].' '.$row['nomb2_admi']; ?></td>
						<td class='text-center'><?php echo $row['apel1_admi'].' '.$row['apel2_admi']; ?></td>
						<td class='text-center'><?php echo $usuar_admi;?></td>
						<td class='text-center'>
							<a href="#"  data-target="#lookAdminModal" class="look" data-toggle="modal" data-nomb1_admi="<?php echo $nomb1_admi?>" data-nomb2_admi="<?php echo $nomb2_admi?>" data-apel1_admi="<?php echo $apel1_admi?>" data-apel2_admi="<?php echo $apel2_admi?>" data-usuar_admi="<?php echo $usuar_admi?>" data-ident_admi="<?php echo $ident_admin; ?>"><i class="fa fa-eye" data-toggle="tooltip" title="Ver" ></i></a>
	          </td>
						<td class='text-center'>
							<a href="#"  data-target="#editAdminModal" class="edit" data-toggle="modal" data-nomb1_admi="<?php echo $nomb1_admi?>" data-nomb2_admi="<?php echo $nomb2_admi?>" data-apel1_admi="<?php echo $apel1_admi?>" data-apel2_admi="<?php echo $apel2_admi?>" data-usuar_admi="<?php echo $usuar_admi?>" data-ident_admi="<?php echo $ident_admin; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Editar" ></i></a>
	          </td>
	          <!-- <td class='text-center'>
							<a href="#deleteAdminModal" class="delete" data-toggle="modal" data-ident_admi="<?php echo $ident_admin;?>"><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></a> -->
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
		  
