<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Votacion electronica</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <!-- Estilos CSS -->
<link rel="stylesheet" href="login/css/style.css">
    <!-- Favicon -->
<link rel="shortcut icon" href="login/img/favicon.png" type="image/x-icon">

</head>
<body>
<br>
<br>

<form action="comprueba_usuario.php" method="POST">


<h1>Inicia Sesion</h1>
<img src="login/icons-social/facebook.svg" title="Inicia Sesion con Facebook" alt="Inicia Sesion con Facebook">
<img src="login/icons-social/google.svg" title="Inicia Sesion con Google" alt="Inicia Sesion con Google">
<img src="login/icons-social/twitter.svg" title="Inicia Sesion con Twitter" alt="Inicia Sesion con Twitter">
<img src="login/icons-social/github.svg" title="Inicia Sesion con GitHub" alt="Inicia Sesion con GitHub">


<input type="password" name="password" placeholder="Contrase&ntilde;a"><br/>
<button type="submit">Entrar</button>
<button type="reset">Limpiar</button><br>
<a href="admin.php"><p>Administrador</p></a>



</body>
<?php
session_start();
echo "Valor: ".$_SESSION["usu"];
?>
</html>
