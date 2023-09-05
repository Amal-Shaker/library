
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Author</h3>
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
                @foreach ($authors as $author)
                <tr>
                <td>{{ $author->name }}</td>
                <td><a href="{{URL('author/edit/'.$author->id)}}">update</a></td>
                <td><form action="{{URL('author/delete/'.$author->id)}}" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                        </form>
                </td>
                        
                </tr>
                @endforeach
            </tbody>
        </table>

    
</div>
    </div>    
</div>
@stop




