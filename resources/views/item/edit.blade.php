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
                <h3>Edit Item</h3>
                <hr>
                  <form action="{{route('item.update',$item->id_item)}}" method="POST">
                  {{ csrf_field() }}
                  <input type="hidden" name="id_item" value="$item->id_item">
                  <input type="hidden" name="_method" value="PUT">
                    <div class="row">
                      <div class="col-md-5">
                        <label>Item Name</label>
                        <input type="text" class="form-control border-input" value="{{$item->item_name}}" name="item_name">     
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <label>Item Stock</label>
                        <input type="text" class="form-control border-input" value="{{$item->item_stock}}" name="item_stock">     
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-5">
                        <label>Item Price</label>
                        <input type="text" class="form-control border-input" value="{{$item->item_price}}" name="item_price">     
                      </div>
                    </div>       
                    <div class="row">
                      <div class="col-md-12">
                        <a href="{{ route('item.index') }}" class="btn btn-success">Cancel</a><span class="ti-plus"></span> 

                        <input type="submit" value="Save" class="btn btn-success">
                      </div>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>

@endsection