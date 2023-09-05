
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Publish House</h3>
        </div>
        <div class="module-body">
            <table class="table table-hover">
            <thead>
                <th><strong>Name Publish House</strong> </th>
            </thead>

            <tbody>
                @if(!empty($publishHouses))
                @foreach ($publishHouses as $publishHouse)
                <tr>
                        <td>{{ $publishHouse->name }}</td>     
                </tr>
                @endforeach
                @endif
            </tbody>
        </table>
    
</div>
    </div>    
</div>
@stop

