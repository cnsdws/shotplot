@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop
<br>
<br>
@section('Create')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

    <!-- Main page section for create position -->
    <h3>Add a new Match</h3>

    	<!-- <form action="{{ action('PositionsController@handleCreate') }}" method="post" role="form">

    		<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

			<div class="form-group">
				{{ Form::input('text', 'symbol', null, ['size' => '5', 'maxlength'=>'6']) }}
				{{ Form::label('symbol','Stock Symbol') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'shares', null, ['size' => '5', 'maxlength'=>'6']) }}
				{{ Form::label('shares', 'Shares of Stock') }}
			</div>
			<div class="form-group">
				{{ Form::input('text', 'price', null, ['size' => '6', 'maxlength'=>'7']) }}
				{{ Form::label('price','Purchase Price') }}
			</div>
			{{ Form::submit('Create', ['class' => 'btn btn-primary']) }}
			<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
		</form> -->
                        
@stop

