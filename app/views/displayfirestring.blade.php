@extends('_firestringmaster')

@section('editfirestring')
<br>
 <li><a href="/indexfirestring/{{ $firestring->match_id }}" class="navbar-brand">Back to Firestrings</a></li>

	
	@foreach($errors->all() as $message) 
    <div class='error'>{{ $message }}</div>
	@endforeach

 	<br>
    <br>
    <!-- Main page section for stock edit -->
        <h3>Display a String of Fire</h3>
    
        <div class = "row">
	    	<div class = "col-md-4"> 
	    		<table class="table table-striped">
		    		<tbody>
		    			<h4> Firestring # {{$firestring->fire_string_number}}</h4>
			    		<tr>
			    			<td>Distance</td>
			    			<td>{{ $firestring->distance }}</td>
						</tr>
						<tr>
			    			<td>Target Number</td>
			    			<td>{{ $firestring->target }}</td>
						</tr>
						<tr>
			    			<td>Relay</td>
			    			<td>{{ $firestring->relay }}</td>
						</tr>
						<tr>
			    			<td>Light Direction</td>
			    			<td>{{ $firestring->lightdirection }}</td>
						</tr>
						<tr>
			    			<td>Wind Direction</td>
			    			<td>{{ $firestring->winddirection }}</td>
						</tr>
						<tr>
			    			<td>Wind Speed</td>
			    			<td>{{ $firestring->windspeed }}</td>
						</tr>
						<tr>
			    			<td>Elevation</td>
			    			<td>{{ $firestring->elevation }}</td>
						</tr>
						<tr>
			    			<td>Windage</td>
			    			<td>{{ $firestring->windage }}</td>
						</tr>
					</tbody>
				</table>	
           </div>
           <div class = "col-md-2"> 
	    		<table class="table table-striped">
		    		<tbody>
		    			<h4> Shot and Score</h4>
			    		<tr>
			    			<td>Shot 1</td>
			    			<td>{{$firestring->shot1value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 2</td>
			    			<td>{{$firestring->shot2value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 3</td>
			    			<td>{{$firestring->shot3value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 4</td>
			    			<td>{{$firestring->shot4value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 5</td>
			    			<td>{{$firestring->shot5value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 6</td>
			    			<td>{{$firestring->shot6value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 7</td>
			    			<td>{{$firestring->shot7value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 8</td>
			    			<td>{{$firestring->shot8value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 9</td>
			    			<td>{{$firestring->shot9value}}</td>
			    		</tr>
			    		<tr>
			    			<td>Shot 10</td>
			    			<td>{{$firestring->shot10value}}</td>
			    		</tr>

			    	</tbody>
			    </table>
			</div>
			<div class = "col-md-4">
			
				<div id="flashContent">
					<object width="550" height="550" data ="shotplot.swf" align="middle"></object>
		</div>

			</div> 
       </div>
                     
@stop


