@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Seed Price Input</div>


                <div class="panel-body">
                     <form class="form-inline" method="POST" action="{{ route('supplier.seed.submit') }}">
                         <div class="form-group">
                            <label for="seed_name">Seed Name :</label>
                            <input type="text" class="form-control" name="seed_name" required>
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="seed_price">Seed Price :</label>
                            <input type="text" class="form-control" name="seed_price" required>
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="location">Your Location</label>
                            <input type="text" class="form-control" name="location" required>
                          </div>
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">
                          <br>
                          <input type="submit" name="submit" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection