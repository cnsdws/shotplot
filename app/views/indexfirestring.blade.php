@extends('_firestringmaster')


@section('indexfirestring')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach


    <!-- Main page section for stock positions listing -->
    <br>
        <h3>Your Firestrings</h3>
        <li><a href="/createfirestring/{{$match->id}}" class="navbar-brand">Create a New String</a></li>
        <br>
        @if (count($firestrings) == 0)
				<br>
				<br>
				<p>
					<h4>There are no strings of fire for this match! </h4>
					<p>Select "Create Firestring" from the menu to start collecting your data!</p>
				</p>

			@else

				<table class="table table-striped">
					<thead>
						<tr>
							<th>Firestring Number</th>
							<th>Target Number</th>
							<th>Distance</th>
							<th>Relay</th>
							<th>View</th>
							<th>Actions</th>
							
						</tr>
					</thead>

					<tbody>
						@foreach($firestrings as $firestring)
						<tr>
							<td>{{ $firestring->fire_string_number }}</td>
							<td>{{ $firestring->target }}</td>
							<td>{{ $firestring->distance }}</td>
							<td>{{ $firestring->relay }}</td>
							<td><a href="/displayfirestring/{{$firestring->id}}">view details</a></td>
							<td><a href="/editfirestring/{{$firestring->id}}" class="btn btn-default">Edit</a>
							<a href="/deletefirestring/{{$firestring->id}}"  class="btn btn-danger">Delete</a> </td></td>
						</tr>
						
						@endforeach

					</tbody>
				</table>
			@endif
			
@stop

