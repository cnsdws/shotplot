@extends('_master')

@section('css')
<link href="../css/bootstrap.css" rel="stylesheet">
@stop

@section('Index')
	

    <!-- Main page section for stock positions listing -->
    <br>
    <br>
        <h3>Shotplot Index</h3>

         @if ($matches->isEmpty())
				<p>There are no shooting matches created! </p>

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
							<td><a href="{{ action('PositionsController@indexFirestring') }}">Firestrings</a></td>
							<td><a href="{{ action('PositionsController@edit', $match->id) }}" class="btn btn-default">Edit</a>
							<a href="{{ action('PositionsController@delete', $match->id) }}"  class="btn btn-danger">Delete</a> </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
            
            
			
                        
@stop

