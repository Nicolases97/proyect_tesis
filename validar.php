<?php
include('db.php');
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;



$conexion=mysqli_connect("localhost","root","","rol");

$consulta="SELECT * FROM usuarios where usuario='$usuario' and contrasena='$contrasena'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if ($filas['id_cargo']==1){ //Administrador
    header("location:admin/home.php");
}else
if ($filas['id_cargo']==2){ //Doctor
    header("location:doctor/doctor.php");
}


else{
    ?>
    <script type="text/javascript">alert("Datos ingresados INCORRECTOS")</script>
    <script>window.location="login.php";</script>
    <?php
}

mysqli_free_result($resultado);
mysqli_close($conexion);