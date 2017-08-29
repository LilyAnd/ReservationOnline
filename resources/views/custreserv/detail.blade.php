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
    background-color: #86b300;
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
               
            <center><h1>Tabel Merchant</h1></center>
          <div class="col-sm-3 col-md-12">
            <div class="well">
                @foreach($admins as $val)

                   <h5>Nama Merchant<span style="margin-left:2.5em" ></span>:<input type="hidden" name="id_admin" value="{{ $val->id }}"> <span>{{$val->name}}</span><br>
                   </h5>

                   <h5>Nomor Telepon<span style="margin-left:2.5em"> :<input type="hidden" name="phone_number" value="{{ $val->phone_number }}"> <span>{{$val->phone_number}}</span><br>
                    </h5> 

                    <h5>Waktu Buka<span style="margin-left:4em"> :<input type="hidden" name="start_time" value="{{ $val->start_time }}"> <span>{{$val->start_time}}</span><br></h5> 
                    <h5> Waktu Tutup<span style="margin-left:3.75em"> :<input type="hidden" name="end_time" value="{{ $val->end_time }}"> <span>{{$val->end_time}}</span><br>
                    </h5>
                </div>
                </div>
                <br><table class="table table-striped">
                    <tr>
                        <th>No</th>
                        <th>Nama Item</th>
                        <th>Harga</th>
                       
                    </tr>
                    @foreach($items as $key => $value)
                    
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$value->item_name}}</td>
                        <td>Rp. {{$value->item_price}}</td>
                        
                    </tr>
                    
                    @endforeach
                </table>
                <br>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection



</body>
</html>

