<!DOCTYPE html>
<html>

<body>
<center>
	 <H2>DAILY OUTGOING COMMUNICATIONS MONITORING SHEET</H2>
	<table>
		@foreach($viewrecord as $data)
		<tr>
		  <td> For: {{$data-> for}}</td></tr>
		  <tr>
		  <td> Subject: {{$data-> subject}}</td></tr>
		  <tr>
		  <td> Received by: {{$data-> receiveby}}</td></tr>

		  </tr>
		  @endforeach
	</table>

<input type="image" src="{{ asset('public/asset/print-512.png')}}"  onclick="print();" width="50" height="60" alt="printer" /></a>
</center>
</body>
</html>