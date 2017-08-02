
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
    <link href="{{ asset('public/asset/css/bootstrap.min.css') }}" rel="stylesheet">
   
  <!-- script references -->
    <script src="{{ asset('public/asset/js/jquery.min.js') }}" ></script>
       <script src="{{ asset('public/asset/js/bootstrap.js') }}" ></script>
    <script src="{{ asset('public/asset/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/modal.js') }}"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<style>

  .modal-header, h4, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
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
}
</style>
  
</head>
<body>


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
                <img src="{{ asset('public/asset/Seal_of_the_Department_of_Health_of_the_Philippines.png') }}" style="height: 92px;" /></a>
            </div>
            
                <CENTER><h1><b><font color="white">DAILY OUTGOING COMMUNICATIONS MONITORING SHEET</b></h1></CENTER></font>
      </div>
      </div>
      </div>

    
  <!-- Trigger the modal with a button -->
  <!-- <button type="button" class="btn btn-default btn-lg" id="myBtn">Add Information</button> -->
<div class="sppp">
 <a href="#" data-toggle="tooltip" title="Add Info">
<input type="image" class="btn btn-default btn-lg" src="{{ asset('public/asset/add.png')}}" width="70" height="70" alt="myBtn" id="myBtn"/></a></div> 
<div class="spp"><a href="#" data-toggle="tooltip" title="Print">
 <input type="image" src="{{ asset('public/asset/print-512.png')}}"  onclick="print();" width="50" height="60" alt="printer" /></a></div>
  
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
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


           @include('viewdata')


     
    <footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align: center; font-weight: bolder; font-size: 1em;">DOH-RO7</p>
      </div>
    </footer>
  
     
</div>
</center>
</body>
</html>