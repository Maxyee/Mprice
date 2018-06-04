@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Supplier Product Price Input</div>


                <div class="panel-body">
                    <div class="container">
                        <h1>Please Select Your Item.</h1>
                        <a href="{{ route('supplier.Information_advisoryservice') }}"><button class="btn btn-primary">Information & advisory service</button></a>
                        <a href="{{ route('supplier.finance') }}"><button class="btn btn-primary">Finance</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection