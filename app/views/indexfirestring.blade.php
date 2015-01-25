@extends('_firestringmaster')


@section('indexfirestring')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach


    <!-- Main page section for stock positions listing -->
    <br>
    <br>
        <h3>Your Firestrings</h3>
        <li><a href="/createfirestring/{{$match_id}}" class="navbar-brand">Create a New String</a></li>
        <br>
        <br>
        <br>
        @if (count($firestrings) == 0)
				<br>
				<br>
				<p>
					<h4>There are no strings of fire for this match! </h4>
				</p>

			@else

				<table class="table table-striped">
					<thead>
						<tr>
							<th>String Number</th>
							<th>Target</th>
							<th>Distance</th>
							<th>Relay</th>
							<th>View</th>
							<th>Edit</th>
							<th>Delete</th>
						</tr>
					</thead>

					<tbody>
						@foreach($firestrings as firestring)
						<tr>
							<td>{{ $firestring->fire_string_number }}</td>
							<td>{{ $firestring->target }}</td>
							<td>{{ $firestring->distance }}</td>
							<td>{{ $firestring->relay }}</td>
							<td><a href="/indexfirestring/{{ $match->id }}">view details</a></td>
							<td><a href="{{ action('PositionsController@editFirestring', $match->id) }}" class="btn btn-default">Edit</a>
							<a href="/deletefirestring/{{$firestring->id}}"  class="btn btn-danger">Delete</a> </td></td>
						</tr>
						<tr>{{$match}}</tr>
						<br>
						<!-- User id = {{Auth::user()->id}} -->
						@endforeach

					</tbody>
				</table>
			@endif
			
@stop

