@extends('layouts.app')

@section('sidemenubar')

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
                    <div id="collapseOne" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <a href="{{ route('admin.dashboard')}}">Dashboard</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-user">
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
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-file">
                            </span>Reservation</a>
                        </h4>
                    </div>
                    <div id="collapseThree" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="reservmerchant">Lihat Reservasi</a>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>History Reservation</a>
                        </h4>
                    </div>
                    <div id="collapseFour" class="panel-collapse collapse">
                        <div class="panel-body">
                            <table class="table">
                                <tr>
                                    <td>
                                        <span class="glyphicon glyphicon-usd"></span><a href="history-reservation">Lihat History</a>
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
                <h1>Daftar Reservasi</h1>
                    <table class="table table-striped">
                        <tr>
                            <!-- <th>ID Reservasi</th> -->
                            <th>No</th>
                            <th>Nama Customer</th>
                            <th>Item</th>
                            <th>Quantity</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th>Alasan</th>
                            <th>Action</th>
                        </tr>
  
                        @foreach($reservations_items as $key => $val)
                        <tr>
                            <td>{{$key+1}}</td>
                            <td>{{$val->name}}</td>
                            <td>{{$val->item_name}}</td>
                            <td>{{$val->quantity}}</td>
                            <td>{{$val->reservation_date}}</td>
                            <td>
                                @if($val->reservation_status==null)
                                Request
                                @else {{$val->reservation_status}}
                                @endif
                            </td>
                            <td>{{$val->alasan}}</td>
                                <td><a href="history-reservation/detail/{{$val->id_reservation}}" class="btn btn-info">Detail
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    {{$reservations_items->links()}}
            </div>
        </div>  
    </div>
</div>

@endsection

