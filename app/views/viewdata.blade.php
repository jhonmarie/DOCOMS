@extends('Welcome')
@section('content')
<center>




<div class="container">

    @if(count($data))
     <div class="table-responsive"> 
    <table class="table table-hover" id="example" class="display">
        <thead>
            <tr>
                <th>File #</th>
                <th>For</th>
                <th>Office</th>
                <th>Address</th>
                <th>Subject</th>
                <th>Receive by</th>
                <th>Date Received</th>
                <th>Time Received</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody class="table-results">
            @foreach($data as $d)
            <tr>
                <td>{{$d->file_no}}</td> 
                <td>{{$d->for}}</td>
                <td>{{$d->office}}</td>
                <td>{{$d->address}}</td>
                <td>{{$d->subject}}</td>
                <td>{{$d->receiveby}}</td>
                <td>{{$d->date_receive}}</td>
                <td>{{$d->time_receive}}</td>
               
                 <td><button class="edit-modal btn btn-info" 
            data-info="{{$d->id}},{{$d->for}},{{$d->office}},{{$d->address}},{{$d->subject}},{{$d->receiveby}}">
            <img src="{{asset('public/asset/edit.png')}}" height="15" width="15"> Edit
        </button>
          <button class="delete-modal btn btn-danger"
            data-info="{{$d->id}},{{$d->for}},{{$d->office}},{{$d->address}},{{$d->subject}},{{$d->receiveby}}" class="delete-modal">
            <img src="{{asset('public/asset/deleted.png')}}" height="15" width="15"> Delete
        </button></td>
           </tr>
            @endforeach
        </tbody>
    </table>

    @else
        <div class="panel panel-defalut">
            <strong style="color:red;">No data found! </strong>
        </div>
         </div> 
    @endif
    <ul class="pagination">
        {{ $data->links() }}
    </ul>    
</div>

<script>
$(document).ready(function(){
    $('#myTable').DataTable();
});
</script>
@endsection