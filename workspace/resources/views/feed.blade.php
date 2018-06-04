@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Feed Price Input</div>


                <div class="panel-body">
                     <form class="form-inline" method="POST" action="{{ route('supplier.feed.submit') }}">
                         <div class="form-group">
                            <label for="feed_name">Feed Name :</label>
                            <input type="text" class="form-control" name="feed_name">
                          </div>
                          <br>
                          <div class="form-group">
                            <label for="feed_price">Feed Price :</label>
                            <input type="text" class="form-control" name="feed_price">
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