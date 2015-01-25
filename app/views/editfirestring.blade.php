@extends('_firestringmaster')

@section('editfirestring')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Edit a String of Fire</h3>
            
           
                        
@stop


