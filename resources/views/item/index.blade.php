@extends('layouts.app')

@section('sidemenubar')

 <!DOCTYPE html>
 <html>
 <head>
    
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
                <form>
                    <h1>Tabel Data Item</h1>

                    <div class="container col-md-12">
                        @include('partials._messages')
                    </div>
                    <br>
                     <br>
                     <a href="{{route('item.create')}}" class="btn btn-info" ><span  class="ti-plus"></span> Tambah Item</a></th> 
                     <br>
                      <br>

                    <table>
                        <tr>
                            <th>
                                No.
                            </th>           
                            <th>
                                Item Name
                            </th>
                            <th>
                                Item Stock
                            </th>
                            <th>
                                Item Price
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>   
                    
                        @foreach($items as $key => $mhs)
                        <form action="{{route('item.destroy',$mhs->id_item)}}" method="POST"  class="form-inline">
                        <tr>
                            <td>
                                {{ $key + 1 }}<br/>
                            </td>   
                            <td>
                                {{$mhs->item_name}}<br/>
                            </td>
                            <td>
                                {{$mhs->item_stock}}<br/>
                            </td>
                            <td>
                                Rp. {{$mhs->item_price}}<br/>
                            </td> 
                             <td>    

                                <div class="col-sm-3">
                                    <a href="{{ route('item.edit', $mhs->id_item) }}"  class="btn btn-warning">Edit</a>
                                </div>

                                <div class="col-sm-1">
                                    {!! Form::open(['route' => ['item.destroy', $mhs->id_item], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                   
                    <div class="pagination-bar text-center">
                        {{$items->links()}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
 </body>
 </html>
