<?php
try{
$conexion =new PDO('mysql:host=localhost;dbname=votacion_electronica','root','');
$statement = $conexion->prepare('UPDATE ADMIN_USUARIOS SET VOTO= replace(VOTO,1,0);');
$statement->execute();

echo'<script type="text/javascript">
    alert("registro lista 1 eliminado");
    window.location.href="Resultado.php";
    </script>';
}catch(PDOException $e){
echo "Error: " . $e->getMessage();
}


?>


 