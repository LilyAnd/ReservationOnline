<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form>
		<table class="table table-striped">
	  	<tr>
	  		<th>
	  			No.
	  		</th>
	    	<th>
	    		Customer Name
	    	</th>
	    	<th>
	    		Reservation Date
	    	</th>
	    	<th>
	    		Action
	    	</th>
	  	</tr>  	
	
		@foreach($reservations as $key => $reservation)
		<tr>
			<td>
				{{ $key + 1 }}<br/>
			</td>	

			<td>
				{{$reservation->id_customer}}<br/>
			</td>
			<td>
				{{$reservation->reservation_date}}<br/>
			</td>
			<td>
				<div class="col-sm-1">
					<a href="{{ route('reservation.show', $reservation->id_reservation) }}" class="btn btn-info">Detail</a>
				</div>
			</td>
		</tr>
		@endforeach
	</table>

	<div class="pagination-bar text-center">
		{{$reservations->links()}}
	</div>

	</form>

</body>
</html>