
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
   <div class="row">
       <div class="col-md-8 col-md-offset-2">

       <h3>Form Customer</h3>
       <hr>    
           {!! Form::open(array('route' => 'home.index')) !!}      
           {{ Form::label('customer_name', 'Nama:')}}
           {{ Form::text('customer_name', null, array('class' => 'form-control', 'required' => ''))}}          
          {{ Form::label('customer_gender', 'Jenis Kelamin:')}}

           {{ Form::text('customer_gender', null, array('class' => 'form-control', 'required' => ''))}}           
           {{ Form::label('customer_address', 'Alamat:')}}
           {{ Form::text('customer_address', null, array('class' => 'form-control', 'required' => ''))}}             
           {{ Form::label('customer_phone_number', 'No Telepon:')}}
           {{ Form::text('customer_phone_number', null, array('class' => 'form-control', 'required' => ''))}}            
           {{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'margin-top: 20px'))}}
       {!! Form::close() !!}
       </div>
   </div>
   