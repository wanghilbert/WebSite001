@extends('layouts.website')

@section('section')
    <div class="container" style="width: 800px;margin:0 auto;">
        <div class="row">
            <div id="showText">     
            </div>
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                {!! csrf_field() !!}
                <div class="form-group">
                    <label for="username" class="col-lg-2 col-sm-2 control-label">用户名</label>
                    <div class="col-lg-10 col-sm-10">
                        <input type="text" class="form-control" id="username" name="UserName" placeholder="请输入用户名、手机号或邮箱"/>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password" class="col-lg-2 col-sm-2 control-label">密码</label>
                    <div class="col-lg-10 col-sm-10">
                        <input type="password" class="form-control" id="passwd" name="password" placeholder="请输入密码"/>
                    </div>  
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-sm-offset-2">
                        <div class="checkbox">
                            <label>
                                <input id="ckbRem" type="checkbox" name="remember"/>请记住我
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-lg-offset-2 col-sm-offset-2 col-lg-10 col-sm-10">
                        <button id="btnLogin" type="submit" class="btn btn-default">登录</button>

                        <a class="btn btn-link" href="{{ url('/password/reset') }}">忘记密码?</a>
                    </div>
                </div>
            </form> 
        </div>
    </div>
@endsection
