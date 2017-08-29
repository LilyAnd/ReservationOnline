@extends('layouts.app')

@section('sidemenubar')
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<style type="text/css">

  table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

th {
    background-color:#86b300;
    color: white;
}
h3{
    color: red;
}


</style>
<body>
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
                    <div id="collapseOne" class="panel-collapse collapse in">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="home">Dashboard</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    </div>

                    <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Reservasi</a>
                        </h4>
                    </div>
                    <div id="collapseTwo" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-pencil text-primary"></span><a href="daftar">Pilih Item</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-file">
                            </span>History Reservasi</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-eye-open text-primary"></span><a href="">Lihat History</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>        

        <div class="col-sm-3 col-md-9">
            <div class="well">
                <h1>Recent Reservation</h1>
            
                @foreach($reservasidata as $val)
                <b>Tanggal Reservasi: {{$val->reservation_date}} </b><br>
                
                   <br>
                  
                @endforeach
                <table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        
                    </tr>
                    
                    @foreach($details as $key => $val)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$val->item_name}}</td>
                        <td>Rp. {{$val->item_price}}</td>
                        <td>{{$val->quantity}}</td>
                        <td>Rp. {{$val->quantity*$val->item_price}}</td>
                    </tr>
                    @endforeach
                </table>
                <br>
                <h3>Total Bayar  : Rp. <?php  
                                $value = 0;
                                
                                foreach($details as $val)
                                    $value += ($val->quantity*$val->item_price);
                                
                                    echo $value;
                                ?>    
                </h3>                     
            </div>
        </div>
    </div>
</div>

@endsection
</body>
</html>

