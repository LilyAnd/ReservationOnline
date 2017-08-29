@extends('layouts.app')

@section('sidemenubar')

<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

<div class="container">
    <div class="row">
        <div class="col-sm-3 col-md-3">
            <div class="panel-group" id="accordion">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Dashboard</a>
                        </h4>
                    </div>

                   <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Item</a>
                        </h4>
                    </div>

                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ route('item.index') }}">Lihat Item</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
                
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Reservation</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="mshow">Lihat Reservasi</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <div class="col-sm-3 col-md-9">
            <div class="well">
                <h3>Form Item</h3>
				<hr>

		       {!! Form::open(array('route' => 'item.index')) !!}      

                    <!-- {{ Form::label('id', 'ID Merchant:')}}
                    {{ Form::text('id', null, array('class' => 'form-control', 'required' => ''))}}   -->     

		           {{ Form::label('item_name', 'Item Name:')}}
		           {{ Form::text('item_name', null, array('class' => 'form-control', 'required' => ''))}}          
			      
                   {{ Form::label('item_stock', 'Item Stock:')}}
		           {{ Form::text('item_stock', null, array('class' => 'form-control', 'required' => ''))}}      
                        
		           {{ Form::label('item_price', 'Item Price:')}}
		           {{ Form::text('item_price', null, array('class' => 'form-control', 'required' => ''))}}        


	    			{{ Form::submit('Save', array('class' => 'btn btn-success', 'style' => 'margin-top: 10px;'))}}
				{!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection