

<!DOCTYPE html>
<html>
<head>
   <title>Record</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css">
   <link href="{{ URL::asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
    <link href="{{ URL::asset('public/asset/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
   
  <!-- script references -->
  <script type="text/javascript" src="{{ asset('public/asset/js/jquery.dataTables.min.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('public/asset/js/jquery.min.js') }}" ></script>
       <script type="text/javascript"  src="{{asset('public/asset/js/bootstrap.js') }}" ></script>
    <script type="text/javascript" src="{{ asset('public/asset/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('public/asset/js/fuelux.min.js')}}"></script>
 <link href="{{ asset('public/asset/css/fuelux.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/asset/css/bootstrap-datepicker.css') }}" rel="stylesheet">
 <script src="{{ asset('public/asset/js/jquery.timepicker.js') }}" ></script>
  <link href="{{ asset('public/asset/css/jquery.timepicker.css') }}" rel="stylesheet">
  <script type="text/javascript" src="{{ asset('public/asset/js/f.js') }}" ></script>
  <script type="text/javascript" src="{{ asset('public/asset/js/bootstrap-confirmation.min.js') }}" ></script>
   <script type="text/javascript" src="{{ asset('public/asset/js/validator.js') }}" ></script>
 <script type="text/javascript"  src="{{ asset('public/asset/js/bootstrap-datepicker.js') }}" ></script>
 <script type="text/javascript" src="{{ asset('public/asset/js/jquery.bootgrid.min.js')}}"></script>
 <script type="text/javascript">
$(window).load(function() {
   $(".loader").fadeOut("slow");
})
</script>
<script>   
   $(document).ready(function() {
    $("#show_menu").click(function () {
      $( ".list_container" ).show(500);
    });  
    $("#hide_menu").click(function () {
      $( ".list_container" ).hide(500);
    }); 
  });
</script>

   <style>
      #Wrapper {
   margin-right: 2%;
    height:0%;
    margin-bottom:10%;
   background-color:white;

   }
   .loader {
   position: fixed;
   left: 0px;
   top: 0px;
   width: 100%;
   height: 100%;
   z-index: 9999;
   background: url('public/asset/page-loader.gif') 50% 50% no-repeat rgb(249,249,249);
}
   </style>
   </head>
   <body background="{{asset('public/asset/backdrop.png')}}"  ">
<div class="loader"></div>
<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
        <a class="navbar-brand" href="{{asset('/')}}" style="color:#ffffff; margin-left: -50px; margin-top: -10px;">
        <img src="{{ asset('public/asset/banner.png') }}" style="height: 90px;" /></a>
        <font color="white" align="center" size="5px"><b>
           Republic of the Philippines <br>
           Department of Health-Regional-Office VII <br>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           DAILY OUTGOING COMMUNICATION MONITORING SHEET
        </font></b>
        
    </div>

    <img src="{{ asset('public/asset/flag.png') }}" style="height: 90px;" /></a>
  </div><!-- /container -->
</div>
<!-- /Header -->
<!-- Main -->
<div style="margin-left: 15px;">
  
  <!-- upper section -->
  <div class="row">
  <div class="col-sm-3" style="width: 20%;">
      <!-- left -->
      <h3 class="menulist"><i class="glyphicon glyphicon-list"></i> Menu List</h3>
      <hr st>
      
      <ul class="nav nav-stacked">
        
        <li><a href="{{asset('addrecord')}}"><i class="glyphicon glyphicon-plus"></i> <b>Add New Record</b></a></li>
        <hr>
        <li><a href="{{asset('/')}}"><i class="glyphicon glyphicon-eye-open"></i> <b>View All Records</b></a></li>
        <hr>
        <li><a href="{{asset('/print')}}"><i class="glyphicon glyphicon-print"></i> <b>Print Record</b></a></li>
        <hr>
      </ul>
      
      
    </div><!-- /span-3 -->
  <div class="col-sm-9">
    
  </div><!--/row-->
  <!-- /upper section -->
      
    <div class="col-md-9" style="width: 80%;">
    <div id="Wrapper">
       
       @yield('content')

    </div>
      </div>
      </div>
       <footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align: center; font-weight: bolder; font-size: 1em;">Copyright © 2017 DOH-RO7 (RECORD SECTION)</p>
      </div>
    </footer>
   </body>
</html>
