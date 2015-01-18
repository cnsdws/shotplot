@extends('_master')

@section('css')
<link href="../public/css/bootstrap.css" rel="stylesheet">
@stop

@section('Index')
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach


    <!-- Main page section for stock positions listing -->
    <br>
    <br>
        <h3>Stock Portfolio Management</h3>
            
            @if ($positions->isEmpty())
				<p>There are no stock positions! </p>

			@else
				<table class="table table-striped">
					<thead>
						<tr>
							<th>Symbol</th>
							<th>Shares</th>
							<th>Purchase Price</th>
							<th>Target Price</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($positions as $position)
						<tr>
							<td>{{ $position->symbol }}</td>
							<td>{{ $position->shares }}</td>
							<td>{{ $position->price }}</td>
							<td>{{ $position->target}}</td>
							<td><a href="{{ action('PositionsController@edit', $position->id) }}" class="btn btn-default">Edit</a>
							<a href="{{ action('PositionsController@delete', $position->id) }}"  class="btn btn-danger">Delete</a> </td>
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
			
                        
@stop

