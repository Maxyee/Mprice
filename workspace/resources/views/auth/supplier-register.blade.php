@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Supplier Register</div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('supplier.register.submit') }}">
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

                            <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                                <label for="gender" class="col-md-4 control-label">gender</label>

                                <div class="col-md-6">
                                    <input id="gender" type="text" class="form-control" name="gender" required>

                                    @if ($errors->has('gender'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('farm-name') ? ' has-error' : '' }}">
                                <label for="farm-name" class="col-md-4 control-label">farm-name</label>

                                <div class="col-md-6">
                                    <input id="farm-name" type="text" class="form-control" name="farm-name" required>

                                    @if ($errors->has('farm-name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('farm-name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('trade-licence') ? ' has-error' : '' }}">
                                <label for="nid" class="col-md-4 control-label">trade-licence</label>

                                <div class="col-md-6">
                                    <input id="trade-licence" type="text" class="form-control" name="trade-licence" value="{{ old('trade-licence') }}" required>

                                    @if ($errors->has('trade-licence'))
                                        <span class="help-block">
                                         <strong>{{ $errors->first('trade-licence') }}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                                <label for="nid" class="col-md-4 control-label">nid</label>

                                <div class="col-md-6">

                                    <input id="nid" type="text" class="form-control" name="nid" required>


                                    @if ($errors->has('nid'))
                                        <span class="help-block">

                                        <strong>{{ $errors->first('nid') }}</strong>
                                     </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('nid') ? ' has-error' : '' }}">
                                <label for="address" class="col-md-4 control-label">address:</label>

                                <div class="col-md-6">
                                    <input id="address" type="text" class="form-control" name="address" required>

                                    @if ($errors->has('address'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                <label for="phone" class="col-md-4 control-label">phone</label>

                                <div class="col-md-6">

                                    <input id="phone" type="text" class="form-control" name="phone" required>

                                    @if ($errors->has('phone'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="email" class="col-md-4 control-label">email</label>

                                <div class="col-md-6">

                                    <input id="email" type="text" class="form-control" name="email" required>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('social-media') ? ' has-error' : '' }}">
                                <label for="social-media" class="col-md-4 control-label">social-media</label>

                                <div class="col-md-6">

                                    <input id="social-media" type="text" class="form-control" name="social-media" required>

                                    @if ($errors->has('social-media'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('social-media') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('nature-of-bussiness') ? ' has-error' : '' }}">
                                <label for="nature-of-bussiness" class="col-md-4 control-label">nature-of-bussiness</label>

                                <div class="col-md-6">

                                    <input id="nature-of-bussiness" type="text" class="form-control" name="nature-of-bussiness" required>

                                    @if ($errors->has('nature-of-bussiness'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('nature-of-bussiness') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('category') ? ' has-error' : '' }}">
                                <label for="category" class="col-md-4 control-label">category</label>

                                <div class="col-md-6">

                                    <input id="category" type="text" class="form-control" name="category" required>

                                    @if ($errors->has('category'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('remarks') ? ' has-error' : '' }}">
                                <label for="remarks" class="col-md-4 control-label">remarks</label>

                                <div class="col-md-6">

                                    <input id="remarks" type="text" class="form-control" name="remarks" required>

                                    @if ($errors->has('remarks'))
                                        <span class="help-block">
                                       <strong>{{ $errors->first('remarks') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Supplier Register
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