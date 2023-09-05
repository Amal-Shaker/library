
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show publish house</h3>
        </div>
        <div class="module-body">
             <div class="control-group">
                @if(session()-> has('add_status'))
               @if(session('add_status'))
               <div class="alert alert-success">SUCCESS</div>
               @else
               <div class="alert alert-danger">Failed</div>
               @endif
            @endif  
            </div>
           <table class="table table-hover">
            <thead>
                <th>Name</th>
                <th>Update</th>
                <th>Delete</th>
                
            </thead>

            <tbody>
                @foreach ($publishHouses as $publishHouse)
                <tr>
                        <td>{{ $publishHouse->name }}</td>
                        <td><a href="{{URL('publishHouse/edit/'.$publishHouse->id)}}">update</a></td>
                        <td><form action="{{URL('publishHouse/delete/'.$publishHouse->id)}}" method="POST" class="formDelHou">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn btn-danger deleteHou" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                        </form></td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>

    
</div>
    </div>    
</div>
@stop

