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
    <h3>Edit Merchant</h3>
    <hr>
      
        <form action="{{route('merchant.update',$merchants->id_merchant)}}" method="POST">
        {{ csrf_field() }}
        <input type="hidden" name="id_merchant" value="$merchants->id_merchant">
        <input type="hidden" name="_method" value="PUT">
      <div class="row">
          <div class="col-md-5">
                      <label>Merchant Name</label>
                      <input type="text" class="form-control border-input" value="{{$merchants->merchant_name}}" name="merchant_name">     
              </div>
              </div>
                <div class="row">
               <div class="col-md-5">
                      <label>Merchant Address</label>
                      <input type="text" class="form-control border-input" value="{{$merchants->merchant_address}}" name="merchant_address">     
              </div>
              </div>
            <div class="row">
            <div class="col-md-5">

            <label>Phone Number</label>
            <input type="text" class="form-control border-input" value="{{$merchants->merchant_phone_number}}" name="merchant_phone_number">   
            </div>
            </div>
            <div class="row">
            <div class="col-md-5">
                      <label>Start Time</label>
                      <input type="text" maxlength="10" class="form-control border-input" value="{{$merchants->start_time}}" name="start_time"> 
            </div>
            </div>
            <div class="row">
            <div class="col-md-5">
             <label>End Time</label>
                      <input type="text" maxlength="10" class="form-control border-input" value="{{$merchants->end_time}}" name="end_time"> 
            </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <a href="{{ route('merchant.index') }}" class="btn btn-success">Cancel</a><span class="ti-plus"></span> 

              <input type="submit" value="Save" class="btn btn-success">
              </div>
            </div>
        </form>
</body>
</html>