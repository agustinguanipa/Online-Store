<?php 
  session_start();
  if(isset($_SESSION['message'])){
      ?>
      <div class="alert alert-info text-center" style="margin-top:20px;">
          <?php echo $_SESSION['message']; ?>
      </div>
      <?php

      unset($_SESSION['message']);
  }
?>

<?php require_once('admin_header.php'); ?>

<div class="container">
    <div id="content" class="container">
        <div class="row">
            <div class="col-lg-12 margin-tb">
               <h1 class="page-header text-center">Clientes</h1>
                <hr class="my-4">
                <a href="#addnew" class="btn btn-primary" align="right" data-toggle="modal"><span class="fa fa-plus"></span> New</a>
               
            </div>
        </div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Genero</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Usuario</th>
                    <th>Editar</th>
                    <th>Borrar</th>
                </tr>
            </thead>
        <tbody>
          <?php
            //include our connection
            include_once('conexion_bd.php');

            $database = new Connection();
              $db = $database->open();
            try{  
                $sql = 'SELECT * FROM tabla_clie';
                foreach ($db->query($sql) as $row) {
                  ?>
                  <tr>
                    <td><?php echo $row['ident_clie']; ?></td>
                    <td><?php echo $row['nomb1_clie'].' '.$row['nomb2_clie']; ?></td>
                    <td><?php echo $row['apel1_clie'].' '.$row['apel2_clie']; ?></td>
                    <td><?php echo $row['gener_clie']; ?></td>
                    <td><?php echo $row['telef_clie']; ?></td>
                    <td><?php echo $row['email_clie']; ?></td>
                    <td><?php echo $row['usuar_clie']; ?></td>
                    <td>
                      <a href="#edit_<?php echo $row['ident_clie']; ?>" class="btn btn-primary btn-sm" data-toggle="modal"><span class="fa fa-edit"></span> Edit</a>
                    </td>
                    <td>
                      <a href="#delete_<?php echo $row['ident_clie']; ?>" class="btn btn-danger btn-sm" data-toggle="modal"><span class="fa fa-trash"></span> Delete</a>
                    </td>
                    <?php include('edit_delete_modal.php'); ?>
                  </tr>
                  <?php 
                }
            }
            catch(PDOException $e){
              echo "There is some problem in connection: " . $e->getMessage();
            }

            //close connection
            $database->close();

          ?>
        </tbody>
        </table>
    </div>
  </div>

<?php include('add_modal.php'); ?>

<?php require_once('admin_footer.php'); ?>


