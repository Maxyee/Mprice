@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Supplier ProDuce Price Input</div>


                <div class="panel-body">
                     <div class="container">
                        <h1>Please Select Your Item.</h1>
                        <a href="{{ route('supplier.crop') }}"><button class="btn btn-primary">Crop</button></a>
                        <a href="{{ route('supplier.fruit') }}"><button class="btn btn-primary">Fruit</button></a>
                        <a href="{{ route('supplier.flower') }}"><button class="btn btn-primary">Flower</button></a>
                        <a href="{{ route('supplier.fisheries') }}"><button class="btn btn-primary">Fisheries</button></a>
                        <a href="{{ route('supplier.dairyandpoultry') }}"><button class="btn btn-primary">Dairy-and-Poultry</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection