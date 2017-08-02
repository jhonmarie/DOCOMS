@extends('Welcome')
@section('content')

<H2>DAILY OUTGOING COMMUNICATIONS MONITORING SHEET</H2>

@foreach($print as $data)
<tr>
		  <td> For: {{$data-> for}}</td></tr>
		  <tr>
		  <td> Subject: {{$data-> subject}}</td></tr>
		  <tr>
		  <td> Received by: {{$data-> receiveby}}</td></tr>

		  </tr>
		  @endforeach
	</table>




@endsection