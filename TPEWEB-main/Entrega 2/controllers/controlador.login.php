<?php
Session_start();

if (!empty($_POST["btningresar"])){
    if(!empty($_POST["email"]) and ($_POST["clave"])){
        $usuario=$_POST["email"];
        $password=$_POST["clave"];
        $sql=$conexion->query(" select * FROM usuarios WHERE email='$usuario' and clave='$password' ");
        if ($datos=$sql->fetch_object()) {
            $_SESSION["id-user"]=$datos->id;   
            $_SESSION["Nombre"]=$datos->nombre; 
            $_SESSION["Correo Electronico"]=$datos->email;       
            header("location: inicio.php");

        } else {
            echo "<div class='alert alert-danger'> Acceso denegado</div>";
        }
        

    }else{
        echo "Campos vacios";
    }
}

