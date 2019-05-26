<?php
	
	/* Connect To Database*/
	require_once ("../paginas/conexion_bd.php");

	
$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tabla_clie";
	$campos="*";
	$sWhere=" tabla_clie.nomb1_clie LIKE '%".$query."%'";
	$sWhere.=" order by tabla_clie.nomb1_clie";
	
	
	include 'pagination.php'; //include pagination file
	//pagination variables
	$page = (isset($_REQUEST['page']) && !empty($_REQUEST['page']))?$_REQUEST['page']:1;
	$per_page = intval($_REQUEST['per_page']); //how much records you want to show
	$adjacents  = 4; //gap between pages after number of adjacents
	$offset = ($page - 1) * $per_page;
	//Count the total number of row in your table*/
	$count_query   = mysqli_query($con,"SELECT count(*) AS numrows FROM $tables where $sWhere ");
	if ($row= mysqli_fetch_array($count_query)){$numrows = $row['numrows'];}
	else {echo mysqli_error($con);}
	$total_pages = ceil($numrows/$per_page);
	//main query to fetch the data
	$query = mysqli_query($con,"SELECT $campos FROM  $tables where $sWhere LIMIT $offset,$per_page");
	//loop through fetched data
	


		
	
	if ($numrows>0){
		
	?>
		<div class="table-responsive">
			<table class="table table-striped table-hover">
				<thead>
					<tr>
						<th class='text-center'>ID</th>
						<th class='text-center'>Nombres</th>
						<th class='text-center'class='text-center'>Apellidos</th>
						<th class='text-center'>Genero</th>
						<th class='text-center'>Telefono</th>
						<th class='text-center'>E-Mail</th>
						<th class='text-center'>Usuario</th>
						<th class='text-center'>Editar</th>
						<th class='text-center'>Borrar</th>
					</tr>
				</thead>
				<tbody>	
						<?php 
						$finales=0;
						while($row = mysqli_fetch_array($query)){	
							$ident_clie=$row['ident_clie'];
							$nomb1_clie=$row['nomb1_clie'];
							$nomb2_clie=$row['nomb2_clie'];
							$apel1_clie=$row['apel1_clie'];
							$apel2_clie=$row['apel2_clie'];
							$gener_clie=$row['gener_clie'];
							$telef_clie=$row['telef_clie'];
							$email_clie=$row['email_clie'];
							$usuar_clie=$row['usuar_clie'];		
							$finales++;
						?>	
						<tr class="">
							<td class='text-center'><?php echo $ident_clie;?></td>
							<td class='text-center'><?php echo $row['nomb1_clie'].' '.$row['nomb2_clie']; ?></td>
							<td class='text-center'><?php echo $row['apel1_clie'].' '.$row['apel2_clie']; ?></td>
							<td class='text-center'><?php echo $gener_clie;?></td>
							<td class='text-center'><?php echo $telef_clie;?></td>
							<td class='text-center'><?php echo $email_clie;?></td>
							<td class='text-center'><?php echo $usuar_clie;?></td>
							<td class='text-center'>
								<a href="#"  data-target="#editProductModal" class="edit" data-toggle="modal" data-nomb1_clie="<?php echo $nomb1_clie?>" data-nomb2_clie="<?php echo $nomb2_clie?>" data-apel1_clie="<?php echo $apel1_clie?>" data-apel2_clie="<?php echo $apel2_clie?>" data-gener_clie="<?php echo $gener_clie?>" data-telef_clie="<?php echo $telef_clie?>" data-email_clie="<?php echo $email_clie?>" data-usuar_clie="<?php echo $usuar_clie?>" data-ident_clie="<?php echo $ident_clie; ?>"><i class="fa fa-edit" data-toggle="tooltip" title="Editar" ></i></a>
               </td>
               <td class='text-center'>
								<a href="#deleteProductModal" class="delete" data-toggle="modal" data-ident_clie="<?php echo $ident_clie;?>"><i class="fa fa-trash" data-toggle="tooltip" title="Eliminar"></i></a>
               </td>
						</tr>
						<?php }?>
						<tr>
							<td colspan='6'> 
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
		  
