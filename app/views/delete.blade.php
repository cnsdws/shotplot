@extends('_master')

@section('css')
<link href="../../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('Delete')

 <br>
 <br>
    <!-- Main page section for deleting a position -->
        <h3>Delete a Match</h3>
        <h4>Delete {{ $match->place }} <small>Are you sure?</small></h4>
				
		<form action="{{ action('PositionsController@handleDelete') }}" method="post" role="form">
			<input type="hidden" name="match" value="{{ $match->id }}" />
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit" class="btn btn-danger" value="Yes" />
			<a href="{{ action('PositionsController@index') }}" class="btn btn-default">Cancel</a>
		</form>

		
 
@stop

