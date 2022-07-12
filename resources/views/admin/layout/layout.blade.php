@if(!Session::get('id_admin'))
<script type="text/javascript">
    window.location=("/login_admin")
</script>
@endif
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $judul; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/asset/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="/asset/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="/asset/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="/asset/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="/asset/admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/asset/admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="/asset/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/asset/admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="/asset/admin/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
        </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-comment"></i> Chat
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">

            <a href="#" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profil
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{'/logout_admin'}}" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>

        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="far fa-user"></i> Admin - {{Session::get('username')}}
          </a>
          <div class="dropdown-menu dropdown-menu dropdown-menu-right">

            <a href="{{'/Profil_admin'}}" class="dropdown-item">
              <i class="fas fa-user mr-2"></i> Profil
            </a>
            <div class="dropdown-divider"></div>
            <a href="{{'/logout_admin'}}" class="dropdown-item">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
          </li>
        


        
        </ul>
      </nav>
      <!-- /.navbar -->

      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{'/home'}}" class="brand-link">
          <img src="/asset/admin/r.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
          <span class="brand-text font-weight-light">Rufadh | </span>
          <small>Rumah Fayyadh</small>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="{{url('storage/'.Session::get('image')) }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">{{Session::get('username')}}</a>
            </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="{{'/home_admin'}}" class="nav-link ">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>

          </li>
          

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-desktop nav-icon"></i>
              <p>
                Data Master
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{'/Admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                    Admin
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/User_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-users"></i>
                  <p>User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Supplier_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-user"></i>
                  <p>Supplier</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Kategori_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-tasks"></i>
                  <p>Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Produk_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-cube"></i>
                  <p>Produk</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Jasakirim_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-car"></i>
                  <p>Jasa Kirim</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Review_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-comment"></i>
                  <p>Review</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Survei_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-file"></i>
                  <p>Survei</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Voucher_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-sticky-note"></i>
                  <p>Voucher</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-cart-plus"></i>
              <p>
                Data Order
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{'/Order_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Order
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Custom_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-circle"></i>
                  <p>
                    Custom
                  </p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Data Transaksi
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{'/Transaksi_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Transaksi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{'/Pembelian_admin'}}" class="nav-link">
                  <i class="nav-icon fas fa-folder"></i>
                  <p>
                    Pembelian
                  </p>
                </a>
              </li>
            </ul>
          </li>

          
        </ul>
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
            <h1 class="m-0 text-dark"><?php echo $judul; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $judul; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
         <div class="col-md-12">

          <div class="card">
            <div class="card-body">

             @if(\Session::has('alert-success'))

             <div class="alert alert-success alert-dismissible">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              <i class="icon fas fa-check"></i>{{Session::get('alert-success')}}
            </div>

            @endif


            @yield('content')
            <!-- right col -->
          </div>
        </div>
      </div>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <strong>Copyright &copy; 2020 .</strong>
  All rights reserved.

</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/asset/admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/asset/admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/asset/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="/asset/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="/asset/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- bs-custom-file-input -->
<script src="/asset/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- jquery-validation -->
<script src="/asset/admin/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="/asset/admin/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- ChartJS -->
<script src="/asset/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/asset/admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/asset/admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/asset/admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/asset/admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/asset/admin/plugins/moment/moment.min.js"></script>
<script src="/asset/admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/asset/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/asset/admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/asset/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/asset/admin/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/asset/admin/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/asset/admin/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
<script>
  $('.custom-file-input').on('change',function(){
    let fileName = $(this).val().split('\\').pop();
    $(this).next('.custom-file-label').addClass("selected").html(fileName);
  });
</script>
@yield('footer')
</body>
</html>