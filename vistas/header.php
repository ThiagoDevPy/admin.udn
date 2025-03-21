<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema de Asistencias</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="../publico/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../publico/css/font-awesome.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../publico/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../publico/css/_all-skins.min.css">
  <link rel="apple-touch-icon" href="../publico/img/apple-touch-icon.png">
  <link rel="shortcut icon" href="../publico/img/icono.ico">

  <!-- DATATABLES -->
  <link rel="stylesheet" type="text/css" href="../publico/datatables/jquery.dataTables.min.css">
  <link href="../publico/datatables/buttons.dataTables.min.css" rel="stylesheet" />
  <link href="../publico/datatables/responsive.dataTables.min.css" rel="stylesheet" />

  <link rel="stylesheet" type="text/css" href="../publico/css/bootstrap-select.min.css">
  


  <style>
    .dataTables_wrapper .top {
      display: flex;
      justify-content: center;
      /* Centra los botones horizontalmente */
      margin-bottom: 10px;
      /* Espaciado inferior, ajusta según sea necesario */
    }
  </style>

</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <!-- Logo -->
      <a href="escritorio.php" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>U</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"> <img src="../publico/img/uninorte-logo.png" width="100 " height="30" alt="" /><b></b></span>
      </a>
      <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Navegación</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li class="dropdown user user-menu">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="hidden-xs fa fa-angle-down" id=""></span>
              </a>
              <ul class="dropdown-menu">
                <!-- User image -->

                <!-- Menu Footer-->
                <li class="user-header">
                  <div class="pull-center" style="display:flex; justify-content: center; ">
                    <img src="" id="userimage" alt="" class="user-image" style="width: 100px; height: 100px;">
                  </div>
                </li>


                <li class="user-main">
                  <div style="margin: 10px; display:flex; justify-content: center;">
                  <span class="hidden-xs" ><strong id="nusuario"></strong></span>
                  </div>
                </li>
                <li class="user-footer">
                  <div style="margin: 5px;">
                    <a href="../controlador/logout.php" class="btn btn-default btn-flat">Cerrar Sesion</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">
      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">
        <!-- Sidebar user panel -->

        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">




          <li><a href="escritorio.php"><i class="fa  fa-dashboard (alias)"></i> <span>Escritorio</span></a>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i> <span>Asistencias</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="asistencia.php"><i class="fa fa-circle-o"></i>Lista de Asistencias</a></li>
              <li><a href="regasistencia.php"><i class="fa fa-circle-o"></i> Asistencia QR</a></li>
               <li><a href="asistenciamanual.php"><i class="fa fa-circle-o"></i>Registro Manual</a></li>
            </ul>
          </li>


          <li class="treeview">
            <a href="#">
              <i class="fa fa-lock"></i> <span>Eventos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="evento.php"><i class="fa fa-circle-o"></i>Eventos</a></li>

            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-users"></i> <span>Alumnos</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="alumno.php"><i class="fa fa-circle-o"></i> Lista de Alumnos</a></li>

            </ul>
          </li>

          <li class="treeview">
            <a href="#">
              <i class="fa fa-lock"></i> <span>Usuarios</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="usuario.php"><i class="fa fa-circle-o"></i> Usuarios</a></li>

            </ul>
          </li>
          
          <li class="treeview">
            <a href="#">
              <i class="fa fa-list"></i> <span>Certificados</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="gencertificado.php"><i class="fa fa-circle-o"></i> Certificados</a></li>

            </ul>
          </li>
          
          
          
            <li class="treeview">
            <a href="#">
              <i class="fa fa-dashboard (alias)"></i> <span>Configuracion</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="configuracion.php"><i class="fa fa-circle-o"></i> Configuracion del QR</a></li>

            </ul>
          </li>
          
        </ul>
        
        
        
      </section>
      <!-- /.sidebar -->
    </aside>


    <script src="scripts/header.js"></script>