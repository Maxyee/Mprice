@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="height:30px;">
        <div class="col-lg-4">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:20px">
                    Product<span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('farmer.seedData') }}">Seed</a></li>
                    <li><a href="{{ route('farmer.fertilizerData') }}">Fertilizer</a></li>
                    <li><a href="{{ route('farmer.pesticideData') }}">Pesticide</a></li>
                    <li><a href="{{ route('farmer.feedData') }}">Feed</a></li>
                </ul>
            </li>
        </div>
        
        <div class="col-lg-4">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:20px">
                    Produce<span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('farmer.cropData') }}">Crop</a></li>
                    <li><a href="{{ route('farmer.fruitData') }}">Fruit</a></li>
                    <li><a href="{{ route('farmer.flowerData') }}">Flower</a></li>
                    <li><a href="{{ route('farmer.fisheriesData') }}">Fisheries</a></li>
                    <li><a href="{{ route('farmer.dairyandpoultryData') }}">Dairy and Poultry</a></li>
                </ul>
            </li> 
        </div>

        <div class="col-lg-4">
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="font-size:20px">
                    Service<span class="caret"></span>
                </a>

                <ul class="dropdown-menu" role="menu">
                    <li><a href="{{ route('farmer.Information_advisoryserviceData') }}">Information & advisory service</a></li>
                    <li><a href="{{ route('farmer.financeData') }}">Finance</a></li>
                </ul>
            </li>                     
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <div class="row">
        <table class="table">
            <tr>
                <td>ID</td>
                <td>Seed Name</td>
                <td>Seed Price</td>
                <td>Location</td>
            </tr>
            <?php
            foreach ($seeds as $seed) {
            ?>
            <tr>
                <td><?php echo $seed->id ?></td>
                <td><?php echo $seed->seed_name ?></td>
                <td><?php echo $seed->seed_price ?></td>
                <td><?php echo $seed->location ?></td>
            </tr>
            <?php
            }
            ?>
        </table>
            
            
            
        
    </div>
</div>
@endsection