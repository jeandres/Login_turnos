<?php
    class Clase_Sql{
        //Atributos
        private $bd;


        //Constructor
        public function __construct(){
            $this->bd = new mysqli(host, user, pass, db);
            $this->bd->set_charset('utf8');
        }

        //Métodos
        public function ConsultarUsuario(){
            $resultado = $this->bd->query("SELECT * FROM usuarios");
            return $resultado;
        }
        public function InsertarUsuarios($destino,$nom,$ced,$cel,$cla,$cor,){
            $resultado = $this->bd->query("INSERT INTO usuarios (foto,nombres,cedula,celular,contraseña,correo) VALUES ('$destino','$nom','$ced','$cel','$cla','$cor')");
            return true;
        }
        public function ConsultarUsu($ced, $cla){
            $resultado = $this->bd->query("SELECT * FROM  usuarios WHERE cedula ='$ced' AND   contraseña='$cla' AND activo='0' ");
            return $resultado;
        }
        public function ConsultarTurnos(){
            $resultado = $this->bd->query("SELECT * FROM turnos");
            return $resultado;
        }
        public function InsertarTurnos($fecha,$hora,$obs){
            $resultado = $this->bd->query("INSERT INTO turnos (codpaciente,horario,observacion) VALUES ('$fecha','$hora','$obs')");
            return true;
        }

    }


?>