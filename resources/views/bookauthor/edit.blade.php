
 @extends('admain.controlpage')

@section('content')
<div class="content">
    
    <div class="module">


        <div class="module-head">
            <h3>update Author</h3>
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

        <form class="form-horizontal row-fluid"action="{{ URL('author/update/'.$authors->id) }}" method="POST" id="formUpdateAuthor">
            <div class="control-group" >
                    <label class="control-label">author name:</label>
                    <div class="controls">
                        <input type="text" id="name"  placeholder="Enter the name of the author here..." class="span8"name="name" value="{{$authors->name}}">
                        <input type="hidden"  name="_token"  value="{{ csrf_token() }}">
                        
                    </div>
                </div>



                <div class="control-group">
                    <div class="controls">
                        <button type="button" class="btn btn-inverse" id="updateAuthor">update</button>
                    </div>
                </div>
            </form>
</div>
    </div>    
</div>
@stop
@section('script')
<script type="text/javascript">
  $('#updateAuthor').click(function(e){
    e.preventDefault();
    var submitConfirm = confirm("Are you sure to update it!");
    if(submitConfirm){
      $('#formUpdateAuthor').submit();
    }
  });
</script> 
@stop

