<?php
    session_start();
    if(!isset($_SESSION['usuario1'])){
        header('location:index.php');

    }
            require_once __DIR__. '/conexion.php';
            require_once __DIR__. '/clase_sql.php';

    $claseql = new Clase_sql();
    $r_usuario = $claseql->ConsultarUsuario();
    $fila= $r_usuario->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    
    <?php
    include "menu.php";
    ?>
   
        <div class="container">
            
        <form action="#" method="post" enctype="multipart/form-data">
    <table class="table table-hover table-striped table-borderless table-sm ">
    <thead class="">
    <tr>
        <th style="text-align: center">Foto</th>
        <th style="text-align: center">Datos</th>
    </tr>
    </thead>
    <tbody Id="idtabla">
        
        
        
        <tr>
           <th rowspan="8" class="" height="400px" width="400px"><img id="img" class=" img-fluid mt-5 mx-auto d-block "  src="data:image/jpg/png/jfif;base64, <?php echo base64_encode($fila['foto']);?> " width="100%" height="100%"></th>
           </div>
       </tr>
       <tr>
           
           <th>Id <label for="" class="text-danger"><?=$fila['id_usuario'];?></label></th>
       </tr>
       <tr>
           
           <th>Apellidos y nombres: <label for="" class="text-success"><?=$fila['nombres'];?></label></th>
       </tr>
       <tr>
           
           <th> Cédula: <label for="" class="text-success"><?=$fila['cedula'];?></label></th>
       </tr>
       <tr>
           
           <th>Móvil: <label for="" class="text-success"><?=$fila['celular'];?></label></th>
       </tr>
      
       <tr>
           
           <th>Correo: <label for="" class="text-success"><?=$fila['correo'];?></label></th>
       </tr>
       
    
    </tbody>
    </table>
    </form>
</div>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>