@extends('admain.controlpage')
@section('content')
<div class="content">
    <div class="module">
        <div class="module-head">
             <h3>Add Book</h3> 
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
             <div class="control-group">
              @foreach ($errors->all() as $message)
                 <div class="alert alert-danger">{{ $message }}</div>
             @endforeach
            </div>
        <form class="form-horizontal row-fluid"action="{{ URL('book/store') }}" method="POST" id="formAddBook">
            <div class="control-group">
                    <label class="control-label">book name:</label>
                    <div class="controls">
                        <input type="text" id="name"  placeholder="Enter the name of the book here..." class="span8"name="name">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">       
                      </div>
                </div>
               <div class="control-group">
                    <label class="control-label">publish house:</label>
                    <div class="controls">
                       <select name="book_publishing_houses_id">
                            <option></option>
                            @if(!empty($publishHouses))
                             @foreach ($publishHouses as $publishHouse)
                             <option value="{{$publishHouse->id}}">{{$publishHouse->name}}</option>
                              @endforeach
                              @endif
                        </select>  
                    </div>
                </div>
            <div class="control-group">
                    <label class="control-label">author name:</label>
                    <div class="controls">
                        <select name="book_author_id">
                            <option></option>
                             @if(!empty($authors))
                             @foreach ($authors as $author)
                             <option value="{{$author->id}}">{{$author->name}}</option>
                              @endforeach
                              @endif
                        </select>
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label">category name:</label>
                    <div class="controls">
                       <select name="book_rankings_id">
                             <option></option>
                             @if(!empty($rankings))
                             @foreach ($rankings as $ranking)
                             <option value="{{$ranking->id}}">{{$ranking->categoryname}}</option>
                              @endforeach
                              @endif
                        </select>   
                    </div>
                </div>
                <div class="control-group">
                    <label class="control-label">Relase year:</label>
                    <div class="controls">
                        <input type="text" id="name"  placeholder="Enter the relase year to the book here..." class="span8"name="releaseyear">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">        
                    </div>
                </div> 
                <div class="control-group">
                    <label class="control-label">Relase number:</label>
                    <div class="controls">
                        <input type="number" id="name"  placeholder="Enter the relase number to the book here..." class="span8"name="releasenumber">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">
                    </div>
                </div>    
                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="addbooks">Add Book</button>
                    </div>
                </div>
            </form>        
</div>
    </div>    
</div>
@stop
@section('script')
<script type="text/javascript">
  $('#addbooks').click(function(e){
    e.preventDefault();
    var submitConfirm = confirm("Are you sure to add it!");
    if(submitConfirm){
      $('#formAddBook').submit();
    }
  });
</script> 
@stop