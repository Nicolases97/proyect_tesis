<?php


$conexion = mysqli_connect("localhost", "root", "", "rol");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>PDF HISTORIA CLINICA</title>
  <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <br>
  <br>
  <br>
    <table>
      <div>
        <header class="sb-nav-fixed">
        <img src="../img/imagenlogo.jpeg">
      </div>
    <h1>REPORTE HISTORIA CLINICA</h1>
      <br>
    </table>
  </header>
  <main>
  <?php

    $query = "SELECT * FROM usuarios_db ud
      INNER JOIN estado e ON ud.id_estado = e.id
      INNER JOIN sexo s ON ud.id_sexo = s.id
      INNER JOIN estado_repro er ON ud.id_repro = er.id
      WHERE ud.uid = '$uidparam' ";
    $resultado = $conexion->query($query);
  ?>
  <div id="project">
  <?php
  foreach ($resultado as $fila) { ?>

  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <table>
      <tbody>
        <tr>
            <td><span>NOMBRE MASCOTA:</span> <?php echo $fila['nombre_mascota']; ?></td>
            <td><span>EDAD:</span> <?php echo $fila['edad_mascota']; ?> Meses</td>
            <td><span>RAZA:</span> <?php echo $fila['nombre_raza']; ?></td>
        </tr>
        <tr>
            <td><span>EMAIL:</span> <?php echo $fila['correo']; ?></td>
            <td><span>FECHA DE NACIMIENTO:</span> <?php echo $fila['fecha_nacimiento']; ?></td>
            <td><span>SEXO:</span> <?php echo $fila['sexo']; ?></td>
        </tr>
      </tbody>
    </table>
  <?php
  }
  ?>
    <table>
      <thead>
        <tr>
          <th>
            <h2>Registro Propietario</h2>
          </th>
        </tr>
        <br>
        <br>
      </thead>
    </table>
    <table>
      <thead>
        <tr>
          <th class="service"><h4>DATOS</h4></th>
          <th class="desc"><h4>INFORMACION</h4></th>          
        </tr>
      </thead>
    </table>
    <table>
      <tbody>
        <tr>
          <td class="service">Nombre de Propietario</td>
          <td class="desc"><?php echo $fila['nombre_propietario']; ?></td>
        </tr>
        <tr>
          <td class="service">N° de Documento</td>
          <td class="desc"><?php echo $fila['cedula']; ?></td>
        </tr>
        <tr>
          <td class="service">Direccion</td>
          <td class="desc"><?php echo $fila['direccion']; ?></td>
        </tr>
        <tr>
          <td class="service">Estrato</td>
          <td class="desc"><?php echo $fila['estrato']; ?></td>
        </tr>
        <tr>
          <td class="service">Ciudad</td>
          <td class="desc"><?php echo $fila['ciudad']; ?></td>
        </tr>
        <tr>
          <td class="service">Numero de Telefono</td>
          <td class="desc"><?php echo $fila['telefono']; ?></td>
        </tr>
        <tr>
          <td class="service">Ocupación</td>
          <td class="desc"><?php echo $fila['ocupacion']; ?></td>
        </tr>
        <tr>
          <td class="service">Correo Electronico</td>
          <td class="desc"><?php echo $fila['correo']; ?></td>
        </tr>
        <tr>
          <td class="service">Estado</td>
          <td class="desc"><?php echo $fila['estado']; ?></td>
        </tr>
      </tbody>
    </table>
    <table>
      <thead>
        <tr>
          <th>
            <h2>Historia Clinica</h2>
          </th>
        </tr>
        <br>
        <br>
      </thead>
    </table>
    <table>
      <thead>
        <tr>
          <th class="service"><h4>DATOS</h4></th>
          <th class="desc"><h4>INFORMACION</h4></th> 
        </tr>
      </thead>
    </table>
    <table>
      <tbody>
        <tr>
          <td class="service">Parvovirosis</td>
          <td class="desc"><?php echo $fila['fecha_parvo']; ?></td>
        </tr>
        <tr>
          <td class="service">Tripe Viral</td>
          <td class="desc"><?php echo $fila['fecha_tripe']; ?></td>
        </tr>
        <tr>
          <td class="service">Rabia</td>
          <td class="desc"><?php echo $fila['fecha_rabia']; ?></td>
        </tr>
        <tr>
          <td class="service">Otra</td>
          <td class="desc"><?php echo $fila['fecha_otra']; ?> <?php echo $fila['otra_vacuna']; ?></td>
        </tr>
        <tr>
          <td class="service">Alergias</td>
          <td class="desc"><?php echo $fila['alergias']; ?></td>
        </tr>
        <tr>
          <td class="service">Cirugias</td>
          <td class="desc"><?php echo $fila['cirugias']; ?></td>
        </tr>
        <tr>
          <td class="service">Antecedentes Geneticos</td>
          <td class="desc"><?php echo $fila['antecedentes']; ?></td>
        </tr>
        <tr>
          <td class="service">Estado Reproductivo</td>
          <td class="desc"><?php echo $fila['estado_reproductivo']; ?></td>
        </tr>
        <tr>
          <td class="service">Pulso</td>
          <td class="desc"><?php echo $fila['pulso']; ?></td>
        </tr>
        <tr>
          <td class="service">Temperatura (C°)</td>
          <td class="desc"><?php echo $fila['temperatura']; ?> C°</td>
        </tr>
        <tr>
          <td class="service">Peso (Kg)</td>
          <td class="desc"><?php echo $fila['peso']; ?> Kg</td>
        </tr>
        <tr>
          <td class="service">Motivo de Ingreso</td>
          <td class="desc"><?php echo $fila['descripcion_ingreso']; ?></td>
        </tr>
        <tr>
          <td class="service">Fecha registro</td>
          <td class="desc"><?php echo $fila['fecha_registro']; ?></td>
        </tr>
      </tbody>
    </table>
    <?php
        $query = "SELECT motivo, medicamento, presentacion, dosis, via, duracion, fecha_ingreso from (
          SELECT inu.motivo_ing as motivo ,im.medicamento as medicamento, im.presentacion, im.dosis, im.via, im.duracion,date_format(inu.fecha, '%Y-%m-%d')as fecha_ingreso, date_format(im.fecha_medicamento, '%Y-%m-%d') as fecha_medicamento
          FROM ingreso_nuevo inu 
          inner join ingreso_medicamento im 
          on inu.uid = im.uid 
          where inu.uid = '$uidparam')A
          where fecha_ingreso = fecha_medicamento
          group by medicamento;";
        $result = $conexion->query($query);
    ?>
      <table>
      <?php
                while($fila = mysqli_fetch_array($result)){?>
        <thead>
          <tr>
            <th><h2>Ultimos Ingresos y Medicamentos</h2></th>
          </tr>
          <br>
        </thead>
      </table>
      <table>
        <thead>
          <tr>
            <th class="service"><h4>DATOS<h4></th>
            <th class="desc"><h4>INFORMACION<h4></th>
          </tr>
          <br>
        </thead>
      </table>
      <table>
        <tbody>
          <tr>
            <td class="service">Motivo de Ingreso</td>
            <td class="desc"><?php echo $fila['motivo'];?></td>
          </tr>
          <tr>
            <td class="service">Medicamento Suminstrado</td>
            <td class="desc"><?php echo $fila['medicamento'];?></td>
          </tr>
          <tr>
            <td class="service">Presentación Medicamento</td>
            <td class="desc"><?php echo $fila['presentacion'];?></td>
          </tr>
          <tr>
            <td class="service">Dosis(Ml)</td>
            <td class="desc"><?php echo $fila['dosis'];?></td>
          </tr>
          <tr>
            <td class="service">Via</td>
            <td class="desc"><?php echo $fila['via'];?></td>
          </tr>
          <tr>
            <td class="service">Frecuencia y Duración</td>
            <td class="desc"><?php echo $fila['duracion'];?></td>
          </tr>
          <tr>
            <td class="service">Fecha de Asignación</td>
            <td class="desc"><?php echo $fila['fecha_ingreso'];?></td>
          </tr>
          <?php
                }
          ?>
        </tbody>
      </table>
    <?php
    $query = "SELECT inu.motivo_ing as motivoing, date_format(inu.fecha, '%Y-%m-%d') as fecha 
    from ingreso_nuevo inu
    where date_format(inu.fecha, '%Y-%m-%d') 
    not in (select date_format(im.fecha_medicamento, '%Y-%m-%d') 
    from ingreso_medicamento im)
    and inu.uid = '$uidparam'
    order by inu.fecha DESC;";
    $result = $conexion->query($query);
    ?>
    <table>
          <thead>
          <?php
          while ($fila = mysqli_fetch_array($result)) { ?>
            <tr>
              <th>
                <h2>Visitas Anteriores</h2>
              </th>
            </tr>
            <br>
          </thead>
    </table>
    <table>
          <thead>
            <tr>
              <th class="service"><h4>DATOS</h4></th>
              <th class="desc"><h4>INFORMACION</h4></th>
            </tr>
            <br>
          </thead>
    </table>
    <table>
        <tbody>
          <tr>
            <td class="service">Motivo de Ingreso</td>
            <td class="desc"><?php echo $fila['motivoing'];?></td>
          </tr>
          <tr>
            <td class="service">Fecha de Asignación</td>
            <td class="desc"><?php echo $fila['fecha'];?></td>
          </tr>
      <?php
      }
      ?>
      </tbody>
    </table>
    <br><br><br><br><br><br>
    <div id="notices" class="notice">
      <div>Nota:</div>
      <br>
      <div class="notice">Se genera el presenté documento con la finalidad de brindar información y
        conocimiento del estado del paciente, este documento <br> 
        debe ser validado en compañia de un profesional para la lectura del resultado.</div>
      <br><br><br><br>
    </div>
  </main>
</body>
</html>