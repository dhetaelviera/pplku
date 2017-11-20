@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
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

                        <div class="form-group{{ $errors->has('alamat') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Alamat</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="alamat" value="{{ old('alamat') }}">

                               @if ($errors->has('alamat'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('alamat') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('kecamatan') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Kecamatan</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="kecamatan" value="{{ old('kecamatan') }}">
 
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('kabupaten') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Kabupaten</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="kabupaten" value="{{ old('kabupaten') }}">
 
                            </div>
                        </div>  

                        <div class="form-group{{ $errors->has('provinsi') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Provinsi</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="provinsi" value="{{ old('provinsi') }}">
 
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('noTelepon') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">no. Telepon</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="noTelepon" value="{{ old('noTelepon') }}">

                               @if ($errors->has('noTelepon'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('noTelepon') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('noTelepon') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">no. Rekening</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="rekening" value="{{ old('rekening') }}">

                               @if ($errors->has('rekening'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('rekening') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                 <input type="text" class="form-control" name="username" value="{{ old('username') }}">

                               @if ($errors->has('username'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div> 

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group{{$errors->has ('sebagai') ? 'has-error':''}}">
                            <label class="col-md-4 control-label">Sebagai</label>
                        
                        <div class="col-md-6">
                            <select name="sebagai" class="form-control">
                                <option value="1">agen</option>
                                <option value="2">pengusaha</option>
                            </select>
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
