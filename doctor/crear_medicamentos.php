<?php
include('conect_db.php');

$uid = $_POST['uid'];
$medicamento = $_POST['medicamento'];
$presentacion = $_POST['presentacion'];
$dosis = $_POST['dosis'];
$via = $_POST['via'];
$duracion = $_POST['duracion'];


$conexion=mysqli_connect("localhost","root","","rol");

$insertar = "INSERT INTO ingreso_medicamento (uid,medicamento,presentacion,dosis,via,duracion) 
VALUES ('$uid','$medicamento','$presentacion','$dosis','$via','$duracion')";


$resultado = mysqli_query($conexion,$insertar) or die (mysqli_error());



?>
<?php
if ($resultado){
        echo "<script>alert ('Datos guardados correctamente');
        location.href= 'formulashc.php';
        </script>";
        
}else{
    echo "<script>alert ('Los datos no se pudieron guardar');</script>";
}


mysqli_free_result($resultado);
mysqli_close($conexion);
