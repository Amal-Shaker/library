
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show category</h3>
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
                <th>Name ranking</th>
                <th>Update</th>
                <th>Delete</th>
                
            </thead>

            <tbody>
                @foreach ($rankings as $ranking)
                <tr>
                        <td>{{ $ranking->categoryname }}</td>
                        <td><a href="{{URL('bookRanking/edit/'.$ranking->id)}}">update</a></td>
                        <td><form action="{{URL('bookRanking/delete/'.$ranking->id)}}" method="POST" class="formDelCat">
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <button type="submit" class="btn btn-danger deleteCat" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                        </form></td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>


    
</div>
    </div>    
</div>
@stop

