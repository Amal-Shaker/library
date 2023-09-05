
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Author</h3>
        </div>
        <div class="module-body">
            <table class="table table-hover">
            <thead>
                <th><strong>Name author</strong> </th>
            </thead>

            <tbody>
                @if(!empty($authors))
                @foreach ($authors as $author)
                <tr>
                        <td>{{ $author->name }}</td>     
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    
</div>
    </div>    
</div>
@stop

