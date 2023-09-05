
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show categorys</h3>
        </div>
        <div class="module-body">
            <table class="table table-hover">
            <thead>
                <th><strong> Name category</strong></th>
            </thead>

            <tbody>
                @if(!empty($rankings))
                @foreach ($rankings as $ranking)
                <tr>
                        <td>{{ $ranking->categoryname }}</td>     
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    
</div>
    </div>    
</div>
@stop

