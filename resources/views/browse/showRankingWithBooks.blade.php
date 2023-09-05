
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show categorys with your books</h3>
        </div>
        <div class="module-body">
            @foreach($rankings as $ranking)
<p><strong> {{$ranking->categoryname}}</strong></p>
<ol>
@if(!empty($ranking->books))
   @foreach($ranking->books as $book)
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

