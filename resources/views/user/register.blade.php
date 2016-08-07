@extends('layouts.website')

@section('section')
	<div class="container" style="width: 800px;margin:0 auto;">
		<div class="row">
			<div id="showText">		
			</div>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/user/registerUser') }}">
                {!! csrf_field() !!}
                <div class="form-group{{ $errors->has('UserName') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">用户名</label>

                    <div class="col-md-6">
                        <input type="text" class="form-control" name="UserName" value="{{ old('UserName') }}">

                        @if ($errors->has('UserName'))
                            <span class="help-block">
                                <strong>{{ $errors->first('UserName') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">密码</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('Password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-4 control-label">确认密码</label>

                    <div class="col-md-6">
                        <input type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>

<!--                             <div class="col-md-6">
                        <input type="file" class="form-control" name="fileName">
                    </div> -->
                </div>

                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-user"></i>注册
                        </button>
                    </div>
                </div>
            </form>
		</div>
	</div>
@endsection