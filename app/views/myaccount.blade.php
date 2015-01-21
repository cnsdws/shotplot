@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop


@section('Edit')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Edit my account</h3>

        <p>
        	<form action="{{ action('PositionsController@handleEditMyAccount') }}" method="post" role="form">
			
				<div class="form-group">
					<input type="text" class="form-group" name="place" value="{{ $match->place }}" />
					<label for="place">Place</label>
				</div>
				<div class="form-group">
					<input type="text" class="form-group" name="date" value="{{ $match->date }}" />
					<label for="date">Date</label>
				</div>
				<div class="form-group">
					<input type="text" class="form-group" name="riflenumber" value="{{ $match->riflenumber }}" />
					<label for="riflenumber">Rifle Number</label>
				</div>
				<div class="form-group">
					<input type="text" class="form-group" name="rangename" value="{{ $match->rangename }}" />
					<label for="rangename">Range</label>
				</div>
				
				<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
				<input type="submit"value="Save" class="btn btn-primary" />

				<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
			
			</form>
		</p>
            
            
                        
@stop


