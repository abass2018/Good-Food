<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Good | Food</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('assets/plugin/iCheck/flat/blue.css')}}">
  <!-- Morris chart -->
  <link rel="stylesheet" href="{{asset('assets/plugin/morris/morris.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('assets/plugin/jvectormap/jquery-jvectormap-1.2.2.css')}}">
  <!-- Date Picker -->
  <link rel="stylesheet" href="{{asset('assets/plugin/datepicker/datepicker3.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('assets/plugin/daterangepicker/daterangepicker-bs3.css')}}">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="{{asset('assets/plugin/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>G</b>ood</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Good</b> Food</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-bell-o"></i>
              <span class="label label-success">   </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">عدد الطلبات</li>
              <li>
                <!-- inner menu: contains the actual data -->
               


              </li>
              <li class="footer"><a href="#">متابعة كل الطلبات</a></li>
            </ul>
          </li>
          <!-- Notifications: fa fa-bell-o style can be found in dropdown.less -->
          <li class="dropdown notifications-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-envelope-o"></i>
              <span class="label label-warning">{{$contact->count()}}</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">الرسائل</li>
              <li>
                <!-- inner menu: contains the actual data -->
                



              </li>
              <li class="footer"><a href="{{url('index-contact')}}">عرض الكل</a></li>
            </ul>
          </li>
          <!-- Tasks: style can be found in dropdown.less -->
          <li class="dropdown tasks-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-danger">   </span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">عدد العملاء</li>
              <li>
                <!-- inner menu: contains the actual data -->
                



              </li>
              <li class="footer">
                <a href="">عرض جميع العملاء</a>
              </li>
            </ul>
          </li>
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="" class="user-image" alt="User Image">
              <span class="hidden-xs">اسم المستخدم</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="" class="img-circle" alt="User Image">

                <p>
                الاسم
                
                </p>
              </li>
           
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">تسجيل الخروج</a>
                </div>
                <div class="pull-right">
                  <a href="#" class="btn btn-default btn-flat">الملف الشخصي</a>
                </div>
              </li>
            </ul>
          </li>
          
        </ul>
      </div>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar direction">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-right image">
          <img src="" class="img-circle" alt="User Image">
        </div>
        <div class="pull-right info">
          <p>الاسم</p>
          <a href="#"><i class="fa fa-circle text-success"></i> نشط</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="بحث...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
        <li class="active treeview">
          <a href="{{url('index')}}">
            <i class="fa fa-dashboard"></i> <span>الرئيسية</span> </i>
          </a>
          
        </li>

        
        
       

        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>الطلبات</span>
            <span class="label label-primary pull-right"> 33  </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href=""><i class="fa fa-circle-o"></i>  لوحة تحكم الطلبات  </a></li>
          
            
          </ul>
          
        </li>
        <li>
          <a href="">
            <i class="fa fa-th"></i> <span>العملاء</span>
            <small class="label pull-right bg-green">33</small>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href=""><i class="fa fa-circle-o"></i>  لوحة تحكم العملاء  </a></li>
            <li class="active"><a href=""><i class="fa fa-circle-o"></i>  اضافة عميل جديد  </a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="{{url('index-contact')}}">
            <i class="fa fa-pie-chart"></i>
            <span>الرسائل</span>
            <small class="label pull-right bg-red">{{$contact->count()}}</small>
           
          </a>
          
        </li>

        
       
       
      
      
      
       
       
       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>