<?php
session_start();
try{
    $conexion =new PDO('mysql:host=localhost;dbname=votacion_electronica','root','');
  
$statement = $conexion->prepare("UPDATE  ADMIN_USUARIOS SET VOTO2=1 WHERE CLAVE='".$_SESSION["usu"]."'");
$statement->execute();
//$resultado->execute();
echo'<script type="text/javascript">
    alert("Su voto por la lista 2 ha sido registrado satisfactoriamente");
    window.location.href="index.php";
    </script>';
}catch(PDOException $e){
        echo "Error: " . $e->getMessage();
        }
        
?>