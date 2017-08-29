	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<form>
	<table class="table table-striped">
		<tr>
			<th>item</th>
			<th>stock</th>
			<th>harga</th>
			<th>quantity</th>
			<th>buka</th>
			<th>tutup</th>
			<th>tanggal reservasi</th>
		</tr>
		@foreach($items as $val)
		<tr>
			<td>{{$val->item_name}}</td>
			<td>{{$val->item_stock}}</td>
			<td>{{$val->item_price}}</td>
			<td><input type="text" name="quantity[]" placeholder="Quantity"></input><br/>
			</td>
			<td></td>
			<td></td>
		</tr>
		@endforeach
	</table>
	<input type="submit" value="Reservasi" class="btn btn-info"><br>
	<br><select name="merchant_name" class="selected2">
	<option selected="selected" > Please choose merchant</option>
     @foreach($merchants as $val)
    <option value="{{$val->id_merchant}}">{{$val->merchant_name}}</option>
     @endforeach
</select><br>
</form>