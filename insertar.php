<?php
     require_once __DIR__. '/conexion.php';
     require_once __DIR__. '/clase_sql.php';

$claseql = new Clase_sql();


    $nom=$_POST['txtname'];
    $ced=$_POST['txtced'];
    $cel=$_POST['txtcel'];
    //$selec=$_POST['slc'];
    $cla=$_POST['txtcla'];
    $cor=$_POST['txtcor'];
    //$obs=$_POST['txtobs'];
    $destino=addslashes(file_get_contents($_FILES['imagen']['tmp_name']));   

$r_usuario = $claseql->InsertarUsuarios($destino,$nom,$ced,$cel,$cla,$cor);
    header("location:usu_inicio.php");

?>