<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title> Inicio de sesion</title>
</head>
<body>

<div class="login-content">
    <form method="POST" action="">
        <h2 class="title">Bienvenido</h2>
        <?php
        include "model/conexion.php";
        include "controllers/controlador.login.php";
        ?>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" required class="form-control" id="email" name="email" aria-describedby="emailHelp">
        </div>
        <div class="form-group">
            <label for="clave">Password</label>
            <input type="password" required class="form-control" id="clave" name="clave">
        </div>
        <div class="view">
            <div class="fas fa-eye verPassword" onclick="vista()" id="verPassword"></div>
        </div>
        <input name="btningresar" class="btn" type="submit" value="INICIAR SESION">
    </form>
</div>

<script src="js/fontawesome.js"></script>
<script src="js/main.js"></script>
<script src="js/main2.js"></script>

<?php require 'templates/footer.phtml' ?>