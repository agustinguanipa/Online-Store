<?php

require_once ("../paginas/conexion_bd.php");

$action = (isset($_REQUEST['action'])&& $_REQUEST['action'] !=NULL)?$_REQUEST['action']:'';
if($action == 'ajax'){
	$query = mysqli_real_escape_string($con,(strip_tags($_REQUEST['query'], ENT_QUOTES)));

	$tables="tabma_prod";
	$campos="*";
	$sWhere=" (tabma_prod.nombr_prod LIKE '%".$query."%') AND tabma_prod.statu_prod = 0";
	$sWhere.=" order by tabma_prod.ident_prod";
	
	// Paginacion

	include 'pagination.php';

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
					<th class='text-center'>Nombre</th>
					<th class='text-center'>Precio</th>
					<th class='text-center'>Peso</th>
					<th class='text-center'>Tamaño</th>
					<th class='text-center'>Stock</th>
					<th class='text-center'>Estado</th>
					<th class='text-center'>Restaurar</th>
				</tr>
			</thead>
			<tbody>	
					<?php 
					$finales=0;
					while($row = mysqli_fetch_array($query)){	
						$ident_producto=$row['ident_prod'];
						$ident_cate=$row['ident_cate'];
						$nombr_prod=$row['nombr_prod'];
						$desco_prod=$row['desco_prod'];
						$desla_prod=$row['desla_prod'];
						$preci_prod=$row['preci_prod'];
						$pesoo_prod=$row['pesoo_prod'];
						$taman_prod=$row['taman_prod'];
						$stock_prod=$row['stock_prod'];
						$estad_prod=$row['estad_prod'];	
						$finales++;
					?>	
					<tr class="">
						<td class='text-center'><?php echo $ident_producto;?></td>
						<td class='text-center'><?php echo $nombr_prod;?></td>
						<td class='text-center'><?php echo $preci_prod;?></td>
						<td class='text-center'><?php echo $pesoo_prod;?></td>
						<td class='text-center'><?php echo $taman_prod;?></td>
						<td class='text-center'><?php echo $stock_prod;?></td>
						<td class='text-center'><?php echo $estad_prod;?></td>
	           <td class='text-center'>
							<a href="#restaurarProductoModal" class="restaurar" data-toggle="modal" data-ident_prod="<?php echo $ident_producto;?>"><i class="fa fa-check" data-toggle="tooltip" title="Restaurar"></i></a>
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
		  
