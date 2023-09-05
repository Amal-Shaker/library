@extends('style.index')

@section('content')

<div class="wrapper">
	<div class="container">
		<div class="row">
			<div class="module module-login span4 offset1">
				<form class="form-vertical" action="{{ URL('admain/store') }}" method="post">
									<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="module-head">
 						<h3>Admin Sign In</h3>
 					
					</div>
					<div class="module-body">
						
							
							<div class="control-group">
              @foreach ($errors->all() as $message)
                 <div class="alert alert-danger">{{ $message }}</div>
             @endforeach
              
            </div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="text" name="name" placeholder="Username"  autofocus>
																	
							</div>
						</div>
						<div class="control-group">
							<div class="controls row-fluid">
								<input class="span12" type="password" name="password" placeholder="Password">

							</div>

						</div>
						<div class="control-group">
                @if(session()-> has('error'))
               @if(session('error'))
               <div class="alert alert-danger">{{session('error')}}</div>
               @endif
               @endif  
            </div>
					</div>
					<div class="module-foot">

						<div class="control-group">
							<div class="controls clearfix">

									<button type="submit" class="btn btn-primary pull-right">Login</button>		
							</div>
						</div>
					</div>
				</form>
			</div>
			<div class="module module-login span4 offset2">
				<div class="module-head">
					<h3>Clinet Section</h3>
				</div>
				<div class="module-body">
                    <p><a href="{{URL('browse/create')}}"><strong>Browse Books</strong></a></p>
				</div>
			</div>
        </div>
	</div>
</div>
@include('style.imagestyle');
@stop