<?php
    session_start();
    if(!isset($_SESSION['usuario1'])){
        header('location:index.php');

    }
            require_once __DIR__. '/conexion.php';
            require_once __DIR__. '/clase_sql.php';

    $claseql = new Clase_sql();
    $r_usuario1 = $claseql->ConsultarTurnos();
    $r_usuario2 = $claseql->ConsultarUsuario();
    $consul=$r_usuario2->fetch_assoc();
    $fila= $r_usuario1->fetch_assoc();
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citas</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
    <?php
    include "menu.php";
    ?>
    <div class="button m-4">
        <button class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#modal_turno">Nueva cita</button>
    </div>
    <br>

    
    <table class="table table-hover table-striped table-borderless table-sm" id="tabla">
    
        <thead >
            <th class="text-center">
                Listado de citas
            </th>
            
        </thead>
        <tbody>
            <tr>
                <th>
                    Código del paciente 
                </th>
                <th>
                    Fecha
                </th>
                <th>
                    Doctor
                </th>
            </tr>
            
            <tr>
            <td class="col-1"><label for="" class="text-dark"><?=$consul['nombres'];?></label> </td>
            <?php $n=1;
         while($fila1= $r_usuario1->fetch_assoc()){?>
            <td class="col-1"><label for="" class="text-dark"><?=$fila1['codpaciente'];?></label> </td>
            <td> <label for="" class="text-dark"><?=$fila1['horario'];?></label></td>
            </tr>
            <?php $n++;}?> 
        </tbody>
        
    </table>


    <!-- Modal nuevo turno -->
    <div class="modal" tabindex="-1" id="modal_turno">
            <div class="modal-dialog modal-lg ">
                <form action="inser_turnos.php" method="post" class="needs-validation" novalidate>
                    <div class="modal-content" >
                    <div class="modal-header text-center">
                        <h5>Turno nuevo</h5>
                    </div>
                    <div class="modal-body">
                      
                       <div class="row">
                            <div class="col-6">
                                <label for="ape" class="form-label">Codigo paciente:</label>
                                <div class="col-6">
                                <label for="" class="text-danger"><?=$fila['codpaciente'];?></label>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-6">
                                <label for="nom" class="form-label">Fecha de la cita:</label>
                                <div class="col-12">
                                    <input type="date" name="txtfecha" id="nom" class="form-control" required>
                                    <div class="invalid-feedback">
                                    Ingrese fecha
                                </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="ape" class="form-label">Hora:</label>
                                <div class="col-12">
                                    <input type="time" name="txthora" id="ape" class="form-control" required>
                                    <div class="invalid-feedback">
                                    Ingrese la hora
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-8">
                            <label for="tel" class="form-label">Doctor:</label>
                            <div class="col-12">
                                <input type="text" name="txtdoc" id="tel" class="form-control">
                                </div>
                            <div class="col-8">
                            <label for="">Observación: </label>
                            <div class="col-12">
                                <input type="text" name="txtobs" id="tel" class="form-control">
                                </div>
                            
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-primary"> Guardar</button>
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal"> Cerrar</button>
                        </form>
                    </div>
                    </div>
    


                    <script src="js/jquery-3.5.1.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap5.min.js"></script>
<script src="js/bootstrap.js"></script>

<script type="text/javascript" src="Editor-2.0.4/js/dataTables.editor.js"></script>
<script>
     function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
<script>
   
     $(document).ready(function() {
    $('#tabla').DataTable({
        "language": {
                "lengthMenu": "Mostrar _MENU_ registros",
                "zeroRecords": "No se encontraron resultados",
                "info": "Registros del _START_ al _END_ de un total de _TOTAL_ registros",
                "infoEmpty": "Registros del 0 al 0",
                "infoFiltered": "(Total de _MAX_ registros)",
                "sSearch": "Buscar:",
                "oPaginate": {
                    "sFirst": "Primero",
                    "sLast":"Último",
                    "sNext":"Siguiente",
                    "sPrevious": "Anterior"
			     },
			     "sProcessing":"Procesando...",
            }
    });
} );
</body>
</html>