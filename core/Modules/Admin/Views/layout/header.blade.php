<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel @yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <meta name="csrf-token" content="{{csrf_token()}}">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{cxl_asset('admin/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/crop/croppie.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/css/font-awesome.min.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/css/AdminLTE.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/css/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/css/jquery-ui.css')}}">
  <link rel="stylesheet" href="{{cxl_asset('admin/css/style.css')}}" />
</head>
<body class="hold-transition skin-blue sidebar-mini" id="@yield('bodyID')">
<!-- Site wrapper -->
<form action="{{route('admin.logout')}}" id="logout-form" method="POST" style="display:none">
  @csrf
</form>
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index.php" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">30S</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>Panel</span>
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
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <span class="hidden-xs">Haiha</span>
            </a>
            <ul class="dropdown-menu">
              <li><a href="">Profile</a></li>
              <li><a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
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
      <!-- Sidebar user panel -->

      <!-- search form -->

      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      	 <li>
          <a href="{{route('admin.home')}}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin.category.index')}}">
            <i class="fa fa-bookmark"></i> <span>Department</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin.job.index')}}">
            <i class="fa fa-shopping-cart"></i> <span>Jobs</span>
          </a>
        </li>
       <li>
          <a href="{{route('admin.candidate.index')}}">
            <i class="fa fa-users"></i> <span>Candidates</span>
          </a>
        </li>
        <li>
          <a href="{{route('admin.news.index')}}">
            <i class="fa fa-book"></i>
            <span>News</span>
          </a>
        </li>
          <li>
          <a href="{{route('admin.location.index')}}">
            <i class="fa fa-industry"></i>
            <span>Branch Location</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">
