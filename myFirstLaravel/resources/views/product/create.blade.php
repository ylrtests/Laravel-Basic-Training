@extends('layouts.app')

@section("title")
    Crear Producto
@endsection

@section('content')
<div class="container-fluid">
            <div class="box box-success">
                <div class="box-header">
                    <i class="fa fa-comments-o"></i>
                    <h3 class="box-title">Formulario</h3>
                </div>
        
                <div class="box-body chat" id="chat-box">
                    <form action="/product" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Nombre:</label>
                                    <input type="text" name="name" class="form-control"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="price">Precio:</label>
                                    <input type="text" name="price" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="quantity">Cantidad:</label>
                                    <input type="text" name="quantity" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-success pull-right">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
        </div>  
    
</div>
    
@endsection
