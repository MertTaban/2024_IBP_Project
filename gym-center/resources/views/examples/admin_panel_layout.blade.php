<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
</head>
<body class="hold-transition sidebar-mini layout-fixed dark-mode" data-panel-auto-height-mode="height">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('admin_panel')}}" class="nav-link">Ana Sayfa</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="{{route('logout')}}" class="nav-link">Çıkış Yap</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{Auth::user()->email}}</a>
        </div>
      </div>
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Üye İşlemleri</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>Üye İşlemleri
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Üye Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('updateUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Üye Güncelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('deleteUser')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Üye Sil</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('showAllUsers')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tüm Üyeler</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">Yönetim</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>Salon Kayıt İşlemleri
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addSaloon')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salon Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('updateSaloon')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salon Güncelle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('deleteSaloon')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Salon Kaldır</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('showAllSaloons')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tüm Salonlar</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>Bildiriler
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('addAnnouncement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Bildiri Ekle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('editLastAnnouncement')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Son Bildiriyi Düzenle</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('showAllAnnouncements')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tüm Bildiriler</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="{{route('messages')}}" class="nav-link">
              <i class="far fa-envelope nav-icon"></i>
              <p>İletişim</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- SidebarSearch Form -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper bg-dark" data-auto-dark-mode="true">
    <div class="tab-content">
        @yield('form')
    </div>
  </div>
    <!-- /.content-wrapper -->
  <footer class="main-footer dark-mode">
    <strong>Telif Hakları &copy; 2014-2021 Mert Taban.</strong>
    Tümü saklıdır.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.2.0
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
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>
</body>
</html>
