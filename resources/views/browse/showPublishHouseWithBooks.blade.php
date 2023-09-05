
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show publish house with your books</h3>
        </div>
        <div class="module-body">
            @foreach($publishHouses as $publishHouse)
<p><strong> {{$publishHouse->name}}</strong></p>
<ol>
@if(!empty($publishHouse->books))
   @foreach($publishHouse->books as $book)
     <a href="{{URL('browse/showBook/'.$book->id) }}">
     <li>{{$book->name}}</li>
   </a>  
   @endforeach  
@endif
</ol>
<br>
@endforeach
    
</div>
    </div>    
</div>
@stop

