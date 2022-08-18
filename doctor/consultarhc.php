


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PRINCIPAL</title>
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="shortcut icon" type="image/jpeg" href="../img/imagenlogo.jpeg">
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="doctor.php">Veterinarias S.A.S</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Doctor <i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion_doc.php">Logout</a>
                    </div>
                </li>
            </ul>
        </nav>
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Inicio</div>
                            <a class="nav-link" href="doctor.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">AUTENTICACIÓN</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Consulta Paciente
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="consultuser.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                    Consultar Paciente
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">REPORTES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_two" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                Generación Reportes
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages_two" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="consultarhc.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-calendar-plus"></i></div>
                                    Descargar Historia Clinica
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Historia Clinica</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_three" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                                Historia Clinica
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages_three" aria-labelledby="headingThree" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="historiaclinica.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-notes-medical"></i></div>
                                    Consultar HC
                                    </a>
                                    <a class="nav-link" href="formulashc.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-notes-medical"></i></div>
                                    Formulas Medicas
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link" href="cerrar_sesion_doc.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cerrar Session
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Doctor
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Buscar Historia Clinica</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Descargar Información Paciente</li>
                        </ol>
                            <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
                                        <div class="form-row">    
                                            <div class="col-sm-6 form-group">
                                                <label>Ingrese Cedula Propietario</label>
                                                <input type="number" class="form-control" name="cedula" placeholder="Ingrese Cedula" required>
                                            </div>
                                            <div class="col-sm-12 reset-button">
                                                 <button type="submit" name="consultar" class="btn btn-success">Consultar</button>
                                                 <button type="reset" name="borrar" class="btn btn-danger">Borrar</button>
                                            </div>
                                            <br></br>
                                        </div>
                                        
                            </form>
                            <form class="col-sm-12" data-bitwarden-watching="1" action="consultarhc.php" method="post">
                                            <?php 
                                            if(isset($_POST['consultar'])){
                                                $cedula = $_POST['cedula'];
                                               }else {
                                                   $cedula="";
                                               }
                                            ?>
                                <div class="form-row">
                                    <div class="col-sm-6 form-group">
                                        <?php
                                            $conexion=mysqli_connect("localhost","root","","rol");

                                            $query = "SELECT * FROM usuarios_db ud WHERE cedula = '$cedula'";
                                            $resultado= mysqli_query($conexion,$query);
                                        ?>
                                        <br>
                                        <label>Seleccione el nombre su mascota</label>
                                        <select class="form-control" name="uid">
                                        <?php
                                            while($row = mysqli_fetch_array($resultado))
                                            {
                                        ?>
                                            <option value="<?php echo $row['uid'];?>"><?php echo $row['nombre_mascota']?></option>
                                        <?php
                                            }
                                        ?>
                                        </select>
                                        <br>
                                            <div class="form-row">
                                                <div class="col-sm-6 reset-button">
                                                    <button type="submit" name="consultando" class="btn btn-success">Consultar</button>
                                                </div>
                                            </div>
                                            <br>
                                    </div>
                                </div>
                            </form>
                            <?php
                                $conexion=mysqli_connect("localhost","root","","rol");

                                if(isset($_POST['uid'])){
                                    $uid = $_POST['uid'];

                                    $consultar="SELECT * FROM usuarios_db ud 
                                    inner join raza r on ud.id_raza = r.id
                                    inner join sexo s on ud.id_sexo = s.id
                                    inner join procedencia p on ud.id_procedencia = p.id
                                    inner join estado e on ud.id_estado = e.id
                                    inner join estado_repro er on ud.id_repro = er.id
                                    WHERE ud.uid = '$uid'";

$resultado= mysqli_query($conexion,$consultar);


while($row = mysqli_fetch_array($resultado))
{
    ?>
    <div class="form-row">
        <div class="col-sm-12 reset-button">
            <?php
                if(isset($_POST['uid'])){
                $uid = $_POST['uid'];
                }else {
                $uid="";
                }
                echo '
                <a name="descargar" class="btn btn-info" required="" href="../dompdf/index.php?uid='.$uid.'">Descargar Reporte</a>
                ';
            ?>
        </div>
    </div>
    <br><br>
<form class="col-sm-12" data-bitwarden-watching="1" action="" method="POST">
    <h2>Registro Paciente</h2>
    <div class="form-row">
            <input type="hidden" class="form-control" name="uid" value="<?php echo $row['uid']?>">
            <input type="hidden" class="form-control" name="cedula" value="<?php echo $cedula?> ">
        <div class="col-sm-6 form-group">
            <label>Nombre de Mascota</label>
            <input type="text" class="form-control" name="nombre_mascota" placeholder="Enter Name" readonly="readonly" required="" value="<?php echo $row['nombre_mascota']?>">
        </div>
        <div class="col-sm-6 form-group">
            <label>Tipo de Raza</label>
            <input type="text" class="form-control" name="id_raza" placeholder="Enter Name" readonly="readonly" required="" value="<?php echo $row['raza']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Raza</label>
            <input type="text" class="form-control" name="nombre_raza" placeholder="Enter Name" readonly="readonly" required="" value="<?php echo $row['nombre_raza']?>">
        </div>
        <div class="col-sm-6 form-group">
            <label>Sexo</label>
            <input type="text" class="form-control" name="id_sexo" placeholder="Enter Age" readonly="readonly" required="" value="<?php echo $row['sexo']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Edad de Mascota (Meses)</label>
            <input type="text" class="form-control" name="edad_mascota" placeholder="Enter Number" readonly="readonly" required="" value="<?php echo $row['edad_mascota'].' Meses'?>">
        </div>    
        <div class="col-sm-6 form-group">
            <label>Fecha de nacimiento</label>
            <input type="text" class="form-control" name="fecha_nacimiento" placeholder="None..." readonly="readonly" required="" value="<?php echo $row['fecha_nacimiento']?>">
        </div>
    </div>    
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Señales Particulares</label>
            <input type="text" class="form-control" name="senales" placeholder="Enter Id" readonly="readonly" required="" value="<?php echo $row['senales']?>">
        </div>
        <div class="col-sm-6 form-group">
            <label>Procedencia</label>
            <input type="text" class="form-control" name="id_procedencia" placeholder="Ej: Schnauzer" readonly="readonly" required="" value="<?php echo $row['des_procedencia']?>">
        </div>
    </div>
    <br></br>
    <h2>Registro Propietario</h2>       
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Nombre de Propietario</label>
            <input type="text" class="form-control" name="nombre_propietario" placeholder="Address" readonly="readonly" required="" value="<?php echo $row['nombre_propietario']?>">
        </div> 
        <div class="col-sm-6 form-group">
            <label>N° de Documento</label>
            <input type="text" class="form-control" placeholder="Señales Particules" readonly="readonly" name="cedula" required="" value="<?php echo $row['cedula']?>">
        </div>
    </div>
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Dirección</label>
            <input type="text" class="form-control" name="direccion" placeholder="Email" readonly="readonly" required="" value="<?php echo $row['direccion']?>">
        </div>
        <div class="col-sm-6 form-group">
            <label>Estrato</label>
            <input type="text" class="form-control" name="estrato" placeholder="Estrato" readonly="readonly" required="" value="<?php echo $row['estrato']?>">
        </div>
    </div>   
    <div class="form-row"> 
        <div class="col-sm-6 form-check">
            <label>Ciudad</label><br>
            <input type="text" class="form-control" name="ciudad" placeholder="Sexo" readonly="readonly" required="" value="<?php echo $row['ciudad']?>">
        </div>
        <div class="col-sm-6 form-check">
            <label>Numero de Telefono</label><br>
            <input type="text" class="form-control" name="telefono" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['telefono']?>">
        </div>
    </div>   
    <div class="form-row"> 
        <div class="col-sm-6 form-check">
            <label>Ocupación</label><br>
            <input type="text" class="form-control" name="ocupacion" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['ocupacion']?>">
        </div>
        <div class="col-sm-6 form-check">
            <label>Correo Electronico</label><br>
            <input type="text" class="form-control" name="correo" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['correo']?>">
        </div>
    </div>   
    <div class="form-row"> 
        <div class="col-sm-6 form-check">
            <label>Estado</label><br>
            <input type="text" class="form-control" name="id_estado" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['estado']?>">
        </div>
    </div>
    <br></br>
    <h2>Historia Clinica</h2>   
    <div class="form-row">
        <div class="col-sm-3 form-check">
            <label>Parvovirosis</label><br>
            <input type="text" class="form-control" name="fecha_parvo" placeholder="Parvovirosis" readonly="readonly" required="" value="<?php echo $row['fecha_parvo']?>">
        </div> 
        <div class="col-sm-3 form-check">
            <label>Triple Viral</label><br>
            <input type="text" class="form-control" name="fecha_tripe" placeholder="Triple Viral" readonly="readonly" required="" value="<?php echo $row['fecha_tripe']?>">
        </div>
        <div class="col-sm-3 form-check">
            <label>Rabia</label><br>
            <input type="text" class="form-control" name="fecha_rabia" placeholder="Rabia" readonly="readonly" required="" value="<?php echo $row['fecha_rabia']?>">
        </div> 
        <div class="col-sm-3 form-check">
            <label>Otra</label><br>
            <input id="some-textarea" class="form-control" rows="2" name="otra_vacuna" placeholder="Enter text ..." readonly="readonly" required="" value="<?php echo $row['otra_vacuna']?>">
            <input type="text" class="form-control" name="fecha_otra" placeholder="Estado" readonly="readonly"  value="<?php echo $row['fecha_otra']?>">
        </div>
    </div>   
    <div class="form-row">
        <div class="col-sm-6 form-check">
            <label>Alergias</label><br>
            <input type="text" class="form-control" name="alergias" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['alergias']?>">
        </div> 
        <div class="col-sm-6 form-check">
            <label>Cirugias</label><br>
            <input type="text" class="form-control" name="cirugias" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['cirugias']?>">
        </div>
    </div>   
    <div class="form-row">
        <div class="col-sm-6 form-check">
            <label>Antecedentes Geneticos</label><br>
            <input type="text" class="form-control" name="antecedentes" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['antecedentes']?>">
        </div> 
        <div class="col-sm-6 form-check">
            <label>Estado Reproductivo</label><br>
            <input type="text" class="form-control" name="id_repro" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['estado_reproductivo']?>">
        </div>
    </div>   
    <div class="form-row">
        <div class="col-sm-6 form-check">
            <label>Pulso</label><br>
          <input type="text" class="form-control" name="pulso" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['pulso']?>">
        </div> 
        <div class="col-sm-6 form-check">
            <label>Temperatura (C°)</label><br>
            <input type="text" class="form-control" name="temperatura" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['temperatura'].' C°'?>">
        </div>
    </div>   
    <div class="form-row">
        <div class="col-sm-6 form-check">
            <label>Peso (Kg)</label><br>
            <input type="text" class="form-control" name="peso" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['peso'].' Kg'?>">
        </div>
    </div>
    <div class="form-row"> 
        <div class="col-sm-6 form-group">
            <label>Motivo de Ingreso</label>
            <input id="some-textarea" class="form-control" rows="7" name="descripcion_ingreso" placeholder="Enter text ..." readonly="readonly" required="" value="<?php echo $row['descripcion_ingreso']?>">
        </div>
        <div class="col-sm-6 form-group">
            <label>Fecha registro</label>
            <input type="text" class="form-control" name="fecha_registro" placeholder="Estado" readonly="readonly" required="" value="<?php echo $row['fecha_registro']?>">
        </div>
    </div>
    <br></br>
</form>

    <?php
}


// $consult = "SELECT * FROM ingreso_nuevo inu
// INNER JOIN usuarios_db ud on inu.uid = ud.uid
// WHERE ud.uid = '$uid' ORDER BY inu.fecha DESC";

$consult = "SELECT motivo, medicamento, presentacion, dosis, via, duracion, fecha_ingreso from (
    SELECT inu.motivo_ing as motivo ,im.medicamento as medicamento, im.presentacion, im.dosis, im.via, im.duracion,date_format(inu.fecha, '%Y-%m-%d')as fecha_ingreso, date_format(im.fecha_medicamento, '%Y-%m-%d') as fecha_medicamento
    FROM ingreso_nuevo inu 
    inner join ingreso_medicamento im 
    on inu.uid = im.uid 
    where inu.uid = '$uid')A
    where fecha_ingreso = fecha_medicamento
    group by medicamento;";

