<?php
include('conect_db.php');

$motivo_ing = $_POST['motivo_ing'];
$uid = $_POST['uid'];

$conexion=mysqli_connect("localhost","root","","rol");

$insertar = "INSERT INTO ingreso_nuevo (motivo_ing, uid) VALUES ('$motivo_ing','$uid')";


$resultado = mysqli_query($conexion,$insertar) or die (mysqli_error());



?>
<?php
if ($resultado){
        echo "<script>alert ('Datos guardados correctamente');
        location.href= 'historiaclinica.php';
        </script>";
        
}else{
    echo "<script>alert ('Los datos no se pudieron guardar');</script>";
}


mysqli_free_result($resultado);
mysqli_close($conexion);
