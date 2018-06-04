@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Supplier Dashboard</div>


                <div class="panel-body">
                    You are logged in as <strong>Supplier</strong>!
                    <h1>Please Input some Price of Products</h1>
                    <a href="{{ route('supplier.productinput') }}"><button class="btn btn-danger">Product Page</button></a>
                    <a href="{{ route('supplier.produceinput') }}"><button class="btn btn-danger">Produce Page</button></a>
                    <a href="{{ route('supplier.serviceinput') }}"><button class="btn btn-danger">Service Page</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection