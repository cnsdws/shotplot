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
        <h3>Edit your Matches</h3>
            
            <!-- <p>
            	<form action="{{ action('PositionsController@handleEdit') }}" method="post" role="form">
				
					<input type="hidden" name="id" value="{{ $position->id }}" />
				
					<div class="form-group">
						<input type="text" class="form-group" name="symbol" size="5", maxlength="6" value="{{ $position->symbol }}" />
						<label for="symbol">Symbol</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="shares" size="5", maxlength="6" value="{{ $position->shares }}" />
						<label for="shares">Shares</label>
					</div>
					<div class="form-group">
						<input type="text" class="form-group" name="price" size="6", maxlength="7" value="{{ $position->price }}" />
						<label for="price">Price</label>
					</div>
					<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
					<input type="submit" value="Save" class="btn btn-primary" />

					<a href="{{ action('PositionsController@index') }}" class="btn btn-link">Cancel</a>
				
				</form>
			</p> -->
                        
@stop


