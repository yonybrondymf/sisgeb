<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Biblioteca Virtual | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- SweetAlert  -->
    <link rel="stylesheet" href="{{ url('assets/sweetalert/sweetalert.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ url('assets/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <!-- DataTables Export -->
    <link rel="stylesheet" href="{{ url('assets/datatables-export/css/buttons.dataTables.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ url('assets/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/AdminLTE.min.css')}}">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="{{ url('assets/dist/css/skins/_all-skins.min.css')}}">


    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!-- SweetAlert  -->
    <script src="{{ url('assets/sweetalert/sweetalert.min.js')}}"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="{{ url('assets/index2.html')}}" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>DS</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Despachos</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                Yony Brondy
                            </a>
                            <ul class="dropdown-menu">
                              <li><a href="auth/logout">Cerrar Session</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">Menú de Navegación</li>
                    
                    <li>
                        <a href="backend/dashboard"><i class="fa fa-book"></i> <span>Inicio</span></a>
                    </li>

                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Mantenimientos</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{ url('carreras') }}"><i class="fa fa-circle-o"></i> Carreras</a></li>
                            <li><a href="backend/mantenimientos/facultades"><i class="fa fa-circle-o"></i> Facultades</a></li>
                            <li><a href="backend/mantenimientos/lectores"><i class="fa fa-circle-o"></i> Lectores</a></li>
                            <li><a href="{{ url('libros') }}"><i class="fa fa-circle-o"></i> Libros</a></li>
                            <li><a href="backend/mantenimientos/pagos"><i class="fa fa-circle-o"></i> Pagos</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Transacciones</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="backend/transacciones/prestamos"><i class="fa fa-circle-o"></i> Prestamos</a></li>
                            <li><a href="backend/transacciones/reservas"><i class="fa fa-circle-o"></i> Reservas</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Ajustes</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="backend/ajustes/perdidas"><i class="fa fa-circle-o"></i> Perdida de Libro</a></li>
                            <li><a href="backend/ajustes/sanciones"><i class="fa fa-circle-o"></i> Sanciones</a></li>
                        </ul>
                    </li>
                    
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Administrador</span>
                            <span class="pull-right-container">
                              <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="backend/administrador/usuarios"><i class="fa fa-circle-o"></i> Usuarios</a></li>
                            <li><a href="backend/administrador/perfiles"><i class="fa fa-circle-o"></i> Perfiles</a></li>
                            <li><a href="backend/administrador/permisos"><i class="fa fa-circle-o"></i> Permisos</a></li>
                        </ul>
                    </li>
              
                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            @yield("content")
        </div>
        <!-- /.content-wrapper -->
    </div>
    <!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="{{ url('assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{ url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>

<!-- DataTables -->
<script src="{{ url('assets/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{ url('assets/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<!-- DataTables Export -->
<script src="{{ url('assets/datatables-export/js/dataTables.buttons.min.js')}}"></script>
<script src="{{ url('assets/datatables-export/js/jszip.min.js')}}"></script>
<script src="{{ url('assets/datatables-export/js/pdfmake.min.js')}}"></script>
<script src="{{ url('assets/datatables-export/js/vfs_fonts.js')}}"></script>
<script src="{{ url('assets/datatables-export/js/buttons.html5.min.js')}}"></script>
<script src="{{ url('assets/datatables-export/js/buttons.print.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{ url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{ url('assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{ url('assets/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ url('assets/dist/js/demo.js')}}"></script>
<script src="{{ url('assets/jquery-print/jquery.print.js')}}"></script>
<script>

  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script>
    var base_url = "";
</script>
<script src="{{ url('assets/backend/script.js')}}"></script>
</body>
</html>
