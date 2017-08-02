
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
     <link rel="stylesheet" href="{{ asset('public/asset/css/bootstrap1.min.css') }}" >
  <script src="{{ asset('public/asset/js/jquery1.min.js') }}" ></script>
  <script src="{{ asset('public/asset/js/bootstrap1.js') }}" ></script>
    <!--[if lt IE 9]>
      <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <link href="{{ asset('public/asset/css/dataTables.bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/asset/js/jquery.dataTables.min.css') }}" rel="stylesheet">
  <!-- script references -->
  <script src="{{ asset('public/asset/js/jquery.dataTables.min.js') }}" ></script>
    <script src="{{ asset('public/asset/js/jquery.min.js') }}" ></script>
       <script src="{{ asset('public/asset/js/bootstrap.js') }}" ></script>
    <script src="{{ asset('public/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/dataTables.bootsrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/jquery.dataTables.bootsrap.min.js') }}"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>

<style>
  .modal-header, h4, .close {
      background-color: #2f994d;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #edffef;
  }


.sp{
    float:right;
    text-align:right;
    margin-right:-45px;
}
.spp{
    float:right;
    text-align:right;
    margin-right:-125px;
    margin-top:13px;
    
}
.sppp{
    float:right;
    text-align:right;
    margin-right:245px;
    margin-top:11px;
    
}
td {
  max-width: 120px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
  text-align:center;
}
th {
    text-align:center;
}
</style>

</head>
<body style="background: -webkit-radial-gradient(#E8E37B 5%, #DBE899 15%, #62EEFF 80%);

    background: -o-radial-gradient(#E8E37B 5%, #DBE899 15%, #62EEFF 80%);

    background: -moz-radial-gradient(#E8E37B 5%, #DBE899 15%, #62EEFF 80%);

    background: radial-gradient(#E8E37B 5%, #DBE899 15%, #62EEFF 80%);">
    <div class="gradient7">


<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>


      
 <a class="navbar-brand" href="{{asset('search')}}" style="color:#ffffff; margin-left: -50px; margin-top: -10px;">
                <img src="{{ asset('public/asset/Seal_of_the_Department_of_Health_of_the_Philippines.png') }}" style="height:92px;" /></a>
            </div>
            
                <center><b><font color="white">
                Republic of the Philippines<br>
                Department of Health-Regional Office VII
                <br>DAILY OUTGOING COMMUNICATIONS MONITORING SHEET
                </b></font></center>
      </div>
      </div>
      </div>

    
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-default btn-lg" id="myBtn">Add Information</button> -->

 
<div class="sppp">
 <a href="#" data-toggle="tooltip" title="Add Info"></a>
<button type="button" class="btn btn-lg btn-primary" id="myBtn"><font color="white">Add New Record</font></div>

  
  <!-- Modal -->
  <div class="modal fade" id="yourModal" role="dialog">
    <div class="modal-dialog">
    
      @include('modal')

         
      <div class="container">
 <div class="row">
  <div class="col-sm-3">


     <div> 
     <form action="{{ asset('/search') }}" method="post" role="search">
     <div class="sp">
        <input type="image" src="{{ asset('public/asset/search-icon.png')}}" width="48" height="48" alt="submit" /></div>
     <div class="form-group form-inline" style="margin-right: 400px;" >
            <input type="text" name="q" placeholder="Search..." class="form-control input-lg">
        
            </form>
            </div>
            </div>
        </div>
       </div>
      </div>

 
    
 
      <hr style="width:90%; alignment:center;">
       <div id="wrapper">
    
  
      </div>
      </div>
      </div>


           @yield('content')


     
    <footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align: center; font-weight: bolder; font-size: 1em;">DOH-RO7</p>
      </div>
    </footer>

    @include('edit')
   

   </div>  
</div>

</center>
</body>
</html>



<a href="#" data-toggle="tooltip" title="Add Info"></a><span class="hidden-sm hidden-xs">
<button type="button" class="btn btn-lg btn-primary" id="myBtn"><font color="white"><span class="hidden-sm hidden-xs"></span>Add New Record</font><br>
<a href="#" data-toggle="tooltip" title="Print Record"></a><span class="hidden-sm hidden-xs">
<button type="button" class="btn btn-lg btn-warning"><font color="white" href="{{asset('print')}}"><span class="hidden-sm hidden-xs"></span>&nbspPrint Record</font>
<a href="#" data-toggle="tooltip" title="View All Record"></a><span class="hidden-sm hidden-xs">
<button type="button" class="btn btn-lg btn-success"><font color="white"><span class="hidden-sm hidden-xs" href="{{asset('search')}}"></span>&nbspView All Record</font></div>





delete


@extends('edit')
@section('content')
<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">×</button>
					<h4 class="modal-title">Delete</h4>

				</div>
				<div class="modal-body">
					<form class="form-horizontal" role="form" style="display: none;">
			
					<div class="deleteContent">
						Are you Sure you want to delete <span class="dname"></span> ? <span
							class="hidden did"></span>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn actionBtn" data-dismiss="modal">
							<span id="footer_action_button" class='glyphicon'> </span>
						</button>
						<button type="button" class="btn btn-warning" data-dismiss="modal">
							<span class='glyphicon glyphicon-remove'></span> Close
						</button>
					</div>
				</div>
			</div>


     

    @endsection