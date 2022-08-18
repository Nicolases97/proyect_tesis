

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
                            <div class="sb-sidenav-menu-heading">AUTENTICACIÓN</div>
                            <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                                Creación Paciente
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link" href="createuser.php">
                                    <div class="sb-nav-link-icon"><i class="fas fa-user-plus"></i></div>
                                    Crear Paciente
                                    </a>
                                    <a class="nav-link" href="searchuser.html">
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
                                    Olvide Contraseña
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
                        <h1 class="mt-4">Creación Doctor</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Registro Doctor</li>
                        </ol>
                            <form class="col-sm-12" data-bitwarden-watching="1" action="registrardoctor.php" method="post">
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Nombre Completo</label>
                                                <input type="text" class="form-control" placeholder="Enter Name" name="nombre" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Apellido</label>
                                                <input type="text" class="form-control" placeholder="Enter Lastname" name="apellido" required>
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Edad</label>
                                                <input type="number" class="form-control" placeholder="Enter Age" name="edad" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Numero de Telefono</label>
                                                <input type="number" class="form-control" placeholder="Enter Number" name="telefono" required>
                                            </div>
                                        </div>    
                                        <div class="form-row">    
                                            <div class="col-sm-6 form-group">
                                                <label>Tipo de Documento</label>
                                                <select class="form-control" id="exampleSelect" size="1" name="id_documento" required>
                                                    <option selected="" class="test">None...</option>
                                                    <option value="1">C.C</option>
                                                    <option value="2">C.E</option>
                                                    <option value="3">PASSPORT</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>N° de Documento</label>
                                                <input type="number" class="form-control" placeholder="Enter Id" name="cedula" required>
                                            </div>
                                        </div>    
                                        <div class="form-row">
                                            <div class="col-sm-6 form-group">
                                                <label>Correo Electronico</label>
                                                <input class="form-control" placeholder="ejemplo@ejemplo.com" name="correo" required>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Contraseña</label>
                                                <input type="password" class="form-control" placeholder="Enter Password" name="contrasena" required>
                                            </div>
                                        </div>
                                        <div class="form-row"> 
                                            <div class="col-sm-6 form-group">
                                                <label>Rol</label>
                                                <select class="form-control" id="exampleSelect1" name="id_cargo" required>
                                                    <option selected="" class="test">None...</option>
                                                    <option value="2">Doctor</option>
                                                    <option value="3">Aux.Veterinaria</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-3 form-group">
                                                <label>Fecha de nacimiento</label>
                                                <input class="datepicker form-control hasDatepicker" type="date" name="fecha_nacimiento" required>
                                            </div>
                                        </div>
                                        <div class="form-row">      
                                            <div class="col-sm-3 form-check">
                                             <label>Sexo</label><br>
                                             <label class="radio-inline"><input type="radio" name="id_sexo" value="3" checked="checked" required>Masculino</label> 
                                             <label class="radio-inline"><input type="radio" name="id_sexo" value="4" required>Femenino</label>
                                            </div>
                                            <div class="col-sm-3 form-check">
                                             <label>Estado</label><br>
                                             <label class="radio-inline"><input type="radio" name="id_estado" value="1" checked="checked" required>Activo</label> 
                                             <label class="radio-inline"><input type="radio" name="id_estado" value="2" required>Inactivo</label>  
                                            </div>
                                        </div>
                                            <br></br>
                                        <div class="col-sm-12 reset-button">
                                             <button type="submit" class="btn btn-success">Guardar</button>
                                             <button type="reset" class="btn btn-danger">Cancelar</button>
                                        </div>  
                                        <br></br>
                                        <br></br>     
                                </form>
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