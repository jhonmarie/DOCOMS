<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
 <body>
   
      <div class="container">
 <div class="row">
  <div class="col-sm-3">

  
     <div> 
     <form action="{{ asset('search') }}" method="post" role="search">
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
 
 <center>
   <H2>DAILY OUTGOING COMMUNICATIONS MONITORING SHEET</H2>
   </center>

   <div class="container">
   
    @if(count($data))
    <table class="table table-striped">
        <thead>
            <tr>
                <th>For</th>
                <th>Office</th>
                <th>Address</th>
                <th>Subject</th>
                <th>Receive by</th>
                <th>Create At</th>
                <th>Update At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{$d->for}}</td>
                <td>{{$d->office}}</td>
                <td>{{$d->address}}</td>
                <td>{{$d->subject}}</td>
                <td>{{$d->receiveby}}</td>
                <td>{{$d->created_at}}</td>
                <td>{{$d->updated_at}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    @else
        <div class="panel panel-defalut">
            <strong style="color:red;">No data found! </strong>
        </div>
    @endif
    <ul class="pagination">
        {{ $data->links() }}
    </ul>    
</div>
 

     
    <footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align: center; font-weight: bolder; font-size: 1em;">DOH-RO7</p>
      </div>
    </footer>



</center>
</body>
</html>

div class="spp"><a href="#" data-toggle="tooltip" title="Print">
 <input type="image" src="{{ asset('public/asset/print-512.png')}}"  onclick="print();" width="50" height="60" alt="printer" /></a></div>