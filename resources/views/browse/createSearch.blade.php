@extends('browse.create')
@section('content')
<div class="content"> 
    <div class="module">
        <div class="module-head">
            <h3>SEARCH</h3>
        </div>
        <div class="module-body">
        <form action="{{ URL('browse/search') }}" method="POST">
        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">        	
        <input type="text" id="name"  placeholder="Enter the search...." class="span8"name="name">
           <select name="selec">
           	<option value="bookname">book name</option>
           	<option value="authorname">author name</option>
           	<option value="categoryname">category name</option>
           	<option value="publishhouse">publish house</option>
           </select>
           <button type="submit">search</button>
        </form>  
        </div>
    </div>    
</div>
@if(session()->has('books'))
        @foreach(session('books') as $book)
        <div class="module-head" style="width: 150px;box-shadow: 5px 10px 18px  #b03ae2; " >
          <h3>Name Book: {{ $book->name }}</h3>
          <h3>Realse year: {{$book->releaseyear}}</h3>
          <h3>Relase number: {{$book->releasenumber}}</h3>
        </div>
        <br>
        @endforeach

@elseif(session()->has('authors'))
        @foreach(session('authors') as $author)
        @if(!empty($author->books))
        @foreach($author->books as $book)
        <div class="module-head" style="width: 150px;box-shadow: 5px 10px 18px  #b03ae2; " >
            <h3>Name Book: {{ $book->name }}</h3>
            <h3>Realse year: {{$book->releaseyear}}</h3>
            <h3>Relase number: {{$book->releasenumber}}</h3>
        </div>
        <br>
        @endforeach 
        @endif
        @endforeach  

@elseif(session()->has('publishHouses'))
      @foreach(session('publishHouses') as $publishHouse)
      @if(!empty($publishHouse->books))
      @foreach($publishHouse->books as $book)
      <div class="module-head" style="width: 150px;box-shadow: 5px 10px 18px #b03ae2;">  
          <h3>Name Book: {{ $book->name }}</h3>
          <h3>Realse year: {{$book->releaseyear}}</h3>
          <h3>Relase number: {{$book->releasenumber}}</h3>
      </div>
      <br>
      @endforeach  
      @endif
      @endforeach

@elseif(session()->has('rankings'))
        @foreach(session('rankings') as $ranking)
        @if(!empty($ranking->books))
        @foreach($ranking->books as $book)
        <div class="module-head" style="width: 150px;box-shadow: 5px 10px 18px #b03ae2;">  
            <h3>Name Book: {{ $book->name }}</h3>
            <h3>Realse year: {{$book->releaseyear}}</h3>
            <h3>Relase number: {{$book->releasenumber}}</h3>
        </div>
        <br>
        @endforeach 
        @endif
        @endforeach  
@endif
@stop
