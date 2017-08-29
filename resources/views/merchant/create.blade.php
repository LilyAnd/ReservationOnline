    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <h3>Form Merchant</h3>
        <hr>

        {!! Form::open(array('route' => 'merchant.index')) !!}

            {{ Form::label('merchant_name', 'Nama:')}}
            {{ Form::text('merchant_name', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::label('merchant_address', 'Alamat:')}}
            {{ Form::text('merchant_address', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::label('merchant_phone_number', 'No Telepon:')}}
            {{ Form::text('merchant_phone_number', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::label('start_time', 'Start Time:')}}
            {{ Form::text('start_time', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::label('end_time', 'End Time:')}}
            {{ Form::text('end_time', null, array('class' => 'form-control', 'required' => ''))}}

            {{ Form::submit('Save', array('class' => 'btn btn-success btn-lg btn-block', 'style' => 'margin-top: 20px;'))}}
        {!! Form::close() !!}
        </div>
    </div>
        
     
    <script type="text/javascript">
        $(".start_time").datetimepicker({
            format: "dd MM yyyy - hh:ii"
        });
    </script>            