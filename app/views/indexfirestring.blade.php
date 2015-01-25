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
        <li><a href="{{ action('PositionsController@createFirestring') }}" class="navbar-brand">Create a New String</a></li>
        <br>
        <br>
        <br>
        @if ($matches->isEmpty())
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
							<th>Owner</th>
							<th>Match ID</th>
							<th>Distance</th>
							<th>Target Type</th>
							<th>Firing String</th>
							<th>Fire String ID</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($matches as $match)
						<tr>
							<td>{{ $match->date }}</td>
							<td>{{ $match->place }}</td>
							<td>{{ $match->user_id }}</td>
							<td>{{ $match->id }}</td>
							<td></td>

							
							<td><a href="{{ action('PositionsController@displayFirestring') }}">view details</a></td>
							<td><td><a href="{{ action('PositionsController@editFirestring', $match->id) }}" class="btn btn-default">Edit</a>
							<a href="{{ action('PositionsController@deleteFirestring', $match->id) }}"  class="btn btn-danger">Delete</a> </td></td>
						</tr>
						<tr>{{$match}}</tr>
						<br>
						<!-- User id = {{Auth::user()->id}} -->
						@endforeach

					</tbody>
				</table>
			@endif
			
@stop

