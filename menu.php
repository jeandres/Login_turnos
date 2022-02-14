<div class="container">
    <div class="navbar navbar-expand-lg navbar-dark bg-primary ">
        <div class="container-fluid ">
            <a href="#" class="navbar-brand"><img src="img/inicio.png" alt="" width="60px" height="60px"></a>
            <h2 class="display-1 text-center" >Bienvenido</h2>
                <div class="collapse navbar-collapse m-1 ">
                    <ul class="navbar-nav me-auto mb-2 "></ul>
                    <ul class="navbar-nav ">
                        <li class="nav-item ">
                            <a href="usuarios.php" class="nav-link">Perfil</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ">
                        <li class="nav-item">
                            <a href="turnos.php" class="nav-link">Turnos</a>
                        </li>
                    </ul>
                   
                    <span class="nabvar-text">
                         <?php echo $_SESSION['usuario1']; ?>
                    </span>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="salir.php" class="nav-link">Salir</a>
                        </li>
                    </ul>
                </div> 
        </div>
    </div>
</div>