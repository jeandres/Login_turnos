<?php
define('host','localhost:3307');
define('user','root');
define('pass','');
define('db','dispensario');

$con = mysqli_connect(host, user, pass, db) or die('Error al conectar');

?>