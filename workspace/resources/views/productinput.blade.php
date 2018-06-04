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
                        <a href="{{ route('supplier.seed') }}"><button class="btn btn-primary">Seed</button></a>
                        <a href="{{ route('supplier.fertilizer') }}"><button class="btn btn-primary">Fertilizer</button></a>
                        <a href="{{ route('supplier.pesticide') }}"><button class="btn btn-primary">Pesticide</button></a>
                        <a href="{{ route('supplier.feed') }}"><button class="btn btn-primary">Feed</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection