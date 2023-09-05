
 @extends('browse.create')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>show Author with your book</h3>
        </div>
        <div class="module-body">
            @foreach($authors as $author)
        <p><strong> {{$author->name}}</strong></p>
<ol>
@if(!empty($author->books))
   @foreach($author->books as $book)
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

