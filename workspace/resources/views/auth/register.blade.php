@extends('layouts.app')
 
@section('content')
 <div class="container">
     <div class="row">
         <div class="col-md-8 col-md-offset-2">
             <div class="panel panel-default">
                 <div class="panel-heading">USER Register</div>

                 <div class="panel-body">
                     <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                         {{ csrf_field() }}
 
                         <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                             <label for="name" class="col-md-4 control-label">Name</label>
 
                             <div class="col-md-6">
                                 <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>
 
                                 @if ($errors->has('name'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('name') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
 
                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Phone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" required>

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <label for="gender" class="col-md-4 control-label">Gender</label>

                            <div class="col-md-6">
                                <input id="gender" type="gender" class="form-control" name="gender" required>

                                @if ($errors->has('gender'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                             <label for="email" class="col-md-4 control-label">E-Mail Address</label>
 
                             <div class="col-md-6">
                                 <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>
 
                                 @if ($errors->has('email'))
                                     <span class="help-block">
                                         <strong>{{ $errors->first('email') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
 

                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">Address</label>
 
                             <div class="col-md-6">

                                <input id="address" type="address" class="form-control" name="address" required>
 

                                @if ($errors->has('address'))
                                     <span class="help-block">

                                        <strong>{{ $errors->first('address') }}</strong>
                                     </span>
                                 @endif
                             </div>
                         </div>
 
                        
                        <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                            <label for="nid" class="col-md-4 control-label">NID:</label>

                            <div class="col-md-6">
                                <input id="nid" type="nid" class="form-control" name="nid" required>

                                @if ($errors->has('nid'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nid') }}</strong>
                                    </span>
                                @endif
                            </div>
                       </div>

                        <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                            <label for="category" class="col-md-4 control-label">Category</label>
 
                             <div class="col-md-6">

                                <input id="category" type="category" class="form-control" name="category" required>

                                @if ($errors->has('category'))
                                    <span class="help-block">
                                       <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                @endif
                             </div>
                         </div>
 
                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">
                                 <button type="submit" class="btn btn-primary">
                                     Register
                                 </button>
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection