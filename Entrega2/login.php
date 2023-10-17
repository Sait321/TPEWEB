<?php require 'templates/header.phtml' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/estilos.css">
    <title> Inicio de sesion</title>
</head>
<body>

<div class="login-box">
    <form class="login-cont" method="POST" action="">
        <h1 class="title">Bienvenido</h1>
        <?php
        include "model/conexion.php";
        include "controllers/controlador.login.php";
        ?>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Ingresa tu email">
        </div>
        <div class="form-group">
            <label for="clave">Password</label>
            <input type="password" required class="form-control" id="clave" name="clave" placeholder="Ingresa tu contraseña">
        </div>
        <div class="view">
            <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
        </div>
        <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
    </form>
</div>


<?php require 'templates/footer.phtml' ?>