<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>MDA</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="{{URL::asset('assets/Admin/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Admin/css/bootstrap-responsive.min.css') }}" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600"
        rel="stylesheet">
<link href="{{URL::asset('assets/Admin/css/font-awesome.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Admin/css/style.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/Admin/css/pages/dashboard.css') }}" rel="stylesheet">
<link href="{{URL::asset('assets/Admin/css/pages/plans.css') }}" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container"> <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse"><span
                    class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span> </a><a class="brand" href="index.html">MASTI DANCE ACADEMY </a>
      <div class="nav-collapse">
        <ul class="nav pull-right">
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-cog"></i> Account <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Settings</a></li>
              <li><a href="javascript:;">Help</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i
                            class="icon-user"></i> EGrappler.com <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="javascript:;">Profile</a></li>
              <li><a href="javascript:;">Logout</a></li>
            </ul>
          </li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /navbar-inner --> 
</div>
<!-- /navbar -->
<div class="subnavbar">
  <div class="subnavbar-inner">
    <div class="container">
      <ul class="mainnav">
        <li><a href="/../../dashboard"><i class="icon-dashboard"></i><span>Dashboard</span> </a></li>
        <li><a href="/../../class_group"><i class="icon-list-alt"></i><span>Class Group</span> </a> </li>
        <li><a href="/../../class"><i class="icon-list-alt"></i><span>Class</span> </a></li>
         <li><a href="/../../admin/costume"><i class="icon-list-alt"></i><span>Costume</span> </a></li>
      </ul>
    </div>
    <!-- /container --> 
  </div>
  <!-- /subnavbar-inner --> 
</div>
<!-- /subnavbar -->

<!-- /extra -->
<script type="text/javascript">
</script>
