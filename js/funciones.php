<?php
	
	//Categorias

	function categorias($con)
	{

		$sql = "select * from tabma_cate order by ident_cate;";
		$resultado = mysqli_query($con, $sql);

		echo "<select name='nombr_cate' class='form-control' id='nombr_cate' required>";
		echo "<option value=''>Seleccione...</option>";

		while ($nombr_cate = mysqli_fetch_array($resultado)) {
			echo "<option value='$nombr_cate[0]'>$nombr_cate[1]</option>";
		}

		echo "</select>";

	}
?>