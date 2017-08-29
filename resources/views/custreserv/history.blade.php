@extends('layouts.app')

@section('sidemenubar')
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.w3-button {width:150px;}

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
                <h1>
                    <center>Histori Reservasi</center> 
                </h1>
                <br>

                <table>
                    <tr>
                        <th>No.</th>
                        <th>Nama Merchant</th>
                        <th>Status</th>
                        <th>Alasan</th> 
                        <th>Action</th>       
                    </tr>  
   
                    @foreach($history as $key => $val)
                    <tr>
                       <td>{{ $key + 1 }}</td>  
                       <td>{{$val->name}}</td>
                       <td>
                        @if($val->reservation_status == '')
                            Request
                        @else
                            {{$val->reservation_status}}
                        @endif
                        <td>
                            {{$val->alasan}}
                        </td>
                        </td>
                       <td><a href="history/detail/{{$val->id_reservation}}" class="w3-button w3-teal">Detail</a></td>  
                   </tr>
                    @endforeach
                </table>
                {{$history->links()}}
            </div>
        </div>
    </div>
</div>

@endsection




</body>
</html>

