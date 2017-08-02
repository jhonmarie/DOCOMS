
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
<title>Records</title>
 <meta name="generator" content="Bootply" />
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
    <script src="{{ asset('public/asset/js/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/jquery.dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('public/asset/js/fuelux.min.js')}}"></script>
 <link href="{{ asset('public/asset/css/fuelux.min.css') }}" rel="stylesheet">
  <link href="{{ asset('public/asset/css/bootstrap-datepicker.css') }}" rel="stylesheet">
 <script src="{{ asset('public/asset/js/jquery.timepicker.js') }}" ></script>
  <link href="{{ asset('public/asset/css/jquery.timepicker.css') }}" rel="stylesheet">
  <script src="{{ asset('public/asset/js/f.js') }}" ></script>
  <script src="{{ asset('public/asset/js/bootstrap-confirmation.min.js') }}" ></script>
   <script src="{{ asset('public/asset/js/validator.js') }}" ></script>
 <script src="{{ asset('public/asset/js/bootstrap-datepicker.js') }}" ></script>

<script type="text/javascript">
$(window).load(function() {
	$(".loader").fadeOut("slow");
})
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
    margin-right:105px;
    margin-top:-6px;
    
    
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
#Wrapper {
	margin-left: 5%;
	margin-right: 5%;
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
<body background="{{asset('public/asset/backdrop.png')}}">
<div class="loader"></div>

<div id="top-nav" class="navbar navbar-inverse navbar-static-top">
  <div class="container">
    <div class="navbar-header">
      
        <a class="navbar-brand" href="#" style="color:#ffffff; margin-left: -10px; margin-top: -30px; float:center;"> 
                <img src="{{ asset('public/asset/ban.png') }}" style="height:150px;width:100%;" /></a> 


                </div>
                </div>
                </div>
<div class="sppp">
 <a href="#" data-toggle="tooltip" title="Add Info"></a><span class="hidden-sm hidden-xs">
<button type="button" class="btn btn-lg btn-primary" id="myBtn"><font color="white"><span class="hidden-sm hidden-xs"></span>Add New Record</font><br>
<a href="#" data-toggle="tooltip" title="Print Record"><span class="hidden-sm hidden-xs">
<button type="button" class="btn btn-lg btn-warning"><font color="white" href="{{asset('print')}}"><span class="hidden-sm hidden-xs"></span>&nbspPrint Record</font></a>
<button type="button" class="btn btn-lg btn-success" ><span class="hidden-sm hidden-xs"></span><a href="{{asset('search')}}" data-toggle="tooltip" title="View All Record"><font color="white">&nbspView All Record</font></a></div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
  
  <!-- Modal -->
  <div class="modal fade" id="yourModal" role="dialog">
    <div class="modal-dialog">
    
      @include('modal')

         
      <div class="container">
 <div class="row">
  <div class="col-sm-3">


     <div> 
     <form action="{{ asset('/search') }}" method="post" role="search">
     <div class="sp"><span class="hidden-sm hidden-xs"></span>
        <input type="image" src="{{ asset('public/asset/search-icon.png')}}" width="48" height="48" alt="submit" /></div>
     <div class="form-group form-inline" style="margin-right: 400px;" >
          <span class="hidden-sm hidden-xs"> </span><input type="text" name="q" placeholder="Search..."id="search_text"  class="form-control input-lg">
        
            </form>
            </div>
            </div>
        </div>
       </div>
      </div>
         <script>
 $(document).ready(function() {
    src = "http://demo.expertphp.in/searchajax";
    $("#search_text").autocomplete({
        source: function(request, response) {
            $.ajax({
                url: src,
                dataType: "json",
                data: {
                    term : request.term
                },
                success: function(data) {
                    response(data);
                   
                }
            });
        },
        minLength: 3,
       
    });
});


</script>
<div id="Wrapper">
    <br><br><br>


           @yield('content')

  </div> 
    </div> 
    <footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align: center; font-weight: bolder; font-size: 1em;">DOH7-QOPRS-O1-Form 1 Rev 0</p>
      </div>
    </footer>

    @include('edit')
  

</div>


     @include('delete')
<script>
        $(document).on('click', '.delete-modal', function() {
        $('#footer_action_button').text(" Delete");
        $('#footer_action_button').removeClass('fa-check');
        $('#footer_action_button').addClass('glyphicon-trash');
        $('.actionBtn').removeClass('btn-success');
        $('.actionBtn').addClass('btn-danger');
        $('.actionBtn').removeClass('edit');
        $('.actionBtn').addClass('delete');
        $('.modal-title').text('Delete Record');
        $('.deleteContent').show();
        $('.form-horizontal').hide();
        var stuff = $(this).data('info').split(',');
        $('.did').text(stuff[0]);
        $('.dname').html(stuff[1] +" "+stuff[2]);
        $('#myModal').modal('show');
    });
 $('.modal-footer').on('click', '.delete', function() {
        $.ajax({
            type: 'post',
            url: 'deleteItem',
            data: {
                '_token': $('input[name=_token]').val(),
                'id': $('.did').text()
            },
            success: function(data) {
                $('.item' + $('.did').text()).remove();
            }
        });
    });
    </script>
      
</body>
</html>