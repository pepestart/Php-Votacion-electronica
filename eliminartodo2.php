<?php
try{
$conexion =new PDO('mysql:host=localhost;dbname=votacion_electronica','root','');
$statement = $conexion->prepare('UPDATE ADMIN_USUARIOS SET VOTO2= replace(VOTO2,1,0);');
$statement->execute();

echo'<script type="text/javascript">
alert("registro lista 2 eliminado");
window.location.href="Resultado.php";
    </script>';
}catch(PDOException $e){
echo "Error: " . $e->getMessage();
}


?>


<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

</head>
<body>
<!--ENVIAR DATOS-->
<form  ACTION="eiiminartodo.php" method="POST" >                                               
 <br> 
 <div style="text-align: center;">
                                                  
<input type="submit" name="lista1" value="Vaciar resultados lista 1" class="btn btn-danger" > </div><br>
 <br>

</div>
</form>




</body>
</html>
 