@extends('_master')
@section('title')
<title>Edit My Account</title>
@stop

@section('Edit')
	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Edit my account</h3>
            
            
                        
@stop


