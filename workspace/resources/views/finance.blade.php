@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Finance Input For Farmer:</div>


                <div class="panel-body">
                     <form class="form-inline" method="POST" action="{{ route('supplier.finance.submit') }}">
                         <div class="form-group">
                            <label for="bank_name">Banking Name :</label>
                            <input type="text" class="form-control" name="bank_name">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="Insurance_name">Insurance Name :</label>
                            <input type="text" class="form-control" name="Insurance_name">
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