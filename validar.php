<?php
session_start();
//echo "Valor: ".$_SESSION["usu"];
try{
$conexion =new PDO('mysql:host=localhost;dbname=votacion_electronica','root','');

$statement = $conexion->prepare("UPDATE  ADMIN_USUARIOS SET VOTO=1 WHERE CLAVE='".$_SESSION["usu"]."'");

$statement->execute();


echo'<script type="text/javascript">
    alert("Su voto por la lista 1 ha sido registrado satisfactoriamente");
    window.location.href="index.php";
    </script>';
  

}catch(PDOException $e){
echo "Error: " . $e->getMessage();
}


?>
