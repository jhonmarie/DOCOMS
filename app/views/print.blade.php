@extends('welcomes')
@section('content')

<style type="text/css">
   @media print {

  body {
    size: auto;
    /*margin: 25mm 25mm 25mm -5mm;*/
  }
 button#con {
    display: none;
  }

  a:link:after, a:visited:after {display: none;}

   .btn {
   display: none;
  }

  .menulist {
    display: none;
  }

  .nav {
    display: none;
  }

  hr {
    display: none;
  }

  .form-group {
    display: none;
  }

  a {
    display: none;
  }

  .action {
    display: none;
  }

  .footer {
    display: none;
  }

}
.bs-example{
      margin: 20px;
    }
    .inner-addon { 
    position: relative; 
}
/* style icon */
.inner-addon .glyphicon {
  position: absolute;
  padding: 10px;
  pointer-events: none;
}

/* align icon */
.left-addon .glyphicon  { left:  0px;}
.right-addon .glyphicon { right: 0px;}

/* add padding  */
.left-addon input  { padding-left:  30px; }
.right-addon input { padding-right: 30px; }
.underline{border-bottom:1px solid #000000; width:40px; padding-bottom:2px;}
.underline1{border-bottom:1px solid #000000; width:70px; padding-bottom:2px;}
.underline2{border-bottom:1px solid #000000; width:400px; padding-bottom:2px;}
.underline3{border-bottom:1px solid #000000; width:600px; padding-bottom:2px;}
.underline4{border-bottom:1px solid #000000; width:200px; padding-bottom:2px;}
</style>

<br><br>

<form action="{{asset('/search')}}" method="POST" role="search" class="form-inline">
<div class="form-group inner-addon left-addon" style="margin-left: 50px;">
               <i class="glyphicon glyphicon-search"></i>
            <input type="text" class="form-control" name="q" placeholder="Search id...">
<button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>SEARCH
            </button>

    <!-- <div class="form-group" style="margin-left: 50px;">
        <input type="text" class="form-control" name="q"
            placeholder="Search id"> <span class="input-group-btn">
            <button type="submit" class="btn btn-default">
                <span class="glyphicon glyphicon-search"></span>
            </button>
        </span>
    </div> -->
    </div>
</form>

<button type="button" class="btn btn-default pull-right" onclick="print();" style="margin-right: 25px; margin-top: -30px;">
      <span class="glyphicon glyphicon-print" href="{{asset('/download')}}"></span> Print Record
    </button>

<!-- <button type="button" class="btn btn-lg pull-right"><a href="{{asset('/download')}}"></a></button> -->

<!-- <button  type="button" href="{{asset('/download')}}" class="btn btn-large pull-right"><i class="icon-download-alt"> </i> Download Record </button> -->



<br><br>
<center><h3>
<b>RECORDS SECTION <br>
DAILY OUTGOING COMMUNICATIONS MONITORING SHEET</b></h3></center>
<br><br>
<!-- 
	<div class="col-md-9">
		Date Received:<br>
		Time Received:
	</div>
	<div class="col-md-3">
		File No:<br>
		Remarks:
	</div>
 -->

<div class="container">
<div style="margin-left: 40px; margin-right: 5px;">
 <table style="margin-right: 5px; margin-left: 15px;">
 <thead>
 	@if(isset($details))
 	<tr>
 		<th width="100px"></th>
 		<th width="10px"></th>
 		<th width="10px"></th>
 		<th width="100px"></th>
 		<th width="3px"></th>
 		<th width="10px"></th>
 	</tr>
 </thead>
 <tbody>
          @foreach($details as $rec)
 	<tr>
 		<td class="underline1" style="text-align: center;">{{$rec->date_receive}}</td>
 		<td class="underline1" style="text-align: center;">{{$rec->time_receive}}</td>
 		<td></td>
 		<td></td>
 		<td><b>File No:</b></td>
 		<td class="underline" style="text-align: center;">{{$rec->file_no}}</td>
 	</tr>
 	<tr>
 		<td style="text-align: center;"><b>Date Received</b></td>
 		<td style="text-align: center;"><b>Time</b> </td>
 		<td></td>
 		<td></td>
 		<td><b>Remarks:</b></td>
 		<td>{{$rec->remarks}}</td>
 	</tr>
      <tr>
      	<td><b>Received by:</b></td>
      	<td class="underline1" style="text-align: center;">{{$rec->receiveby}}</td>
      	<td></td>
      	<td></td>
      	<td></td>
      	<td></td>
      </tr>
      <tr>
      	<td></td>
      	<td><b>For:</b></td>
      	<td class="underline2">{{$rec->for}}</td>
      	<td></td>
      	<td></td>
      </tr>
      <tr>
      	<td></td>
      	<td></td>
      	<td class="underline2">{{$rec->office}}</td>
      	<td></td>
      	<td></td>
      </tr>
       <tr>
      	<td></td>
      	<td></td>
      	<td class="underline2">{{$rec->address}}</td>
      	<td></td>
      	<td></td>
      </tr>
      <tr>
      	<td></td>
      	<td><b>Subject:</b></td>
      	<td><u>{{$rec->subject}}</u></td>
      </tr>
          </tbody>
 </table>  
 <br><br><br>
<table style="width:80%; margin-left: 50px;">
  <tr>
    <th style="padding: 2px; text-align: center;">______________________</th>
    <th></th>
    <th style="padding: 2px; text-align: center;">_________________</th>
    <th></th>
    <th style="padding: 2px; text-align: center;">________________</th>
  </tr>
  <tr>
    <td style="padding: 1px; text-align: center;"><b>Courrier Tracking No.</b></td>
    <td></td>
    <td style="padding: 1px; text-align: center;"><b>Representative</b></td>
    <td></td>
    <td style="padding: 1px; text-align: center;"><b>Date</b></td>
  </tr>

   @endforeach
</table>
 @endif
</div>
</div>
<p class="text-muted" style="text-align: right; margin-right: 35px; font-weight: bolder; font-size: 1em;">DOH7-QOPRS-O1-Form 1 Rev 0</p>

<style type="text/css">
  .style16 { 
  border-top: 2px dashed #8c8b8b; 
} 
.style16:after { 
  content: '\002702'; 
  display: inline-block; 
  position: relative; 
  top: -12px; 
  left: 40px; 
  padding: 0 3px; 
  background: #f0f0f0; 
  color: #8c8b8b; 
  font-size: 18px;
  margin: auto; 
  clear: both;
}
</style>


<div class="style16">
@endsection