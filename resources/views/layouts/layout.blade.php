
<!DOCTYPE html>
<html>
<head>
    @include('layouts.meta')
    @yield('meta')
</head>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

@include('layouts.header')
  
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
   
      <!-- Main content -->
      
       
        @yield('content')
    
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 0.0.1
      </div>
      <strong> Proman.</strong> Some rights may be 
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 2.2.3 -->
@include('layouts.script')
</body>
</html>
@yield('script')