
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
    <h1> Data Customer</h1>

    <div class="container">
        @include('partials._messages')
    </div>
   

    <table class="table table-striped">
        <tr>
                            <th>No.</th>
    
                            <th>Customer Name</th>
                             <th>Gender</th>
                            <th>Customer Address</th>
                            <th>Phone Number</th>
                            <th>Aksi</th>

        </tr>   
    
        @foreach($customers as $key => $mhs)
       <form action="{{route('home.destroy',$mhs->id_customer)}}" method="POST"  class="form-inline">
            <tr>
            <td>
                {{ $key + 1 }}<br/>
            </td>   
         
        
            <td>
                {{$mhs->customer_name}}<br/>
            </td>
            <td>
                {{$mhs->customer_gender}}<br/>
            </td>
            <td>s
                {{$mhs->customer_address}}<br/>
            </td>
              <td>
                {{$mhs->customer_phone_number}}<br/>
            </td>
            
            <td>
             
                <div class="col-sm-2">
                    <a href="{{ route('home.edit', $mhs->id_customer) }}"  class="btn btn-warning">Edit</a>
                </div>
                <div class="col-sm-3">
                    {!! Form::open(['route' => ['home.destroy', $mhs->id_customer], 'method' => 'DELETE']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}
                </div>
            </td>
        </tr>
        @endforeach
    </table>

    <a href="{{route('home.create')}}" class="btn btn-success"><span class="ti-plus"></span> Add Customer</a></th> 
    <div class="pagination-bar text-center">

        {{$customers->links()}}
   
    </div>
  
</form>

</body>
</html>
