<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="" >
    <form action="insertar.php" class="formulario" method="post" enctype="multipart/form-data">
    <h2 class="usuh2 bg-primary p-3 m-0">Registrate</h2>
    <div class="contenedor">
       <div class="col-md-12">
           <div class="form-group mt-2 mb-2">
           <label>foto</label>
           <div class="card border-primary mt-2">
               <div class="card-body">
                   <label for="imagen" id="icon-imagen" class="btn btn-primary"> <i class="fas fa-image"></i></label><span id="icon-cerrar"></span>
                    <input type="file" name="imagen" class="d-none" id="imagen" onchange="preview(event)">
                    <img class="img-thumbnail" id="img-preview">
               </div> 
           </div>
           </div>
       </div>
        
        <div class="input-contenedor">
            <i class="fas fa-user"></i>
            <input type="text" name="txtname" autocomplete="off"  placeholder="ingrese nombres y apellidos completos">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-id-card"></i>
            <input type="text" name="txtced" autocomplete="off"  pattern="[0-9]+" id="numero" placeholder="ingrese la cedula">
        </div>
        <div class="input-contenedor">
            <i class="fas fa-mobile"></i>
            <input type="text" name="txtcel" id="numero2" autocomplete="off" pattern="[0-9]+" placeholder="ingrese su número celular">
        </div>
        <!-- <div class="select-contenedor mb-3">
            <i class="fas fa-puzzle-piece"></i>
            <select class="" name="slc">
                <option value="7">Usuario</option>
              </select>
        </div> -->
        <div class="input-contenedor">
            <i class="fas fa-key"></i>
            <input type="password" name="txtcla" placeholder="Ingrese la clave">
        </div>
        
        <div class="input-contenedor">
            <i class="fas fa-at"></i>
            <input type="email" name="txtcor" autocomplete="off" placeholder="Ingrese el correo">
        </div>
        <!-- <div class="input-contenedor">
            <i class="fas fa-clipboard-list"></i>
            <input type="text" name="txtobs" autocomplete="off" placeholder="Observacion">
        </div> --><br>
       <div style="text-align: center;">
            <input type="submit" value="Registrar" name="registrar" class="btn btn-primary">
           
       </div>
       <hr>
       <p>Ya tengo cuenta <a class="link" href="usu_inicio.php">Iniciar sesión</a></p>
    </div>

   


    </form>
    <script src="js/sweetalert2@9.js"></script>
    <script src="js/principal.js"></script>
   <script src="https://kit.fontawesome.com/6863a2d159.js" crossorigin="anonymous"></script>
   <script src="js/bootstrap.min.js"></script>
   <script>
        var input=  document.getElementById('numero');
input.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10); 
   
})
    </script>
    <script>
        var input=  document.getElementById('numero2');
input.addEventListener('input',function(){
  if (this.value.length > 10) 
     this.value = this.value.slice(0,10); 
})
    </script>
</body>
</html>