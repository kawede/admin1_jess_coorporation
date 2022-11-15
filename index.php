<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Admin</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
  <style type="text/css">
    @media only screen and (max-width: 500px ){
      .mdc{
        margin-left: 50px;
        margin-top: -65px;
      }
      .main-footer
      {
        display: inline-block;
      }
      .b1footer
      {
        font-size:15px;
      }
    }

   main {


}
summary {
  font-size: 1.25rem;
  font-weight: 500;
  background-color: rgb(249,249,249);
  border:1px solid  rgb(232,233,235);
  color:rgb(23,48,88);
  padding: 1rem;
  margin-bottom: 1rem;
  outline: none;
  border-radius: 0.25rem;
  text-align: left;
  cursor: pointer;
  position: relative;
}
p { text-align: left; }
details[open] summary ~ * {
  animation: sweep .6s ease-in-out;
}
</style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <!-- <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div> -->

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-color:#18345D; ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars" style="color: white;"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
  

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: #18345D" ><!--  style="background-color:rgb(101,147,183);" -->
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="dist/img/jess_logo.png" alt="admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text" style="font-weight: bold;color:white;">Jess</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>

     

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <!-- <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                Utilisateurs
                <i class="right fas fa-angle-left"></i>
              </p>
            </a> -->
             <li class="nav-item">
                <a href="index.php" class="nav-link">
                  <i class="fa fa-home" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Accueil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="fa fa-user"style="color: white;"></i>  
                  <p style="margin-left:10px;color:white;">Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assistance.php" class="nav-link">
                 <i class="fa fa-list" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Assistance</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="abonne.php" class="nav-link">
                 <i class="fa fa-bell" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Abonnement</p>
                </a>
              </li>
          <!--     <li class="nav-item">
                <a href="suivi.php" class="nav-link">
                  <i class="fa fa-comments" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Suivi</p>
                </a>
              </li> -->
            </ul>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0">Dashboard v2</h1> -->
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol> -->
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
         <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box">
              <span class="info-box-icon"><i class="fas fa-cog" style="color:#18345D;"></i></span>
              <div class="info-box-content">
                <!-- <span class="info-box-text" style="font-weight: bold;font-size: 25px;color:#18345D;">425</span> -->
                <p class="small-box-footer" style="font-weight:bold;font-family: Arial;">Installations</p>
                <a href="forum.php" class="small-box-footer" style="color:#18345D; font-size:15px;">Les bons accompagnements dans vos projets en electrotechniques, de la planification à la maintenance en passant par l'Execution</a>
              <div style="display:inline;">
                <span><a href="" class="btn " style="font-size: 15px; width: 150px;">
                  <i class="far fa-heart" title="notification" style="color:#18345D"></i>
                 <span class="badge badge-warning navbar-badge"style="background-color:#18345D;color: white;font-weight: bold;">15</span></a></span>
                <span><a href="forum.php" class="btn mdc" style="font-size: 15px; width: 150px;">
                  <i class="far fa-comments" title="notification" style="color:#18345D"></i>
                 <span class="badge badge-warning navbar-badge" style="background-color:red;color: white;font-weight: bold;">15</span></a></span>
              </div>
              </div>
              <a href="forum.php" class="small-box-footer" style="color:#18345D;">Plus... <i class="fas fa-arrow-circle-right"></i></a> 
       
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon "><i class="fas fa-tools" style="color:#18345D;"></i></span>

              <div class="info-box-content">
                <!-- <span class="info-box-text" style="font-weight: bold;font-size: 25px;color:#18345D;">25</span> -->
                <p class="small-box-footer" style="font-weight:bold;font-family: Arial;">Maintenance</p>
                 <a href="#" class="small-box-footer" style="color:#18345D; font-size:15px;">Contactez-nous pour la maintenance et la reparation des vos installations electriques et équipements electroniques</a>
                 <div style="display:inline;">
                  <span><a href="" class="btn " style="font-size: 15px; width: 150px;">
                    <i class="far fa-heart" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge"style="background-color:#18345D;color: white;font-weight: bold;">15</span></a></span>
                  <span><a href="forum1.php" class="btn mdc" style="font-size: 15px; width: 150px;">
                    <i class="far fa-comments" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge" style="background-color:red;color: white;font-weight: bold;">15</span></a></span>
              </div>
              </div>
              <a href="forum1.php" class="small-box-footer" style="color:#18345D;">Plus... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon "><i class="fas fa-list-alt" style="color:#18345D;"></i></span>

              <div class="info-box-content">
               <!--  <span class="info-box-text" style="font-weight: bold;font-size: 25px;color:#18345D;">425</span> -->
                <p class="small-box-footer" style="font-weight:bold;font-family: Arial;">Consultances & Conseils</p>
                 <a href="#" class="small-box-footer" style="color:#18345D; font-size:15px;">Trouver des conseils avisés et fructueux avec les expers du domaine electriques</a>
                <div style="display:inline;">
                  <span><a href="" class="btn " style="font-size: 15px; width: 150px;">
                    <i class="far fa-heart" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge"style="background-color:#18345D;color: white;font-weight: bold;">15</span></a></span>
                  <span><a href="forum3.php" class="btn mdc" style="font-size: 15px; width: 150px;">
                    <i class="far fa-comments" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge" style="background-color:red;color: white;font-weight: bold;">15</span></a></span>
              </div>
              </div>
              <a href="forum3.php" class="small-box-footer" style="color:#18345D;">Plus... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-6">
            <div class="info-box mb-3">
              <span class="info-box-icon "><i class="fas fa-mercury" style="color:#18345D;"></i></span>

              <div class="info-box-content">
                <!-- <span class="info-box-text" style="font-weight: bold;font-size: 25px;color:#18345D;">425</span> -->
                <p class="small-box-footer" style="font-weight:bold;font-family: Arial;">Plomberie & Autres</p>
                <a href="#" class="small-box-footer" style="color:#18345D; font-size:15px;">Des bons techniciens pour des bons services plomberie, decoration interieur, etc.</a> 
                <div style="display:inline;">
                  <span><a href="" class="btn " style="font-size: 15px; width: 150px;">
                    <i class="far fa-heart" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge"style="background-color:#18345D;color: white;font-weight: bold;">15</span></a></span>
                  <span><a href="forum4.php" class="btn mdc" style="font-size: 15px; width: 150px;">
                    <i class="far fa-comments" title="notification" style="color:#18345D"></i>
                   <span class="badge badge-warning navbar-badge" style="background-color:red;color: white;font-weight: bold;">15</span></a></span>
              </div>
              </div>
              <a href="forum4.php" class="small-box-footer" style="color:#18345D;">Plus... <i class="fas fa-arrow-circle-right"></i></a>
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer" style="position: relative; bottom: 0;">
        <div class="container">
      <div class="row">
       <div class="col-md-4"></div>
        <div class="col-md-8">
          <a href="notification.php" class="btn b1footer"style="font-size: 30px;width: 100px;  ">
            <i class="fa fa-home"style="color:#18345D"></i> 
          </a>
          <a href="assistance.php" class="btn b1footer" style="font-size: 20px;width: 100px; " >
            <i class="fas fa-question" style="font-size:30px;color:#18345D"></i> 
          </a>
          <!-- <a href="" class="btn " style="font-size: 30px; width: 150px;">
            <i class="far fa-bell" style="color:#18345D"></i>
            <span class="badge badge-warning navbar-badge">15</span> 
          </a> -->
         
          <a href="Messagerie.php" class="btn b1footer"style="font-size: 30px; width: 100px; ;">
            <i class="far fa-comments" style="color:#18345D"></i>
            <span class="badge badge-danger navbar-badge">3</span>
          </a>
        </div>
      </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
