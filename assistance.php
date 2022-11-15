<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assistance</title>

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
                  <p style="margin-left:10px;font-weight: bold;">Accueil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="user.php" class="nav-link">
                  <i class="fa fa-user"style="color: white;"></i>  
                  <p style="margin-left:10px;font-weight: bold;">Profil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="assistance.php" class="nav-link">
                 <i class="fa fa-list" style="color: white;"></i>
                  <p style="margin-left:10px;font-weight: bold;">Assistance</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="abonne.php" class="nav-link">
                 <i class="fa fa-bell" style="color: white;"></i>
                  <p style="margin-left:10px;color:white;">Abonnement</p>
                </a>
              </li>
             <!--    <li class="nav-item">
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h4 style="color:black; font-weight:bold;">Assistance | <span style="color:#88C1E7;">Abonnement</span></h4> -->
          </div>
          <div class="col-sm-6">
            <!-- <ol class="breadcrumb float-sm-right">
              <div class="alert alert-success alert-dismissible fade show" role="alert">
                <div> Message d'alerte</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            </ol> -->
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="col-md-9">
            <div class="card">
             <div class="card-header">
                <a href="index.php" class="small-box-footer" style="color:#18345D;"><i class="fas fa-arrow-circle-left"></i> Demander une assistance</a>
                <div class="card-tools">
                    <a href="abonne.php"><button type="submit" class="btn btn" style="background-color:rgb(255,0,102);  font-weight: bold; color: white;"> S'ABONNER</button></a>
                  </div>
                 
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="">
                   <main>
                    <details open>
                      <summary style="color: black; font-family: Arial; font-size: 16px; font-weight: bold;border:2px solid rgb(214,220,229);"><!-- <i class="fa fa-home"></i> --> Installation</summary>
                      <div class="faq__content">
                        <p>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label" style="color:black;"> Reparation | Depannage</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label" style="color:black;"> Ordinateur</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label" style="color:black;"> Tablette | Telephnone</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label" style="color:black;"> Appareil Electroménager</label>
                            </div>
                             <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label" style="color:black;"> Autres...</label>
                            </div>
                          </div>
                        </p>
                      </div>
                    </details>

                      <details>
                      <summary style="color: black; font-family: Arial; font-size: 16px; font-weight: bold;border:2px solid rgb(214,220,229);"><!-- <i class="fa fa-user"></i> --> Maintenance</summary>
                      <div class="faq__content">
                          <p>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label"style="color:black;">Maintenance électrique</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" >
                              <label class="form-check-label"style="color:black;" >Configuration Info</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label"style="color:black;">Maintenance Réseaux</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" >
                              <label class="form-check-label"style="color:black;" >Autres...</label>
                            </div>
                          
                          </div>
                        </p>
                      </div>
                    </details>
                       <details>
                      <summary style="color: black; font-family: Arial; font-size: 16px; font-weight: bold;border:2px solid rgb(214,220,229);"><!-- <i class="fa fa-user"></i> --> Assistances | Consultances</summary>
                      <div class="faq__content">
                          <p>
                          <div class="form-group">
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label"style="color:black;">Guide d'utilisation</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" >
                              <label class="form-check-label"style="color:black;" >Achat d'un nouvel appareil</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox">
                              <label class="form-check-label"style="color:black;">Conception projet Tech</label>
                            </div>
                            <div class="form-check">
                              <input class="form-check-input" type="checkbox" >
                              <label class="form-check-label"style="color:black;" >Autres...</label>
                            </div>
                          
                          </div>
                        </p>
                      </div>
                    </details>
                    
                     </main>
                  </div>
                    <div class="card-footer" style="background-color:white;">
                        <form action="#" method="post">
                          <label>commentaire</label>
                          <div class="input-group">
                            <textarea cols="10" class="form-control" placeholder="Ajouter une description"></textarea>
                          </div>
                        </form>
                      </div>
                      <hr>
                       <div class="float-right">
                        <button type="submit" class="btn btn" style="background-color:#88C1E7; border:2px solid #375981; font-weight: bold; color: white;"> Valider</button>
                      </div>
              
                   </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php include('footer.php'); ?>

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
<script>
  $(function () {
    /* ChartJS
     * -------
     * Here we will create a few charts using ChartJS
     */

    //--------------
    //- AREA CHART -
    //--------------

    // Get context with jQuery - using jQuery's .get() method.
    var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

    var areaChartData = {
      labels  : ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
      datasets: [
        {
          label               : 'Digital Goods',
          backgroundColor     : 'rgba(60,141,188,0.9)',
          borderColor         : 'rgba(60,141,188,0.8)',
          pointRadius          : false,
          pointColor          : '#3b8bba',
          pointStrokeColor    : 'rgba(60,141,188,1)',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data                : [28, 48, 40, 19, 86, 27, 90]
        },
        {
          label               : 'Electronics',
          backgroundColor     : 'rgba(210, 214, 222, 1)',
          borderColor         : 'rgba(210, 214, 222, 1)',
          pointRadius         : false,
          pointColor          : 'rgba(210, 214, 222, 1)',
          pointStrokeColor    : '#c1c7d1',
          pointHighlightFill  : '#fff',
          pointHighlightStroke: 'rgba(220,220,220,1)',
          data                : [65, 59, 80, 81, 56, 55, 40]
        },
      ]
    }

    var areaChartOptions = {
      maintainAspectRatio : false,
      responsive : true,
      legend: {
        display: false
      },
      scales: {
        xAxes: [{
          gridLines : {
            display : false,
          }
        }],
        yAxes: [{
          gridLines : {
            display : false,
          }
        }]
      }
    }

    // This will get the first returned node in the jQuery collection.
    new Chart(areaChartCanvas, {
      type: 'line',
      data: areaChartData,
      options: areaChartOptions
    })

    //-------------
    //- LINE CHART -
    //--------------
    var lineChartCanvas = $('#lineChart').get(0).getContext('2d')
    var lineChartOptions = $.extend(true, {}, areaChartOptions)
    var lineChartData = $.extend(true, {}, areaChartData)
    lineChartData.datasets[0].fill = false;
    lineChartData.datasets[1].fill = false;
    lineChartOptions.datasetFill = false

    var lineChart = new Chart(lineChartCanvas, {
      type: 'line',
      data: lineChartData,
      options: lineChartOptions
    })

    //-------------
    //- DONUT CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var donutChartCanvas = $('#donutChart').get(0).getContext('2d')
    var donutData        = {
      labels: [
          'Chrome',
          'IE',
          'FireFox',
          'Safari',
          'Opera',
          'Navigator',
      ],
      datasets: [
        {
          data: [700,500,400,600,300,100],
          backgroundColor : ['#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc', '#d2d6de'],
        }
      ]
    }
    var donutOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(donutChartCanvas, {
      type: 'doughnut',
      data: donutData,
      options: donutOptions
    })

    //-------------
    //- PIE CHART -
    //-------------
    // Get context with jQuery - using jQuery's .get() method.
    var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
    var pieData        = donutData;
    var pieOptions     = {
      maintainAspectRatio : false,
      responsive : true,
    }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
    new Chart(pieChartCanvas, {
      type: 'pie',
      data: pieData,
      options: pieOptions
    })

    //-------------
    //- BAR CHART -
    //-------------
    var barChartCanvas = $('#barChart').get(0).getContext('2d')
    var barChartData = $.extend(true, {}, areaChartData)
    var temp0 = areaChartData.datasets[0]
    var temp1 = areaChartData.datasets[1]
    barChartData.datasets[0] = temp1
    barChartData.datasets[1] = temp0

    var barChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      datasetFill             : false
    }

    new Chart(barChartCanvas, {
      type: 'bar',
      data: barChartData,
      options: barChartOptions
    })

    //---------------------
    //- STACKED BAR CHART -
    //---------------------
    var stackedBarChartCanvas = $('#stackedBarChart').get(0).getContext('2d')
    var stackedBarChartData = $.extend(true, {}, barChartData)

    var stackedBarChartOptions = {
      responsive              : true,
      maintainAspectRatio     : false,
      scales: {
        xAxes: [{
          stacked: true,
        }],
        yAxes: [{
          stacked: true
        }]
      }
    }

    new Chart(stackedBarChartCanvas, {
      type: 'bar',
      data: stackedBarChartData,
      options: stackedBarChartOptions
    })
  })
</script>
</body>
</html>
