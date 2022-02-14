<?php
     require_once __DIR__. '/conexion.php';
     require_once __DIR__. '/clase_sql.php';

$claseql = new Clase_sql();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="login--main-text">
    <form action="" method="post" class="needs-validation formulario">
        <h2 class="usuh2 bg-primary p-3">Iniciar sesión</h2>
        <div class="contenedor">
        <div class="input-contenedor">
                <i class="fas fa-id-card"></i>
                <input type="text" name="txt_nom"  placeholder="ingrese sus nombres"  required>
                <div class="invalid-feedback">
                    Ingresar sus nombres
                </div>
            </div>
            <div class="input-contenedor">
                <i class="fas fa-id-card"></i>
                <input type="text" name="txt_codi"  placeholder="ingrese la cedula" pattern="[0-9]+" required>
                <div class="invalid-feedback">
                    Ingrese cedula por favor
                </div>
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key"></i>
                <input type="password" name="txt_pass" placeholder="Ingrese la clave" required>
                <div class="invalid-feedback">
                    Ingrese la clave por favor
                </div>
            </div>
            <div style="text-align: center;">
                <input type="submit" value="Ingresar" class="btn btn-primary">
            </div>
            <hr>
            <p>Crear una cuenta <a class="link" href="index.php" title="ir">Crear cuenta nueva</a></p>

        </div>
    </form>
    </div>
    <script src="js/sweetalert2@9.js"></script>
    <script src="js/bootstrap.js"></script>
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
</body>
</html>
<?php

            if($_POST){
                $usu1=$_POST['txt_codi'];
                $usuvis=$_POST['txt_nom'];
                $cla1=$_POST['txt_pass'];
                $r_usuario = $claseql->ConsultarUsu($usu1,$cla1);
               if($r_usuario->num_rows>0){
                   session_start(); 
                   $_SESSION['usuario1']=$usuvis;
                   header('location: usuarios.php');

               
               }else ?>{
               <script>
                   swal.fire({
                       icon:'error',
                       tittle:'Acesso',
                       text:'Usurio incorrecto'
                   })
               </script>

               }<?php
            }
            ?>