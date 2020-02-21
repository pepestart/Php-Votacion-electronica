<!doctype html>

<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="Stylesheet" href="bootstrap/css/bootstrap.min.css"><!--boopstrap -->
<link rel="Stylesheet" href="bootstrap/css/style.css">  <!--menu -->
<link rel="Stylesheet" href="bootstrap/js/bootstrap.min.js">  <!--menu -->
<link href="bootstrap/css/dataTables.bootstrap.min.css" rel="stylesheet"/><!--libreria css para la tabla-->
<link href="css/estilosbody.css" rel="stylesheet">

</head>
<body>

<?php

session_start();
if(!isset($_SESSION["admin"])){
    header("Location:index.php");
}
?>
<div style="text-align: center;">
<img src="imagenes/banner1.png" ><br>
</div>
<div style="text-align: center;"> <P><h2>RESULTADOS DE LA VOTACION</h2></P></div>
<br>
<br>
<br>
<div style="font-size:30px;">
<center>
<section>


<table  width="40%" border="2px" align="center">

<tr align="center"  >
    <div style="color:white">
    <td class="bg-danger" style="background-color:blue">LISTA1</td>
    <td class="bg-info" style="background-color:red">LISTA2</td>
    </div>
   
   
</tr> 
<?php

try{
    $conexion =new PDO('mysql:host=localhost;dbname=votacion_electronica','root','');
    
$sql = "SELECT COUNT(*) VOTO FROM ADMIN_USUARIOS WHERE VOTO>0" ;
$result = $conexion->query($sql); //$pdo sería el objeto conexión
$total = $result->fetchColumn();

$sql2 = "SELECT COUNT(*) VOTO2 FROM ADMIN_USUARIOS WHERE VOTO2>0";
$result2 = $conexion->query($sql2); //$pdo sería el objeto conexión
$total2 = $result2->fetchColumn();


echo '<div style="color:RED">';
echo '<td>'.'<h1>'.'<p>'.'TOTAL : ' . $total.'</p>'.'<br>'.'<h1>'.'</td>'.'<br>';
echo '</div>';
echo '<div style="color:BLUE">';
echo '<td>'.'<h1>'.'<p>'.'TOTAL : ' . $total2.'</p>'.'<br>'.'<h1>'.'</td>'.'<br>';
echo '</div>';


}catch(PDOException $e){
    echo "Error: " . $e->getMessage();
    }
?>


<!--
<div style="text-align: center;">
<form action="eliminartodo3.php" method="POST">
<br>
<input type="submit" name="lista3" value="Vaciar resultados lista 3" class="btn btn-warning" > <br>
</form>-->
<br>
</div>
</table>
</section>
<br>
</div>
<div style="text-align: center;">
<form  action="eliminartodo1.php" method="POST" >                                               
 <br>                                              
 <input type="submit" name="lista2" value="Vaciar resultados lista 1" class="btn btn-primary" >
 <br>
</form>
</div>
<div style="text-align: center;">
<form action="eliminartodo2.php" method="POST">
<br>

<input type="submit" name="lista1" value="Vaciar resultados lista 2" class="btn btn-danger" >
</form>
</div>
<br>
<table  width="15%" border="2px" align="center">

<tr align="center"  >
    <div style="background-color:red">
    <td class="bg-danger"><img src="imagenes/atras.png"><a href="index.php"><p>Volver</p></a></td>
    </div>   
</tr> 
</table>
</center>
</body>
</html>


