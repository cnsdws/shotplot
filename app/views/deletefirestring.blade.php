@extends('_firestringmaster')
@section('title')
<title>Delete Firestring</title>
@end

@section('deletefirestring')

 <br>
 <br>
    <!-- Main page section for deleting a position -->
        <h3>Delete a Fire String</h3>
        <h4>Delete the #{{ $firestring->fire_string_number}} firestring? <small>Are you sure?</small></h4>
				
		<form action = "/deletefirestring/{{ $firestring->id }}" method = "post" role = "form">
			<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
			<input type="submit" class="btn btn-danger" value="Yes" />
			<a href="/indexfirestring/{{ $firestring->match_id }}" class="btn btn-default">Cancel</a>
		</form>


		

@stop

