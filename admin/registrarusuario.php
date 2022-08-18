<?php
include('conect_db.php');
 

$nombre_mascota=$_POST['nombre_mascota'];
$id_raza=$_POST['id_raza'];
$nombre_raza=$_POST['nombre_raza'];
$id_sexo=$_POST['id_sexo'];
$edad_mascota=$_POST['edad_mascota'];
$fecha_nacimiento=$_POST['fecha_nacimiento'];
$senales=$_POST['senales'];
$id_procedencia=$_POST['id_procedencia'];
$nombre_propietario=$_POST['nombre_propietario'];
$cedula=$_POST['cedula'];
$direccion=$_POST['direccion'];
$estrato=$_POST['estrato'];
$ciudad=$_POST['ciudad'];
$telefono=$_POST['telefono'];
$ocupacion=$_POST['ocupacion'];
$correo=$_POST['correo'];
$id_estado=$_POST['id_estado'];
$descripcion_ingreso=$_POST['descripcion_ingreso'];
$fecha_parvo=$_POST['fecha_parvo'];
$fecha_tripe=$_POST['fecha_tripe'];
$fecha_rabia=$_POST['fecha_rabia'];
$fecha_otra=$_POST['fecha_otra'];
$otra_vacuna=$_POST['otra_vacuna'];
$alergias=$_POST['alergias'];
$cirugias=$_POST['cirugias'];
$antecedentes=$_POST['antecedentes'];
$id_repro=$_POST['id_repro'];
$pulso=$_POST['pulso'];
$temperatura=$_POST['temperatura'];
$peso=$_POST['peso'];




$conexion=mysqli_connect("localhost","root","","rol");


$insertar="INSERT INTO usuarios_db (nombre_mascota, id_raza, nombre_raza, id_sexo, edad_mascota, fecha_nacimiento, senales, id_procedencia,
nombre_propietario, cedula, direccion, estrato, ciudad, telefono, ocupacion, correo, id_estado, descripcion_ingreso, fecha_parvo, fecha_tripe,
fecha_rabia, fecha_otra, otra_vacuna, alergias, cirugias, antecedentes, id_repro, pulso, temperatura, peso) 
VALUES ('$nombre_mascota', '$id_raza', '$nombre_raza', '$id_sexo', '$edad_mascota', '$fecha_nacimiento', '$senales', '$id_procedencia',
'$nombre_propietario', '$cedula', '$direccion', '$estrato', '$ciudad', '$telefono', '$ocupacion', '$correo', '$id_estado', '$descripcion_ingreso', '$fecha_parvo', '$fecha_tripe',
'$fecha_rabia', '$fecha_otra', '$otra_vacuna', '$alergias', '$cirugias', '$antecedentes', '$id_repro', '$pulso', '$temperatura', '$peso')";


$resultado = mysqli_query($conexion,$insertar);


?>
<?php
if ($resultado) {
        echo "<script> alert('Valores ingresados correctamente'); 
        location.href= 'createuser.php';
        </script>";
}else{
        echo "<script> alert('¡¡Se ha poducido un error al insertar los datos!!...'); </script>";
}


mysqli_free_result($resultado);
mysqli_close($conexion);