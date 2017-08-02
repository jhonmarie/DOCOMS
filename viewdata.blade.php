<center>
<div class="container">
 
    @if(count($data))
    <table class="table table-hover">
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
        <tbody class="table-results">
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