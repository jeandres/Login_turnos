<?php
     require_once __DIR__. '/conexion.php';
     require_once __DIR__. '/clase_sql.php';

$claseql = new Clase_sql();


    $fecha=$_POST['txtfecha'];
    $hora=$_POST['txthora'];
    $doc=$_POST['txtdoc'];
    $obs=$_POST['txtobs'];
      

$r_usuario = $claseql->InsertarTurnos($fecha,$hora,$doc,$obs);
    header("location:turnos.php");

?>