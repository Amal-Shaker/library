
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>Update Book</h3>
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

        <form class="form-horizontal row-fluid"action="{{ URL('book/update/'.$books->id) }}" method="POST" id="formUpdateBook">


            <div class="control-group">
                    <label class="control-label">book name:</label>
                    <div class="controls">
                        <input type="text" id="name"  placeholder="Enter the name of the book here..." class="span8"name="name" value="{{$books->name}}" >
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">
                        
                    </div>
                </div>


<div class="control-group">
                    <label class="control-label">publish house:</label>
                    <div class="controls">
                       <select  name="book_publishing_houses_id">
                               @if(!empty($publishHouses))
                             @foreach ($publishHouses as $publishHouse)
                             @if($publishHouse->name == $books->publishHouse->name)
                             <option selected value="{{$publishHouse->id}}">{{$publishHouse->name}}</option>
                             @else
                             <option value="{{$publishHouse->id}}">{{$publishHouse->name}}</option>
                             @endelse
                             @endif
                              @endforeach
                              @endif
                        </select>
                        
                    </div>
                </div>

            <div class="control-group">
                    <label class="control-label">author name:</label>
                    <div class="controls">
                        <select name="book_author_id">

                               @if(!empty($authors))
                             @foreach ($authors as $author)
                             @if($author->name == $books->author->name)
                             <option selected value="{{$author->id}}">{{$author->name}}</option>
                             @else
                             <option value="{{$author->id}}">{{$author->name}}</option>
                             @endelse
                             @endif
                              @endforeach
                              @endif
                        </select>
                    </div>
                </div> 

                


                <div class="control-group">
                    <label class="control-label">category name:</label>
                    <div class="controls">
                       <select name="book_rankings_id">
                             @if(!empty($rankings))
                             @foreach ($rankings as $ranking)
                             @if($ranking->categoryname == $books->ranking->categoryname)
                             <option selected value="{{$ranking->id}}">{{$ranking->categoryname}}</option>
                             @else
                             <option value="{{$ranking->id}}">{{$ranking->categoryname}}</option>
                             @endelse
                             @endif
                              @endforeach
                              @endif
                        </select>
                        
                    </div>
                </div>


                <div class="control-group">
                    <label class="control-label">Relase year:</label>
                    <div class="controls">
                        <input type="text" id="name"  placeholder="Enter the relase year to the book here ..." class="span8"name="releaseyear" value="{{$books->releaseyear}}">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">
                        
                    </div>
                </div> 


                <div class="control-group">
                    <label class="control-label">Relase number:</label>
                    <div class="controls">
                        <input type="number" id="name"  placeholder="Enter the relase number to the book  here..." class="span8"name="releasenumber" value="{{$books->releasenumber}}">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">
                        
                    </div>
                </div>    





                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="updatebooks">update Book</button>
                    </div>
                </div>
            </form>
</div>
    </div>    
</div>
@stop
@section('script')
<script type="text/javascript">
  $('#updatebooks').click(function(e){
    e.preventDefault();
    var submitConfirm = confirm("Are you sure to update it!");
    if(submitConfirm){
      $('#formUpdateBook').submit();
    }
  });
</script> 
@stop

