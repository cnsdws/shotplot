@extends('_master')


@section('Index')
	

    <!-- Main page section for stock positions listing -->
    <br>
    <br>
        <h3>Your Shooting Matches</h3>

         @if ($matches->isEmpty())
				<h4>There are no shooting matches created! </h4>
				<p>Select "Create Match" from the menu to start collecting your data!</p>

			@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Place</th>
							<th>Date</th>
							<th>Range</th>
							<th>Firing Strings</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($matches as $match)
						<tr>
							<td>{{ $match->place }}</td>
							<td>{{ $match->date }}</td>
							<td>{{ $match->rangename }}</td>
							<td><a href="/indexfirestring/{{$match->id}}">Firestrings</a></td>
							<td><a href="{{ action('PositionsController@edit', $match->id) }}" class="btn btn-default">Edit</a>
							<a href="{{ action('PositionsController@delete', $match->id) }}"  class="btn btn-danger">Delete</a> </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
            
            
			
                        
@stop

