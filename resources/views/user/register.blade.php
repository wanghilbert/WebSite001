@extends('layouts.basicStruct')

@section('section')
	<div class="container" style="width: 800px;margin:0 auto;">
	<h1>新用户注册</h1>
	<form method="GET" action="http://localhost:8000/user/registerUser" accept-charset="UTF-8">
	<!--action="http://localhost:8000/user/registerUser" ??难道不应该是 POST action="user",registerUser@store??-->
		<input name="_token" type="hidden">
		<div class="form-group">
			<label for="UserName">用户名</label>
			<input class="form-control" type="string" name="UserName" placeholder="请输入用户名、手机号或邮箱">
		</div>
		<div class="form-group">
			<label for="Password">密码</label>
			<input class="form-control" type="string" name="Password" placeholder="密码长度不小于6位">
		</div>
		<input class="btn btn-primary form-control" type="submit" value="注册">		
	</form>
	
@if($errors->any())
<ul class=”list-group”>
@foreach($errors->all() as $error)
	<li class=”list-group-item list-group-item-danger”> {{ $error }} </li>
@endforeach
</ul>
@endif

</div>
@endsection