$resul= mysqli_query($conexion,$consult) or die (mysqli_error());

while($row = mysqli_fetch_array($resul)){

    ?>
    <br>
    <div class="form-row">
        <h2>Ultimos Ingresos y Medicamentos</h2>
    </div>
    <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
    <div class="form-row">
        <div class="col-sm-6 form-group">
            <label>Motivo de Ingreso</label>
            <input id="some-textarea" class="form-control" rows="5" name="motivo_ing" placeholder="Enter text ..." readonly="readonly" required="" value="<?php echo $row['motivo']?>">
        </div>
        <div class="col-sm-6 form-group">
                <label>Medicamento Suminstrado</label>
                <input type="text" class="form-control" name="medicamento" placeholder="Estado" readonly="readonly"  value="<?php echo $row['medicamento']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Presentación Medicamento</label>
                <input type="text" class="form-control" name="presentacion" placeholder="Estado" readonly="readonly"  value="<?php echo $row['presentacion']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Dosis(Ml)</label>
                <input type="text" class="form-control" name="dosis" placeholder="Estado" readonly="readonly"  value="<?php echo $row['dosis']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Via</label>
                <input type="text" class="form-control" name="via" placeholder="Estado" readonly="readonly"  value="<?php echo $row['via']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Frecuencia y Duración</label>
                <input type="text" class="form-control" name="duracion" placeholder="Estado" readonly="readonly"  value="<?php echo $row['duracion']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Fecha de Asignación</label>
                <input type="text" class="form-control" name="fecha_medicamento" placeholder="Estado" readonly="readonly"  value="<?php echo $row['fecha_ingreso']?>">
            </div>
    </div>
    </form>

    <?php
    
}


