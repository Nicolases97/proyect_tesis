<?php
include('conect_db.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$telefono = $_POST['telefono'];
$id_documento = $_POST['id_documento'];
$cedula = $_POST['cedula'];
$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];
$id_cargo = $_POST['id_cargo'];
$fecha_nacimiento = $_POST['fecha_nacimiento'];
$id_sexo = $_POST['id_sexo'];
$id_estado = $_POST['id_estado'];


$conexion=mysqli_connect("localhost","root","","rol");

$insertar = "INSERT INTO db_doctor (nombre, apellido, edad, telefono, id_documento, 
cedula, correo, contrasena, id_cargo, fecha_nacimiento, id_sexo, id_estado) 
VALUES ('$nombre','$apellido','$edad','$telefono','$id_documento','$cedula','$correo',
'$contrasena','$id_cargo','$fecha_nacimiento','$id_sexo','$id_estado')";


$resultado = mysqli_query($conexion,$insertar);



?>
<?php
if ($resultado){
        echo "<script>alert ('Datos insertado en base de datos');
        location.href= 'createdoctor.php';
        </script>";
        
}else{
    echo "<script>alert ('Datos no insertados');</script>";
}


mysqli_free_result($resultado);
mysqli_close($conexion);
