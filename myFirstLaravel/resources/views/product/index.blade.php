@extends('layouts.app')

@section("title")
    Productos
@endsection

@section('content')
<div class="container-fluid">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-angle-double-right"></i>
                    <h3 class="box-title">Lista de productos</h3>
                </div>
            <div class="box-body chat" id="chat-box">
                <table class="table">
                    <thead>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Precio</th>
                        <th>Cantidad</th>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td >{{$product->id}}</td >
                            <td >{{$product->name}}</td >
                            <td >{{$product->price}}</td >
                            <td >{{$product->quantity}}</td >
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>  
    
</div>
    
@