$consul = "SELECT inu.motivo_ing, date_format(inu.fecha, '%Y-%m-%d') as fecha FROM ingreso_nuevo inu
where date_format(inu.fecha, '%Y-%m-%d') 
not in (select date_format(im.fecha_medicamento, '%Y-%m-%d') 
from ingreso_medicamento im)
and inu.uid = '$uid'
order by inu.fecha DESC;";

$result = mysqli_query($conexion,$consul) or die(mysqli_error());

while ($row = mysqli_fetch_array($result)){

    

    ?>
        <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
            <br></br>
                <div class="form-row">
                    <h2>Ultimos Ingresos</h2>
                </div>
        </form>
    <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
        <div class="form-row">
            <div class="col-sm-6 form-group">
                <label>Motivo de Visita</label>
                <input id="some-textarea" class="form-control" rows="5" name="motivo_ing" readonly="readonly" required="" value="<?php echo $row['motivo_ing']?>">
            </div>
            <div class="col-sm-6 form-group">
                <label>Fecha de Visita</label>
                <input type="text" class="form-control" name="fecha_ingreso" readonly="readonly"  value="<?php echo $row['fecha']?>">
            </div>
        </div>
                                        </form>

                                        <?php
                                    }
                                    
                                }
                                
                            ?>
                                   
                                <br></br>
                                <br></br>      
                            </div>
                            </div>
                        </div>
                    </div>
                </main>    
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2020</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/datatables-demo.js"></script>
    </body>
</html>