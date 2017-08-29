
<!DOCTYPE html>
<html>
<head>
    <title></title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <form>
    <h1>Tabel Data</h1>

    <div class="container">
        @include('partials._messages')
    </div>
   

    <table class="table table-striped">
        <tr>
                            <th>No.</th>
                            <th>ID Merchant</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Start Time</th>
                            <th>End Time</th>
                            <th>Aksi</th>

        </tr>   
    
        @foreach($merchants as $key => $mhs)
       <form action="{{route('merchant.destroy',$mhs->id_merchant)}}" method="POST"  class="form-inline">
            <tr>
                                <td>{{ $key + 1 }}<br/></td>   
                                <td>{{$mhs->id_merchant}}</td>
                                <td>{{$mhs->merchant_name}}</td>
                                <td>{{$mhs->merchant_address}}</td>
                                <td>{{$mhs->merchant_phone_number}}</td>
                                <td>{{$mhs->start_time}}</td>
                                <td>{{$mhs->end_time}}</td>

                                <td>     
            <td> 
                <div class="col-sm-2">
                    <a href="{{ route('merchant.edit', $mhs->id_merchant) }}"  class="btn btn-warning">Edit</a>
                </div>
                <div class="col-sm-1">
                    {!! Form::open(['route' => ['merchant.destroy', $mhs->id_merchant], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </td>nl
        </tr>
        @endforeach
    </table>

    <a href="{{route('merchant.create')}}" class="btn btn-success"><span class="ti-plus"></span> Add Customer</a></th> 
    <div class="pagination-bar text-center">
        {{$merchants->links()}}
      </div>
  
</form>

</body>
</html>
