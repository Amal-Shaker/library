
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Book</h3>
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
                <th>Author name</th>
                <th>Relase year</th>
                <th>Relase number</th>
                <th>publish house</th>
                <th>category name</th>
                <th>Update</th>
                <th>Delete</th>
                
            </thead>

            <tbody>
                @if(!empty($books))
                @foreach ($books as $book)
                <tr>
                        <td>{{ $book->name }}</td>
                        <td>{{ $book->author->name }}</td>

                        <td>{{$book->releaseyear}}</td>
                        <td>{{ $book->releasenumber }}</td>
                        <td>{{ $book->publishHouse->name}}</td>
                        <td>{{$book->ranking->categoryname}}</td>

                        <td><a href="{{URL('book/edit/'.$book->id)}}">update</a></td>
                        <td><form class="formDeleteBook" action="{{URL('book/delete/'.$book->id)}}" method="POST" >
                           
                            <input type="hidden" name="_token" value="{{csrf_token()}}">
                             <button type="submit" class="btn btn-danger use" id="deleteBook" onclick="return confirm('Are you sure to delete it?')">Delete</button>
                        </form></td>     
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    
</div>
    </div>    
</div>
@stop


