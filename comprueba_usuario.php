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
$sql="SELECT * FROM ADMIN_USUARIOS WHERE CLAVE= :password  AND VOTO= :voto1 AND VOTO2= :voto2";//AND ESTADO= :estado
$resultado=$base->prepare($sql);
$password=htmlentities(addslashes($_POST["password"]));//escapar cualquier simbolo

$resultado->bindValue(":password",$password);
$voto1=0;
$voto2=0;
$resultado->bindValue(":voto1",$voto1);
$resultado->bindValue("voto2",$voto2);
$resultado->execute();
$numero_registro=$resultado->rowCount();
//control de acceso del codigo ingresado me redireccione a la pagina

if($numero_registro !=0 && $voto1  !=1 && $voto2 !=1 ){
session_start();

$_SESSION["usu"]=$_POST["password"];
header("location:votacion.php");
}else{ 
   // header("location:index.php");
   echo"<script>alert('El codigo no es valido o usted ya voto.'); window.location.href=\"index.php\"</script>"; 
}
}catch (Exception $e){
    die("Error: " . $e->getMessage());

}
?>





</body>
</html>
