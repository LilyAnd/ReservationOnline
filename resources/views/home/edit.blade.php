<!DOCTYPE html>
<html>
<head>
  <title></title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
    <h3>Edit Customer</h3>
    <hr>
      
        <form action="{{route('home.update',$customers->id_customer)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id_customer" value="$customers->id_customer">
        <input type="hidden" name="_method" value="PUT">
      <div class="row">
          <div class="col-md-5">
                      <label>Customer Name</label>
                      <input type="text" class="form-control border-input" value="{{$customers->customer_name}}" name="customer_name">     
              </div>
              </div>
           <div class="row">
          <div class="col-md-5">
              
                      <label>Gender</label>
           <select class="form-control border-input" name="customer_gender">

                        <option value="Male">Male</option> 
                        <option value="Female">Female</option><
                      
                      </select>
            </div>
            </div>
            <div class="row">
            <div class="col-md-5">
            <label>Customer Address</label>
            <input type="text" class="form-control border-input" value="{{$customers->customer_address}}" name="customer_address">   
            </div>
            </div>
            <div class="row">
            <div class="col-md-5">
                      <label>Phone Number</label>
                      <input type="text" maxlength="12" class="form-control border-input" value="{{$customers->customer_phone_number}}" name="customer_phone_number"> 
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <a href="{{ route('home.index') }}" class="btn btn-success">Cancel</a><span class="ti-plus"></span> 

              <input type="submit" value="Save" class="btn btn-success">
              </div>
            </div>
        </form>
</body>
</html>