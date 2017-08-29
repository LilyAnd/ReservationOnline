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

               <div class="col-sm-3 col-md-9">
            <div class="well">
                <form>
                    <h1> <center> Tabel Data Item</center></h1>

                    <div class="container">
                        @include('partials._messages')
                    </div>
                    
                    <table class="table table-striped">
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
                                {{$mhs->item_price}}<br/>
                            </td> 
                             <td>            
                                <div class="col-sm-2">
                                    <a href="{{ route('item.edit', $mhs->id_item) }}"  class="btn btn-warning">Edit</a>
                                </div>
                                <div class="col-sm-3">
                                    {!! Form::open(['route' => ['item.destroy', $mhs->id_item], 'method' => 'DELETE']) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </table>

                    <a href="{{route('item.create')}}" class="btn btn-success"><span class="ti-plus"></span> Add Item</a></th> 
                    <div class="pagination-bar text-center">
                        {{$items->links()}}
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection 