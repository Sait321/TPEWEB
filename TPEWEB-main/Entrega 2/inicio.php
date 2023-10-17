<?php
session_start();
if(empty ($_SESSION["id-user"])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empresa de vehiculos</title>
    <link rel="stylesheet" href="css/estilos.css">

</head>
<body>
<header>
    <div class="bd-example mb-0" style="height: 80vh">
    </div>
    <nav class="nav-bar">
            <div class="contenedorHeader">
                <ul class="navigation">
                    <div class="lista-nav">
                        <li class="active item"><a href="inicio.php">Inicio</a></li>
                        <li class="item"><a href="tienda.php">Tienda</a></li>
                        <li class="item"><a href="login.php">Login</a></li>
                        <li class="item"><a href="login.php">Cerrar sesion</a></li>
                    </div>
                </ul>
            </div>
    </nav>
</header>
    <?php include "templates/form_alta.phtml"; ?>

</body>