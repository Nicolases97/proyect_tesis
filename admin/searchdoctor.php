

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
            <a class="navbar-brand" href="home.php">Veterinarias S.A.S</a>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                <div class="input-group">
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ml-auto ml-md-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Administrador <i class="fas fa-user fa-fw"></i></a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="cerrar_sesion.php">Logout</a>
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
                            <a class="nav-link" href="home.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">AUTENTICACI??N</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Creaci??n Paciente
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="createuser.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Crear Paciente
                                    </a>
                                    <a class="nav-link" href="searchuser.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                    Consultar Paciente
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_one" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user-md"></i></div>
                                Registrar Doctor
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages_one" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="createdoctor.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Registrar Doctor
                                    </a>
                                    <a class="nav-link" href="searchdoctor.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-edit"></i></div>
                                    Consultar Doctor
                                    </a>
                                    <a class="nav-link" href="resetpass.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-secret"></i></div>
                                    Olvide Contrase??a
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">REPORTES</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages_two" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-calendar-alt"></i></div>
                                Generaci??n Reportes
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
                            <a class="nav-link" href="cerrar_sesion.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Cerrar Session
                            </a>
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Logged in as:</div>
                        Administrador
                    </div>
                </nav>
            </div>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
                        <h1 class="mt-4">Buscar Doctor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Buscar Doctor</li>
                        </ol>
                            <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
                                        <div class="form-row">    
                                            <div class="col-sm-6 form-group">
                                                <label>Ingrese cedula Doctor</label>
                                                <input type="number" class="form-control" name="cedula" placeholder="Ingrese cedula" required>
                                            </div>
                                            <div class="col-sm-12 reset-button">
                                                 <button type="submit" name="consultar" class="btn btn-success">Consultar</button>
                                                 <button type="reset" name="borrar" class="btn btn-danger">Borrar</button>
                                            </div>
                                            <br></br>
                                            <br></br>
                                        </div>
                            </form>
                            <?php

                                $conexion=mysqli_connect("localhost","root","","rol");

                                if(isset($_POST['consultar']))
                                {
                                    $cedula = $_POST['cedula'];

                                    $consultar="SELECT * FROM db_doctor db
                                    inner join estado e on db.id_estado = e.id
                                    inner join sexo s on db.id_sexo = s.id
                                    inner join documento d on db.id_documento = d.id
                                    inner join cargo c on db.id_cargo = c.id
                                    where db.cedula = '$cedula'";

                                    $resultado=mysqli_query($conexion,$consultar);


                                    while($row = mysqli_fetch_array($resultado))
                                    {
                                        ?>

                                    <form class="col-sm-12" data-bitwarden-watching="1" action="" method="post">
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nombre Completo</label>
                                                <input type="text" class="form-control" name="nombre" placeholder="Enter Name" readonly="readonly" required="" value="<?php echo $row['nombre']?>">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control" name="apellido" placeholder="Enter Lastname" readonly="readonly" required="" value="<?php echo $row['apellido']?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Edad</label>
                                                <input type="number" class="form-control" name="edad" placeholder="Enter Age" readonly="readonly" required="" value="<?php echo $row['edad']?>">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Numero de Telefono</label>
                                                <input type="text" class="form-control" name="telefono" placeholder="Enter Number" readonly="readonly" required="" value="<?php echo $row['telefono']?>">
                                            </div>
                                        </div>    
                                        <div class="form-row">    
                                            <div class="col-sm-6 form-group">
                                                <label>Tipo de Documento</label>
                                                <input type="text" class="form-control" name="id_documento" placeholder="Tipo de Documento" readonly="readonly" required="" value="<?php echo $row['tipo_documento']?>">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>N?? de Documento</label>
                                                <input type="text" class="form-control" name="cedula" placeholder="Enter Id" readonly="readonly" required="" value="<?php echo $row['cedula']?>">
                                            </div>
                                        </div>    
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Correo Electronico</label>
                                                <input type="email" class="form-control" name="correo" placeholder="Enter Email" readonly="readonly" required="" value="<?php echo $row['correo']?>">
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Rol</label>
                                                <input type="text" class="form-control" name="id_cargo" placeholder="rol" readonly="readonly" required="" value="<?php echo $row['descripcion']?>">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Fecha de nacimiento</label>
                                                <input class="datepicker form-control hasDatepicker" name="fecha_nacimiento" readonly="readonly" type="date" value="<?php echo $row['fecha_nacimiento']?>">
                                            </div>
                                        </div>
                                        <div class="form-row">      
                                            <div class="col-sm-3 form-check">
                                             <label>Sexo</label><br>
                                             <input type="text" class="form-control" name="id_sexo" placeholder="sexo" readonly="readonly" required="" value="<?php echo $row['sexo']?>">
                                            </div>
                                            <div class="col-sm-3 form-check">
                                              <label>Estado</label><br>
                                              <input type="text" class="form-control" name="id_estado" placeholder="estado" readonly="readonly" required="" value="<?php echo $row['estado']?>">
                                            </div>
                                        </div>
                                        <br></br>
                                        <br></br>
                                    </form>

                                        <?php
                                    }
                                }
                                ?>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    </body>
</html>