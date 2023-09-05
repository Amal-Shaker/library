
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Book</h3>
        </div>
        <div class="module-body">
            <table class="table table-hover">
            <thead>
                <th><strong>Name Book</strong></th>
                <th><strong> Relase year</strong></th>
                <th><strong> Relase number</strong></th>
                <th><strong>author name</strong></th>
                <th><strong>category name</strong></th>
                <th><strong>publish house name</strong></th>
                
                
            </thead>

            <tbody>
                <tr>
                       <td>{{ $book->name }}</td>
                       

                        <td>{{$book->releaseyear}}</td>
                        <td>{{ $book->releasenumber }}</td>
                         <td>{{ $book->author->name }}</td>
                        <td>{{$book->ranking->categoryname}}</td>
                        <td>{{ $book->publishHouse->name}}</td>
                       
                </tr>

             </tbody>
        </table>
    
</div>
    </div>    
</div>
@stop

