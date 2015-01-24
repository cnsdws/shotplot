@extends('_firestringmaster')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('deletefirestring')

 <br>
 <br>
    <!-- Main page section for deleting a position -->
        <h3>Delete a Fire String</h3>
        <h4>Delete the  {{ $firestring->match->place}} string? <small>Are you sure?</small></h4>
				
		<form action="{{ action('PositionsController@handleDeleteFireString') }}" method="post" role="form">
			<input type="hidden" name="firestring" value="{{ $firestring->id }}" />
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit" class="btn btn-danger" value="Yes" />
			<a href="{{ action('PositionsController@indexfirestring') }}" class="btn btn-default">Cancel</a>
		</form>


		

@stop

