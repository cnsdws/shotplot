@extends('_firestringmaster')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('indexfirestring')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach


    <!-- Main page section for stock positions listing -->
    <br>
    <br>
        <h3>Your Firestrings</h3>
        <li><a href="{{ action('PositionsController@createfirestring') }}" class="navbar-brand">Create a New String</a></li>

        @if ($firestrings->isEmpty())
				<br>
				<br>
				<p>
					<h4>There are no strings of fire for this match! </h4>
				</p>

			@else

				<table class="table table-striped">
					<thead>
						<tr>
							<th>Date</th>
							<th>Location</th>
							<th>Distance</th>
							<th>Target Type</th>
							<th>Firing String</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($firestrings as $firestring)
						<tr>
							<td>{{ $firestring->match->date}}</td>
							<td>{{ $firestring->match->place}}</td>
							<td>{{ $firestring->distance }}</td>
							<td>{{ $firestring->target }}</td>
							<td>{{ $firestring->fire_string_number }}</td>
							<td><td><a href="{{ action('PositionsController@editfirestring', $firestring->id) }}" class="btn btn-default">Edit</a>
							<a href="{{ action('PositionsController@deletefirestring', $firestring->id) }}"  class="btn btn-danger">Delete</a> </td></td>
							
							
						</tr>
						@endforeach

						
					</tbody>
				</table>
			@endif
            
            
			
                        
@stop

