<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body>

<?php
//creando conexion a la base de datos por medio del metodo PDO
try{

$base=new PDO("mysql:host=localhost; dbname=votacion_electronica","root","");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//Consulta para acceder a la tabla del usuario
$sql="SELECT * FROM admin WHERE CLAVE= :password";
$resultado=$base->prepare($sql);
$password=htmlentities(addslashes($_POST["password"]));//escapar cualquier simbolo
$resultado->bindValue(":password",$password);
$resultado->execute();
$numero_registro=$resultado->rowCount();
//control de acceso del codigo ingresado me redireccione a la pagina
if($numero_registro !=0){
session_start();

$_SESSION["admin"]=$_POST["password"];
header("location:Resultado.php");
}else{ 
    header("location:admin.php");
}
}catch (Exception $e){
    die("Error: " . $e->getMessage());

}
?>





</body>
</html>
