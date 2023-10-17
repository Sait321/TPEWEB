<?php
session_start();
if(empty ($_SESSION["id-user"])){
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>

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

    <?php include "templates/form_alta.phtml"; ?>
</body>