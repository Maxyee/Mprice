@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Information_advisoryservice Input For Farmer:</div>


                <div class="panel-body">
                     <form class="form-inline" method="POST" action="{{ route('supplier.Information_advisoryservice.submit') }}">
                         <div class="form-group">
                            <label for="infomobileapp_name">Mobile App Name :</label>
                            <input type="text" class="form-control" name="infomobileapp_name">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="infowebsite_price">Website Name :</label>
                            <input type="text" class="form-control" name="infowebsite_name">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="infocallcenter_number">Call Center Number :</label>
                            <input type="text" class="form-control" name="infocallcenter_number">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="location">Your Location</label>
                            <input type="text" class="form-control" name="location">
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