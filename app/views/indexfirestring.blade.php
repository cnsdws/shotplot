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
        <h3>Shotplot firestring index</h3>

        @if ($firestrings->isEmpty())
				<p>There are no strings of fire for this match! </p>

			@else

				<table class="table table-striped">
					<thead>
						<tr>
							<th>String Number</th>
							<th>Date</th>
							<th>Range</th>
							<th>Firing Strings</th>
							<th>Actions</th>
						</tr>
					</thead>

					<tbody>
						@foreach($firestrings as $firestring)
						<tr>
							<td>{{ $firestring->fire_string_number }}</td>
							
							
						</tr>
						@endforeach
					</tbody>
				</table>
			@endif
            
            
			
                        
@stop

