



<!doctype html>
<html>
<head>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="Stylesheet" href="bootstrap/css/bootstrap.min.css"><!--boopstrap -->
<link rel="Stylesheet" href="bootstrap/css/style.css">  <!--menu -->
<link rel="Stylesheet" href="bootstrap/js/bootstrap.min.js">  <!--menu -->
 <link href="css/estilosbody.css" rel="stylesheet">
<sript src="bootstrap/js/jquery-3.4.1.min"> </script>
<style type="text/css">
  .boton_2{
    text-decoration: none;
    padding: 40px;
    font-family: arial;
    text-transform: uppercase;
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 800;
    font-size: 25px;
    color: black;
    background-color: blue;
    border-radius: 15px;
    border: 3px double #006505;
  }
  .boton_2:hover{
    color: #9b0e0e;
    background-color: blue;
    text-decoration: none;
  }


  .boton_1{
    text-decoration: none;
    padding: 40px;
    font-family: arial;
    text-transform: uppercase;
    padding-left: 10px;
    padding-right: 10px;
    font-weight: 800;
    font-size: 25px;
    color: black;
    background-color: #9b0e0e;
    border-radius: 15px;
    border: 3px double #006505;
  }
  .boton_1:hover{
    color: #9b0e0e;
    background-color: #bc6355;
    text-decoration: none;
  }
</style>

</head>
<div class="image">
<body >
<?php
session_start();
if(!isset($_SESSION["usu"])){
    header("Location:index.php");
}
?>
<div style="text-align: center;">
<img src="imagenes/banner1.png" ><br><br>
<br>
<h2>Elecciones de representante estudiantil 2019-2020</div>
</div>
<div  style="font-size:25px;">
<center >
<br><br>

<form action="validar.php" method="POST">
<p>

                    <div class="container"><!--contenedor panel-->
                        <div class="panel-success"><!--color del panel verde -->
                            <div class="panel-body"><!-- cuerpo del panel-->
                                <div class="row"><!--12 unidades filas se adpatan dependiendo el dispositivo-->
                                    <div class="col-sm-12 col-md-6 col-md-6"><!--tamño de los paneles 1era fila-->
                                        <div class="panel-info"> <!--para darle color borde del cuadro-->
                                            <div class="panel-body"><!--cuerpo del panel-->
                                                <div class="list-group" align="center"> <!--agrupar varios paneles-->
                                                    <div class="list-group-item list-group-item-danger" style="background-color:blue">
                                                        <div style="color:white;">
                                                            <h1>  LISTA 1</h41><!--titulo 4-->  
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item list-group-item active" style="background-color:blue"><!--permite sacar el borde de la imagen-->
                                                    <img src="img/img1.jpg" height="300" width="230"><!--imagen iphone-->
                                                    </div>
                                                    <h1 class="list-group-item list-group-item active" style="background-color:blue" ><div style="color:BLACK"><b>JESSICA QUEZADA</b></div></h1><!--titulo de la imagen-->
                                                    <h2><P>PRESIDENTE</P></h2>
                                                    <!--ENVIAR DATOS-->
                                                    <br> 
                                                    <div style="text-align: center;">
                                                    <h4><p>SELECCIONE LISTA 1</p></h4>
                                                    <input type="submit" name="insertar" value="Votar click aqui" class="boton_2" > </div><br>
                                                    <br>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>

                                    <div style=align="right">
                                    <form action="validar2.php" method="POST">
                                    <div class="col-sm-12 col-md-6 col-md-6"><!--tamño de los paneles 1era fila-->
                                        <div class="panel-info"> <!--para darle color borde del cuadro-->
                                            <div class="panel-body"><!--cuerpo del panel-->
                                                <div class="list-group" align="center"> <!--agrupar varios paneles-->
                                                    <div class="list-group-item list-group-item-danger" style="background-color:red">
                                                       <div style="color:white;">
                                                        <h1>LISTA 2</h1><!--titulo 4-->
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item list-group-item-danger" style="background-color:red"><!--permite sacar el borde de la imagen-->
                                                        <img src="img/img2.jpg" height="300" width="230"><!--imagen iphone-->
                                                    </div>
                                                    <h1 class="list-group-item list-group-item-danger"  style="background-color:red"><div style="color:BLACK"><b>IAN NARANJO</b></div></h1><!--titulo de la imagen-->
                                                    <h2><P>PRESIDENTE</P></h2>

                                                    <form method="POST" action="validar.php">
                                                    <!--ENVIAR DATOS-->
                                                  
                                                    <br>
                                                    <div style="text-align: center;">
                                                    <h4><p>SELECCIONE LISTA 2</p></h4>
                                                     <input type="submit" name="insertar2" value="Votar click aqui" class="boton_1" > </div><br>
                                                     <br>                                                                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </form>
                                    </div>

                                    <!--
                                    <form action="validar3.php" method="POST">
                                    <div class="col-sm-12 col-md-6 col-md-4">
                                        <div class="panel-info"> 
                                            <div class="panel-body">
                                                <div class="list-group" align="center"> 
                                                    <div class="list-group-item list-group-item "  style="background-color:yellow;">
                                                        <div style="color:white;">
                                                            <b><h4 class="list-group-item list-group-item-warning" style="background-color:yellow;">LISTA 3</h4></b>
                                                        </div>
                                                    </div>
                                                    <div class="list-group-item list-group-item-warning" style="background-color:yellow;">
                                                        <img src="http://2.bp.blogspot.com/-eZeYLRDXMMs/UXF7e6js9zI/AAAAAAAAAAs/Hg5WqldtyhI/s1600/victor+alexander+talavera+barrios.jpg" height="150" width="150">
                                                    </div>
                                                    <h3 class="list-group-item list-group-item-warning" style="background-color:yellow;"><div style="color:BLACK"><b>MARCO SANCHEZ</b></div></h3>
                                                    <h2><P>PRESIDENTE</P></h2>
                                                  
                                                    <br> 
                                                    <div style="text-align: center;">
                                                    <h4><p>SELECCIONE LISTA 3</p></h4>
                                                    <input type="submit" name="votar3" value="Votar click aqui" class="btn btn-warning" > </div>                                                 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </form>-->
             </center>
          </div>

</body>
</div>

</html>

